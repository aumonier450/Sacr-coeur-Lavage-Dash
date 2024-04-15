<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{ config('app.name')}} | @yield('title')</title>
    <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.1-web/css/all.css")}}">
</head>
<body>
   <section class="Mas">
    <div class="backI">
        <div class="fondI"></div>
    </div>
    <div class="Content-login">
        <P class="Plogin">Connectez vous pour voir votre  interface admin</P>
        @yield('content')
    </div>
   </section>
   @yield('ReservationE')
</body>
</html>