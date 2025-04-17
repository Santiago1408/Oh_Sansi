<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Inscripción</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto p-6 mt-10 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-blue-700">Detalles de la Inscripción</h1>

        <h2 class="text-xl font-semibold mb-4">Datos del Postulante</h2>
        <div class="space-y-2 mb-6">
            <p><span class="font-semibold">Nombre:</span> {{ $inscription->competitor->name }}
                {{ $inscription->competitor->last_name }}</p>
            <p><span class="font-semibold">Email:</span> {{ $inscription->competitor->email }}</p>
            <p><span class="font-semibold">Curso:</span> {{ $inscription->competitor->grade }}</p>
            <p><span class="font-semibold">C.I.:</span> {{ $inscription->competitor->ci }}</p>
        </div>

        <h3 class="text-lg font-semibold mb-2">Áreas Inscritas</h3>
        <ul class="space-y-4 mb-6">
            @foreach ($inscription->areaInscriptions as $areaInscription)
                <li class="bg-gray-50 p-4 rounded-lg border">
                    <p><strong>Área:</strong> {{ $areaInscription->areaLevelGrade->area->name }}</p>
                    <p><strong>Nivel:</strong> {{ $areaInscription->areaLevelGrade->level->name }}</p>
                    <p><strong>Grado:</strong> {{ $areaInscription->areaLevelGrade->grade->name }}</p>
                    <p><strong>Descripción:</strong> {{ $areaInscription->areaLevelGrade->area->description }}</p>
                    <p><strong>Precio:</strong> ${{ $areaInscription->areaLevelGrade->area->price }}</p>
                </li>
            @endforeach
        </ul>

        <h3 class="text-lg font-semibold mb-2">Orden de Pago</h3>

        @if ($paymentOrder)
            <div class="bg-green-50 border border-green-200 p-4 rounded-lg space-y-2">
                <p><strong>Código:</strong> {{ $paymentOrder->code }}</p>
                <p><strong>Monto Total:</strong> ${{ $paymentOrder->total }}</p>
                <p><strong>Estado:</strong>
                    <span class="uppercase font-medium text-green-700">
                        {{ ucfirst($paymentOrder->status) }}
                    </span>
                </p>

                <a href="{{ route('inscriptions.pdf', $inscription->id) }}"
                    class="inline-block mt-4 bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900 transition">
                    Descargar PDF
                </a>
            </div>
        @else
            <form method="POST" action="{{ route('inscriptions.generate_order', $inscription->id) }}" class="mt-4">
                @csrf
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md shadow-md transition">
                    Generar Orden de Pago
                </button>
            </form>
        @endif
    </div>
</body>

</html>
