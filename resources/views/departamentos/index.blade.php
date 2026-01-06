<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Departamentos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="max-w-5xl mx-auto py-10">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            
            
            <div class="px-6 py-4 border-b">
                <h1 class="text-2xl font-semibold text-gray-800">
                    Listado de Departamentos
                </h1>
                <p class="text-sm text-gray-500">
                    Información registrada en el sistema
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Provincia
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($departamentos as $departamento)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $departamento->id_departamento }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $departamento->nombre }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $departamento->provincia->nombre ?? 'Sin provincia' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if ($departamentos->isEmpty())
                <div class="px-6 py-4 text-center text-gray-500">
                    No hay departamentos cargados.
                </div>
            @endif

        </div>
    </div>

</body>
</html>
