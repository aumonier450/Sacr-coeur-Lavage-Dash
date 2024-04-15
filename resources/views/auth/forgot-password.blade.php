<x-guest-layout>
    @section('title')
        Mots de passe oublié?
    @endsection
    <div class="msgF">
        {{ __("Mot de passe oublié? Aucun problème.
         Indiquez-nous simplement votre adresse e-mail et 
         nous vous enverrons par e-mail un lien de réinitialisation 
         de mot de passe qui vous permettra d'en choisir un nouveau.") }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="Fpass">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mailFOR">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="btnFOrg">
            <x-primary-button>
                {{ __('Lien de réinitialisation du mot de passe par e-mail') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-guest-layout>
