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
                <div class="text-center py-12 px-6">
                    <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to the Quiz App!</h1>
                    <p class="text-lg mb-8">Test your knowledge and improve your skills with interactive quizzes.</p>

                    <!-- Tombol untuk Sign Up dan Sign In -->
                    <div class="flex justify-center space-x-6">
                        <!-- Tombol Sign Up -->
                        <a href="{{ route('register') }}"
                            class="px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-md shadow-md text-lg">
                            Sign Up
                        </a>

                        <!-- Tombol Sign In -->
                        <a href="{{ route('login') }}"
                            class="px-6 py-3 text-white bg-gray-600 hover:bg-gray-700 rounded-md shadow-md text-lg">
                            Sign In
                        </a>
                    </div>
                </div>
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
