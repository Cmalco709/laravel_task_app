<!DOCTYPE html>
<html lang="en">
    <!-- dark blue 000435   teal 8DC6BF   yellow FCBC66  orange F97B4F -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>To-Do's</title>
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<nav class="bg-[#000435] shadow-xl p-4">
<h1 class="text-xl font-bold text-white">To-Do's</h1>
</nav>
<main class="p-4">
@yield('content')
</main>
@vite('resources/js/app.js')
</body>
</html>