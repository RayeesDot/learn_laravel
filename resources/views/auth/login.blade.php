@extends('layouts.app')
@section('content')
<h1>Login</h1>
@if ($errors->any())
{
    <div class="error">
        @foreach ($errors->all() as $error )
        <p>{{ $error }}</p>
        @endforeach
    </div>
    
}
@endif

<form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="enter email" value="{{ old('email') }}"> {{-- we can get value back bec. in AuthWebController we set ->withInput() --}}
        <input type="password" name="password" placeholder="enter password">
        <button type="submit">Login</button>
</form>


@endsection