@extends('admin.masterR')
@section('title')
 Edit profil
@endsection

@section('ReservationE')
<section class="GrandeRevE">
 <div class="PART1">
    <div class="LogoRE">
        <div><img src="/image/lgsacre.jpeg" alt=""></div>
        <div class="text-logo"><p>Sacré coeur lavage </p></div>
    </div>

<div class="content-RE">
    <div class="RA"><a href="{{ route('reservation') }}">Reservation en attente</a></div>
    <div class="RV"><a href="{{ route('reservationV') }}">Reservation en validé</a></div>
    <div class="CPT"><a href="{{ route('comptabilité') }}">Comptabilité </a></div>
    <div class="EP"><a href="{{ route('Editprofil') }}">Edit profil</a></div>
    <div class="Dec">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Deconnexion</button>
        </form>
    </div>
</div>
<div class="bas-texte">
 <p>Du coeur de jesus au coeur du monde </p>
</div>

 </div>



 <div class="Part2">
<div class="RAPEdit"><P> Edit profil</P></div>
 <div class="editprofil-content">
    
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        

        <div class="content-Npass">
            <x-input-label for="password" :value="__('')" />
           
            <x-text-input id="password" name="password" type="password" class="" :value="old('plain_password')"
            placeholder="Nouveau mots de passe"
            autocomplete="new-password" />
            <i class="fa fa-pencil" aria-hidden="true"   id="edit-icon"></i>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="content-CNP">
            <x-input-label for="password_confirmation" :value="__('')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" 
            placeholder="Confirmez le mot de passe"
            autocomplete="new-password" />
            <i class="fa fa-pencil" aria-hidden="true"   id="edit-icon1"></i>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        
    </form>

 <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <div class="edit-email">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <i class="fa fa-pencil" aria-hidden="true"   id="edit-icon2"></i>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />


                <div class="edit-viewpass"><input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
                    <label for="showPassword">Voir le nouveau mots de passe </label></div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="edit-btn">
            <x-primary-button>{{ __('Confirmé') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
            @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
        </div>
    </form>
 </div>
 </div>
</section>

@endsection