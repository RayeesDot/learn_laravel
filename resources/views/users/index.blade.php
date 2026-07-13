@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <table class="w-full border-collapse border border-gray-400 mt-4">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-2">Id</th>
                    <th class="border border-gray-300 px-2">Name</th>
                    <th class="border border-gray-300 px-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-2 ">{{ $user->id }}</td>
                        <td class="border border-gray-300 px-2 ">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-2 ">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>



        @php

        @endphp
    </div>
@endsection