<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'MyApp')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
</head>
<body>
    @include('components.navbar')
    @yield('content') {{-- this is where your (h1 or other passed data) will appear:
    first impot file by @extends('layouts.app')
    then pass data by 
    @section('content')
      <h1>this is </h1>
     @endsection --}} 
     
     <!-- script for navbar -->
     <script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    menuBtn.addEventListener('click', () => {
      // Toggle menu container visibility
      mobileMenu.classList.toggle('hidden');
      
      // Swap icons inside the button
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  </script>
</body>
</html>