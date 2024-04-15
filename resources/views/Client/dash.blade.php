@extends('Client.master')
@section('title')
   
@endsection
@section('content')
<section class="Grand-content">
    <nav class="Nav">
       <div class="logo-client"> <p>Sacré coeur lavage</p></div>
<ul class="Nav-element">
    <li><a href="">Home</a></li>
    <li><a href="">Service</a></li>
    <li><a href="">Contactez nous</a></li>
</ul>
    </nav>

    <div class="Grand-acceuil">
        <div class="text-acceuil animate__fadeInLeft">
            <p>Bienvenue chez Sacré coeur lavage : Votre Destination pour un Lavage de Voiture
                 Impeccable et un Éclat Inégalé !</p>
        </div>
        <div>
            <img src="" alt="">

        </div>
    </div>
    <div class="appli-client"><a href="" class="">Telecharger l’Applie</a></div>
</section>
<section>
    <div>
        <p class="S-client">Services Complets: Extérieur-Intérieur</p>
        <br>
        <p class="TITRE-client">Découvrez notre gamme complète de services de lavage automobile, 
            offrant un soin méticuleux de l'extérieur à l'intérieur</p>
    </div>
   <div>
    <div class="service-client animate__fadeInUp">
        <div class="standar-client">
            <p class="P-standad">Forfait standard</p>
            <img src="/image/carwash1.jpg" alt="">
            <p>500 FCA</p>
        </div>
        <div class="delux-client">
            <p class="p-delux">Forfait Deluxe</p>
            <img src="/image/carwash2.jpg" alt="">
            <p>1000 FCA</p>
        </div>
        <div class="premium-client">
            <p class="p-premium">Forfait premium</p>
            <img src="/image/carwash3.jpg" alt="">
            <p>1500 FCA</p>
        </div>
    </div>
   </div>
   <div class="tarif-client  animate__zoomInLeft">
    <div class="tarif-standard">
        <p class="ptarif-standard">Forfait standard</p>
        <p>Notre Forfait Standard offre un lavage extérieur professionnel, 
            un nettoyage intérieur complet et une finition soignée.
             Idéal pour ceux qui recherchent un lavage efficace et abordable
             qui redonne à leur véhicule son éclat d'origine.</p>
    </div>
    <div class="tarif-delux">
        <p class="ptarif-delux">Forfait Deluxe</p>
        <p>Optez pour notre Forfait Deluxe pour une expérience de lavage de qualité supérieure. 
            Profitez d'un lavage extérieur en profondeur,
             d'un traitement de carrosserie premium et d'un nettoyage intérieur approfondi.
             Offrez à votre véhicule le traitement luxueux qu'il mérite.</p>
    </div>
    <div class="tarif-premium">
        <p class="ptarif-premium">Forfait premium</p>
        <p>Le summum du luxe pour votre véhicule se trouve dans notre Forfait Premium.
             Bénéficiez d'un lavage extérieur de précision, d'un traitement exclusif de la carrosserie, 
             et d'un nettoyage intérieur haut de gamme avec des produits de qualité supérieure.
             Offrez à votre voiture le traitement royal qu'elle mérite.</p>
    </div>
   </div>

   <div class="client-contact1" >
    <div class="client-contact">
        <p class="client-contacterNous">Contactez Nous</p>
        <p class="p-contact">Pour toute question ou assistance, notre équipe est à votre écoute. 
            Contactez-nous pour 
            un service personnalisé et une réponse rapide à vos besoins automobiles.</p>
            <form action="" method="get">
                @csrf
               <div> <input type="text" placeholder="Nom"></div>
                <div class="mail-contact"><input type="email" name="" id="" placeholder="E-MAIL"></div>
                <div class="contact-message"><textarea  name="" id="" cols="30" rows="5" placeholder="Message"></textarea></div>
                <div class="btn-contact"><input type="submit" value="Envoyer"></div>
        
               </form>
    </div>

    <div class="client-contact2">
       <div class="client-info">
        <P class="clientP-info">INFORMATION</P>
       <div class="client-gmail">
        <P>bassiawilliam@gmail.com</P>
        <P>07 79 48 82 28</P>
        <P>Ouvert  7J/7  de 07h à 22h</P>
       </div>
       </div>
    </div>
    <div>
       
    </div>
   </div>
   <br><br><br><br><br><br>
 <div class="letter-client">
<p class="titre-letter">Notre newsletter</p>
<p>Recevez nos offres exclusives en vous abonnant à notre newsletter.</p>
<form action="" method="get">
    @csrf
  <div class="saisir-letter"> 
     <input type="email" name="" id="" placeholder="E-mail"> 
   <div class="btn-validé"> <input type="submit" value="validé" ></div>
</div>
</form>
   </div>

<div class="background-client">
    <div class="opacity-background">
 <div>
    <P class="coeur-client">Sacré coeur lavage</P>
 <P class="footer-client">Votre partenaire de confiance pour un lavage automobile exceptionnel.
     Brillez avec notre expertise de qualité, à l'intérieur comme à l'extérieur.</P>
   <a href=""> <img src="/image/facebook.png" alt=""></a>
   <a href=""> <img src="/image/instagram.png" alt=""> </a>
 </div>
 <div class="navigation-client">
    <p>Navigation</p>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Service</a></li>
        <li><a href="">Contactez nous</a></li>
    </ul>
 </div>
 <div class="Heure-travail">
    <p>Heures de travail</p>
   <div class="date-client"> <img src="/image/lhorloge.png" alt=""><p>Ouvert  7J/7  de 07h à 22h</p></div>
 </div>
 <div class="trait-client"></div>
 <div class="copryte-client"><p>© 2024 Sacré lavage.  Tous droits réservés. </p></div>
    </div>
    

</div>
</section>
   
@endsection