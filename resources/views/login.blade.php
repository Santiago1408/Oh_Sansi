<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('images/logo-sansi.png')}}" alt="">
            <h1 class="oh-sansi">Oh! Sansi</h1>
        </div>
    </header>
    <div class="formulario">
        <div class="info">
            <h1>Iniciar Sesion</h1>
            <h2>Bienvenido a Oh! Sansi</h2>
        </div>
        <div class="campos">
            <div class="input">
                <p>E-mail</p>
                <input type="email" name="" id="">
            </div>
            <div class="input">
                <p>Contraseña</p>
                <input type="password" name="" id="">
            </div>
        </div>
        <div class="botones">
            <input type="submit" value="Iniciar Sesion">
        </div>
    </div>
</body>
</html>