<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Log In
        </h2>
    </header>

    <form method="POST" action="{{ route('login.authenticate') }}">
        @csrf
        <div class="mb-6">
            <x-input name="email" type="email" value="{{ old('email') }}" />
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <x-input name="password" type="password" value="{{ old('password') }}" />
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <x-button>Log In</x-button>
        </div>

        <div class="mt-8">
            <p>
                Don't have an account?
                <a href="/register" class="text-laravel font-bold">Register</a>
            </p>
        </div>
    </form>
</x-layout>