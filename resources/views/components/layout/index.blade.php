<!DOCTYPE html>
<html lang="en"  x-data="{ darkMode: false }" x-init="
    darkMode = localStorage.getItem('theme') === 'dark';
    if (darkMode) document.documentElement.classList.add('dark');">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>{{$title}}</title>
</head>
<body>
<div class="dark">
<x-layout.header />

{{ $slot }}

<x-layout.footer />
</body>
</html>

