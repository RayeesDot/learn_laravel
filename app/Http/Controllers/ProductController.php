<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

// only for api || api.php not for blade template||web.php
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producResult = Product::all();
        return response()->json($producResult);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //   $request is always an object. It only looks like or becomes an array at the exact moment something calls all(), toArray(), or validate() on it — because the Request class is built with those conversion methods baked in, specifically so you (or tools like the logger) can pull a plain array out whenever you need one.
          log::info($request);
          //[2026-07-08 07:15:21] local.INFO: array (
//   'name' => 'Rayees Ahmad',
//   'price' => '200',
//   'stock' => '3',
// )  

        /** 
         * //one way 
         *$name = $request->name;
         *$price = $request->price;
         *$stock = $request->stock;
         *$discription = $request->discription;
         *
         *Laravel's create() needs column => value pairs to know which field each value belongs to
         *Product::create(['name'=>$name,'price'=>$price,'stock'=>$stock,'discription'=>$discription]); 
        *
         *return  response()->json([
         *   'message'=> 'product created successfully',
         *]);
         **/

         // second way

            $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'discription'=> 'nullable|string',
            'price'=> 'required|numeric|min:0',
            'stock'=> 'required|integer|min:0'
            
        ]);

        $products =   Product::create($validated);
        return response()->json([
            'message' => 'Product Created Successfully',
            'data' => $products,
        ],201);

        // other ways
    //    eg Product::create($request->all())
        // $request->all() – Returns all input data (query parameters and form data) as an associative array.
    
    
        // $request->only(['key1', 'key2']) – Returns an associative array containing only the specified keys.
// $request->except(['key1']) – Returns an associative array excluding the specified keys.

        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if(!$product)
            {
                return response([
                    'message' => 'product not found'
                ],404);
            }
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $product = Product::find($id);
        if(!$product)
            {
                return response([
                    'message' => 'product not found'
                ],404);
            }
          
            $product->update($request->only(['price','stock']));
            return response()->json([
                'message'=>'product updated sussessfully',
                'data'=> $product
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
         $product = Product::find($id);
        if(!$product)
            {
                return response([
                    'message' => 'product not found'
                ],404);
            }

            $product->delete($id);
            return response()->json([
                'message'=>'product deleted sussessfully',
                'data'=> $product
            ]);
    }

    // for this create separate route as it not part of apiResource;
    // because Route model binding by default only works with the primary key (id)
    public function destroyByName(string $name)
    { 
     $product = Product::where('name', $name)->first();
     $product->delete();
     return response()->json([
      'message'=>'product deleted sussessfully',
     ]);

    }
}
