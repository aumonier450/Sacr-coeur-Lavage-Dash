@extends('admin.masterR')
@section('title')
   Reservation validé
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
<div class="RAPV"><P> Reservation validé</P></div>
 </div>
</section>

@endsection