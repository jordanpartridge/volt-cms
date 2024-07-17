<x-guest-layout>
    <x-slot name="title">
       {{config('app.name')}}
    </x-slot>

    <section id="header" class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4 text-gray-800 dark:text-gray-100">Welcome to Volt CMS</h1>
            <p class="text-xl mb-8 text-gray-600 dark:text-gray-300">An elegant, developer-friendly Laravel-based CMS</p>
            <a href="#" class="bg-volt-600 hover:bg-volt-700 text-white px-8 py-3 rounded-md font-semibold transition duration-300 inline-block shadow-md hover:shadow-lg">Get Started</a>
        </div>
    </section>

    <section id="features" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center text-gray-800 dark:text-gray-100">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <h3 class="text-xl font-semibold mb-4 text-volt-600 dark:text-volt-400">Laravel-Powered</h3>
                    <p class="text-gray-600 dark:text-gray-300">Built on top of Laravel, providing a solid foundation and extensibility.</p>
                </div>
                <!-- Add more feature cards here -->
            </div>
        </div>
    </section>

    <!-- Add more sections as needed -->

</x-guest-layout>
