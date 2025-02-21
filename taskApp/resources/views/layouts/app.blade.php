<!DOCTYPE html>
<html lang="en">
    <!-- dark blue 000435   teal 8DC6BF   yellow FCBC66  orange F97B4F -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>To-Do's</title>
<link rel="icon" type="image/x-icon" href="{{ asset('imgs/navbarlogo.png') }}">
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<nav class="bg-[#000435] shadow-xl p-4">
<div class="flex justify-between items-center">
<h1 class="text-xl font-bold text-white min-w-[200px]">To-Do's</h1>
<img class="ml-auto" src="{{ asset('imgs/ToDoLogo.PNG')}}" width="75" height="75" alt="">
</div>
</nav>
<main class="p-4">
@yield('content')
</main>
@vite('resources/js/app.js')
</body>
</html>