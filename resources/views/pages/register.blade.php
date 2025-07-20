@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-6">Sign Up</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required autofocus>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"
                    required>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md">Sign Up</button>
        </form>

        <p class="mt-4 text-center">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700">Sign In</a>
        </p>
    </div>
@endsection
