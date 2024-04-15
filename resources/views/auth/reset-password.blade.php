<x-guest-layout>
  <div class="Grand-reset">
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="Reset-email">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" 
                placeholder="Email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="reset-pass">
            <x-input-label for="password" :value="__('')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
            placeholder="Mots de passe"
             required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="reset-Cpas">
            <x-input-label for="password_confirmation" :value="__('')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="Confirmez le mot de passe"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="reset-button">
            <x-primary-button>
                {{ __('Réinitialiser le mot de passe') }}
            </x-primary-button>
        </div>
    </form>
  </div>
</x-guest-layout>
