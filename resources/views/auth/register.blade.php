<x-guest-layout>
    @section('title')
        Inscription
    @endsection
    <form method="POST" action="{{ route('register') }}">
        @csrf
       <div class="inputCon">
         <!-- Email Address -->
         <div class="MAIL">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="PASS">
            <x-input-label for="password" :value="__('')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Mot de passe"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="CPASS">
            <x-input-label for="password_confirmation" :value="__('')" />

            <x-text-input id="password_confirmation" class=""
                            type="password"
                            placeholder="Confirmez le mot de passe"
                            name="password_confirmation" required autocomplete="new-password" />
                        
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="DjEr" href="{{ route('login') }}">
                {{ __('Déjà enregistré?') }}
            </a>

            <x-primary-button class="BTNC">
                {{ __('S’inscrire') }}
            </x-primary-button>
        </div>
       </div>
    </form>
</x-guest-layout>
