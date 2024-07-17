<!-- resources/views/layouts/card-based.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="transition-colors duration-300">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Card-based Page' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-br from-purple-100 to-indigo-200 dark:from-gray-900 dark:to-purple-900 min-h-screen transition-colors duration-300">
<header class="bg-gradient-to-r from-purple-600 to-indigo-600 dark:from-purple-800 dark:to-indigo-800 text-white p-4 shadow-lg">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">{{ config('app.name') }}</h1>
    </div>
</header>

<main class="container mx-auto mt-8 px-4">
    <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">{{ $title ?? 'Card Grid' }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {{ $slot }}
    </div>
</main>

<footer class="bg-gray-800 dark:bg-gray-900 text-white mt-12 py-6">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>

@livewireScripts
</body>
</html>
