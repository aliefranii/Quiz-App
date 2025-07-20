<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quiz</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex">
                        <a href="/" class="text-gray-900 text-lg font-semibold">Quiz App</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Section -->
        <main class="flex-grow py-12">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                &copy; {{ date('Y') }} Quiz App. All rights reserved.
            </div>
        </footer>
    </div>
</body>

</html>
