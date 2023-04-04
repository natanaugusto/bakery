<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-green-50">
    <div
        class="bg-dots-darker dark:bg-dots-lighter relative min-h-screen bg-center selection:bg-green-500 selection:text-white dark:bg-green-900 sm:flex sm:items-center sm:justify-center">
        @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-green-600 hover:text-green-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-green-500 dark:text-green-400 dark:hover:text-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-green-600 hover:text-green-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-green-500 dark:text-green-400 dark:hover:text-white">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-green-600 hover:text-green-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-green-500 dark:text-green-400 dark:hover:text-white">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="mx-auto max-w-7xl p-6 lg:p-8">
            <div class="container mx-auto py-8">
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="md:w-1/2">
                        <h1 class="mb-4 text-green-800 text-3xl font-bold">Welcome to our Bakery Control System</h1>
                        <p class="mb-6  text-green-800">Our system allows you to manage inventory levels, track incoming orders, and
                            provide personalized service to your customers.</p>
                        <a href="{{ route('register') }}"
                            class="rounded bg-green-500 py-2 px-4 font-bold text-white hover:bg-green-700">Get Started</a>
                    </div>
                    <div class="md:w-2/2">
                        <x-application-logo-v2/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
