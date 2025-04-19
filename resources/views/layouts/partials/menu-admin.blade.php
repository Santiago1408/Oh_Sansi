<style>
    header{
        display: flex;
        justify-content: space-between;
        min-height: 70px;
        background-color: #dbe9f8;
        align-items: center;
        padding: 0 10px;
        font-family: sans-serif
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

    body{
        margin: 0;
        padding: 0;
    }
</style>
<header>
    <div class="logo">
        <img src="{{asset('images/logo-sansi.png')}}" alt="">
        <h1 class="oh-sansi"><a href="{{route('home')}}">Oh! Sansi</a></h1>
    </div>
    <nav>
        <a href="" class="nav-link">Áreas</a>
        <a href="" class="nav-link">Reportes</a>
        <a href="" class="nav-link">Competencia</a>
    </nav>
</header>