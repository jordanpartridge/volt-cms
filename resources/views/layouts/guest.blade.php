<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Volt CMS' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-dark-900 text-gray-900 dark:text-dark-200">
<header class="bg-gray-100 dark:bg-dark-800">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-volt-600 dark:text-volt-300">Volt CMS</div>
        <div>
            <a href="#features" class="px-4 py-2 text-gray-600 dark:text-dark-200 hover:text-volt-600 dark:hover:text-volt-300 transition duration-300">Features</a>
            <a href="#docs" class="px-4 py-2 text-gray-600 dark:text-dark-200 hover:text-volt-600 dark:hover:text-volt-300 transition duration-300">Docs</a>
            <a href="#contact" class="px-4 py-2 text-gray-600 dark:text-dark-200 hover:text-volt-600 dark:hover:text-volt-300 transition duration-300">Contact</a>
            <a href="/admin/login"
               class="px-4 py-2 text-gray-600 dark:text-dark-200 hover:text-volt-600 dark:hover:text-volt-300 transition duration-300">Login</a>
        </div>
    </nav>
</header>

<main>
    {{ $slot }}
</main>

<footer class="bg-gray-100 dark:bg-dark-800 text-gray-600 dark:text-dark-400 py-8">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center">
            <div>&copy; {{ date('Y') }} Volt CMS. All rights reserved.</div>
            <div>
                <a href="#" class="hover:text-volt-600 dark:hover:text-volt-300 mr-4 transition duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-volt-600 dark:hover:text-volt-300 transition duration-300">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
