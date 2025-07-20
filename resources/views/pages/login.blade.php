@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">Sign In</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Sign In</button>
        </form>

        <p class="mt-4 text-center">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700">Sign Up</a>
        </p>
    </div>
@endsection
