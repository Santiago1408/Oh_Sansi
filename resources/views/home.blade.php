<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Oh! Sansi</title>
</head>
<body>
    @include('layouts.partials.menu-home')
    <main>
        <div class="bienvenida">
            <div class="info">
                <h2>Olimpiadas en Ciencias y Tecnología San Simón</h2>
                <h3>La facultad de Ciencias y Tecnología de la Universidad Mayor de San Simón convoca a los estudiantes
                    del Sistema de Educación Regular a participar en las olimpiadas Oh! Sansi
                </h3>
                <p>
                    Matemáticas, Física, Química, Biología, Astronomía y Astrofísica, Informática, Robótica
                </p>
                <input type="button" id="insc" value="Inscribirse" onclick="location.href='{{ route('registro') }}'">
            </div>
            <div class="mascota">
                <img src="{{asset('images/robot-sansi.png')}}" alt="">
            </div>
        </div>
    </main>
</body>
</html>