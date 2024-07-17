<!-- resources/views/layouts/sidebar.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sidebar Page' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100">
<header class="bg-green-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">{{ config('app.name') }}</h1>
    </div>
</header>

<div class="container mx-auto mt-8 px-4 flex">
    <aside class="w-1/4 pr-8">
        <nav class="bg-white p-4 rounded shadow">
            <!-- Add your sidebar navigation here -->
            <ul>
                <li><a href="#" class="text-blue-600 hover:underline">Link 1</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Link 2</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">Link 3</a></li>
            </ul>
        </nav>
    </aside>

    <main class="w-3/4">
        {{ $slot }}
    </main>
</div>

<footer class="bg-gray-800 text-white mt-12 py-6">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>

@livewireScripts
</body>
</html>
