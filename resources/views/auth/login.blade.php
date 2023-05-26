<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mt-4 items-center text-right">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center  mt-4">



            </div>
            <div class=" items-center text-center mt-4">
                <x-button class="ml-4 hover:bg-green-600">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="text-center block mt-4">
        <hr>
            <h3 class="header-area">or</h3>
            <h3 class="text-sm text-hide">Create account here:@if (Route::has('register'))  <a href="{{ route('register') }}" class="hover:text-blue-600 text-blue-600 underline" >Register</a>
                @endif
            </h3>
        </div>
            <div class="text-center block mt-4">
            <h1 class="text-center text-sm">Login with:</h1>
        </div>
        <div class="text-center block mt-4">
        <i class="fa-brands fa-facebook fa-2xl" style="color: #238fd1;"></i>
            <i class="fa-brands fa-google-plus fa-2xl" style="color: #ca2c21;"></i>
        </div>
    </x-authentication-card>

</x-guest-layout>
<script src="https://kit.fontawesome.com/4306c43303.js" crossorigin="anonymous"></script>

