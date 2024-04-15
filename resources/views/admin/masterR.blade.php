<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.1-web/css/all.css")}}">
    <title>{{ config('app.name')}} | @yield('title')</title>
</head>
<body>
   @yield('ReservationE')
   <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password',);
        var showPasswordCheckbox = document.getElementById('showPassword');

        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
    }
    


</script>
</body>
</html>