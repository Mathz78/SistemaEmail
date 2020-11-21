<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <h1 class="logout" style="margin-top: 2%;">This page is the Dashboard</h1>
    <a href="{{ route('dashboard') }}" class="logout">Home</a>
    <a href="{{ route('logout') }}" class="logout">Logout</a>
    <a href="{{ route('email.novo') }}" class="logout">Novo</a>
    <a href="{{ route('email.enviados') }}" class="logout">Enviados</a>

@yield('content')
</body>
</html>
