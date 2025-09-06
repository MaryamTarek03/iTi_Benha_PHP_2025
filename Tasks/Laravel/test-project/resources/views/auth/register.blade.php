<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Register
        </h2>
    </header>

    <form method="POST" action="{{ route('register.store') }}"">
        @csrf
        <div class=" mb-6">
        <x-input name="name" type="text" label="Name" value="{{ old('name') }}" />
        </div>
        <div class="mb-6">
            <x-input name="email" type="email" label="Email" value="{{ old('email') }}" />
        </div>
        <div class="mb-6">
            <x-input name="password" type="password" label="Password" />
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <x-button>Register</x-button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="login" class="text-laravel font-bold">Log In</a>
            </p>
        </div>
    </form>
</x-layout>