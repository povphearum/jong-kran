<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('user-profile-information.update') }}">
            @csrf
            @method("PUT")
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email" required autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4 hover:bg-green-600">
                    {{ __('Summit') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
