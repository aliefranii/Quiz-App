@extends('layouts.app')

@section('content')
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
@endsection
