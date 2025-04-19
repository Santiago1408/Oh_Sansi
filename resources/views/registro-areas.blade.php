<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=fo, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Areas</title>
</head>
<body>
    <header>
        <h1>Areas registradas</h1>
    </header>

  

    <div class="listado">
        @foreach($areas as $area)
            <div class="item">
                <p>{{ $area->nombre }} - {{ $area->costo }}</p>
                <button class="eliminar">Eliminar</button>
            </div>
        @endforeach
    </div>
    

    <h2>Registrar area</h2>
    <form action="{{ route('areas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del area: </label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="costo">Costo: </label>
        <input type="number" name="costo" id="costo" required>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>