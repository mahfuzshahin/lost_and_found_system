@extends('layouts.app')

@section('content')

<div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
    
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
        Login
    </h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-5">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email Address
            </label>

            <input id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="email"
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('email') border-red-500 @else border-gray-300 @enderror">

            @error('email')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-5">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                Password
            </label>

            <input id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('password') border-red-500 @else border-gray-300 @enderror">

            @error('password')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Remember -->
        <div class="flex items-center mb-6">
            <input class="h-4 w-4 text-blue-600 border-gray-300 rounded"
                    type="checkbox"
                    name="remember"
                    id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

            <label for="remember" class="ml-2 block text-sm text-gray-700">
                Remember Me
            </label>
        </div>

        <!-- Button -->
        <div>
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300">
                Login
            </button>
        </div>

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <div class="text-center mt-5">
                <a href="{{ route('password.request') }}"
                    class="text-sm text-blue-600 hover:underline">
                    Forgot Your Password?
                </a>
            </div>
        @endif

    </form>
</div>
@endsection