<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="mb-4">
                    <a href="{{ route('estudiantes.create') }}"
                       class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">
                        Agregar estudiante
                    </a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Apellido Paterno</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Apellido Materno</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Número de control</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $estudiante->nombre }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $estudiante->apellido_paterno }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $estudiante->apellido_materno }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $estudiante->numero_control }}</td>

                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">
                                    <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                                       class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                                    <button type="button"
                                            class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded"
                                            onclick="confirmDelete('{{ $estudiante->id }}')">
                                        Eliminar
                                    </button>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(id) {
        alertify.confirm('Eliminar estudiante', '¿Estás seguro de eliminar este estudiante?',
            function () {
                {
                    let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/estudiantes/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
                    alertify.success('Estudiante eliminado', '2');
                }
            }, function () {
                alertify.error('Cancelado');
            });
    }
</script>
