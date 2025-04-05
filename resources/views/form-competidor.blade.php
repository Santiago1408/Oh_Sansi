<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/form-competidor.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <header>
        <h2>Oh! Sansi</h2>
    </header>
    <div class="formulario">
        <h2 id="titFormulario">FORMULARIO DE INSCRIPCIÓN</h2>
        <h2>COMPETIDOR</h2>
        <div class="campos">
            <div class="seccion1">
                <p>Nombres: </p>
                <input type="text" name="nombres" id="">
                <p>Apellidos: </p>
                <input type="text" name="apellidos" id="">
                <p>Fecha de nacimeinto: </p>
                <input type="date" name="fechaNacimiento" id="">
                <p>Carnet de identidad:</p>
                <input type="text" name="ci" id="">
                <p>Correo electrónico: </p>
                <input type="email" name="email" id="">
            </div>
            <div class="seccion2">
                <p>Número de celular: </p>
                <input type="text" name="numCelular" id="">
                <p>Colegio: </p>
                <input type="text" name="colegio" id="">
                <p>Curso: </p>
                <select name="curso" id="">
                    <option value="1">1ro Secundaria</option>
                    <option value="2">2do Secundaria</option>
                    <option value="3">3ro Secundaria</option>
                    <option value="4">4to Secundaria</option>
                    <option value="5">5to Secundaria</option>
                    <option value="6">6to Secundaria</option>
                </select>
                <p>Provincia: </p>
                <input type="text" name="provincia" id="">
                <p>Departamento: </p>
                <select name="curso" id="">
                    <option value="1">Cochabamba</option>
                    <option value="2">Santa Cruz</option>
                    <option value="3">La Paz</option>
                    <option value="4">Chuquisaca</option>
                    <option value="5">Tarija</option>
                    <option value="6">Oruro</option>
                    <option value="7">Potosi</option>
                    <option value="8">Beni</option>
                    <option value="9">Pando</option>
                </select>
                <div class="botones">
                    <input type="reset" value="Cancelar" onclick="location.href='{{ route('home') }}'">
                    <input type="submit" value="Siguiente">
                </div>
            </div>
        </div>
    </div>
</body>
</html>