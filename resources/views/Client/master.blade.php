<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/client.css')}}">
    <title>{{ config('app.name')}} | @yield('title')</title>
    <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.1-web/css/all.css")}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
   @yield('content')
</body>
</html>