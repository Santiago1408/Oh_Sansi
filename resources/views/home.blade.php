<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Oh! Sansi</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('images/logo-sansi.png')}}" alt="">
            <h1 class="oh-sansi">Oh! Sansi</h1>
        </div>
        <nav>
            <a href="{{route('login')}}" class="nav-link">Administrador</a>
            <a href="{{route('login')}}" class="nav-link">Cajero</a>
            <a href="{{route('login')}}" class="nav-link">Tutor</a>
            <a href="{{route('registro')}}" class="nav-link" id="inscripcion">Inscripción</a>
        </nav>
    </header>
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