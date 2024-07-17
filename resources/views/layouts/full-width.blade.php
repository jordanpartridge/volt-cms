<!-- resources/views/layouts/full-width.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Full-width Page' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100">
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">{{ config('app.name') }}</h1>
    </div>
</header>

<main class="container mx-auto mt-8 px-4">
    {{ $slot }}
</main>

<footer class="bg-gray-800 text-white mt-12 py-6">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>

@livewireScripts
</body>
</html>
