
@extends('layouts.app')
@section('title','about')
@section('content')
 <h1>About Us</h1>
    <p>This is the about page.</p>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
@endsection
   
