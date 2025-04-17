<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inscripción #{{ $inscription->id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 10px;
        }

        p {
            margin: 2px 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .bold {
            font-weight: bold;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>{{ $inscription->olympic->name }} </h1>

    <div class="section">
        <h2>Datos del Postulante</h2>
        <p><span class="bold">Nombre:</span> {{ $inscription->competitor->name }}
            {{ $inscription->competitor->last_name }}</p>
        <p><span class="bold">Email:</span> {{ $inscription->competitor->email }}</p>
        <p><span class="bold">Curso:</span> {{ $inscription->competitor->grade }}</p>
        <p><span class="bold">C.I.:</span> {{ $inscription->competitor->ci }}</p>
    </div>

    <div class="section">
        <h2>Áreas Inscritas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Área</th>
                    <th>Nivel</th>
                    <th>Grado</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inscription->areaInscriptions as $areaInscription)
                    <tr>
                        <td>{{ $areaInscription->areaLevelGrade->area->name }}</td>
                        <td>{{ $areaInscription->areaLevelGrade->level->name }}</td>
                        <td>{{ $areaInscription->areaLevelGrade->grade->name }}</td>
                        <td>{{ $areaInscription->areaLevelGrade->area->description }}</td>
                        <td>${{ $areaInscription->areaLevelGrade->area->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($paymentOrder)
        <div class="section">
            <h2>Orden de Pago</h2>
            <p><span class="bold">Código:</span> {{ $paymentOrder->code }}</p>
            <p><span class="bold">Monto Total:</span> ${{ $paymentOrder->total }}</p>
            <p><span class="bold">Estado:</span> {{ ucfirst($paymentOrder->status) }}</p>
        </div>
    @endif

</body>

</html>
