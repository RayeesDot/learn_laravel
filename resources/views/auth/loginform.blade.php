@extends('layouts.app')
@section('content')
<div class="px-6">
@if ($errors->any())

    <div class="error">
        @foreach ($errors->all() as $error )
        <p class="text-red-600">{{ $error }}</p>
        @endforeach
    </div>
    

@endif

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-black">Sign in to your account</h2>


  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf
      <div>
        <label for="email" class="block text-sm/6 font-medium text-black-100">Email address</label>
        <div class="mt-2 border-b-1 border-blue-600">
          <input id="email" type="email" name="email" value="{{ old('email')}}" required autocomplete="email"  class="block w-full focus:outline-none sm:text-sm/6" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-black-100">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2 border-b-1 border-blue-600">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full focus:outline-none" />
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-400">
      Not a member?
      <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Start a 14 day free trial</a>
    </p>
  </div>
</div>
</div>


<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-900">
  <body class="h-full">
  ```
-->




@endsection