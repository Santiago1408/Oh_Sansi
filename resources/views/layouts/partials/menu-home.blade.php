<style>
    body{
    font-family: sans-serif;
    margin: 0;
    }

    header{
        display: flex;
        justify-content: space-between;
        min-height: 70px;
        background-color: #dbe9f8;
        align-items: center;
        padding: 0 10px;
    }

    a{
        text-decoration: none;
        color: #000;
    }

    .logo{
        display: flex;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif   ;
    }

    .logo img{
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    nav a{
        font-weight: 400;
        padding: 0 40px;
        font-size: 18px;
    }

    nav a:hover{
        color: #00bbff;
        transition: 0.3s;
    }

    #inscripcion{
        background-color: #212756;
        color: white;
        padding: 15px 35px;
        margin-left: 30px;
    }

    #inscripcion:hover{
        background-color: #00bbff;
        color: white;
    }
</style>

<header>
    <div class="logo">
        <img src="{{asset('images/logo-sansi.png')}}" alt="">
        <h1 class="oh-sansi"><a href="{{route('home')}}">Oh! Sansi</a></h1>
    </div>
    <nav>
        <a href="{{route('login')}}" class="nav-link">Administrador</a>
        <a href="{{route('login')}}" class="nav-link">Cajero</a>
        <a href="{{route('login')}}" class="nav-link">Tutor</a>
        <a href="{{route('registro')}}" class="nav-link" id="inscripcion">Inscripción</a>
    </nav>
</header>