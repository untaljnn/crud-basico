<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('estudiantes.store') }}" class="max-w-sm mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="nombre"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nombre
                        </label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre"
                               value="{{ old('nombre') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required>
                        @error('nombre')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="apellido_paterno"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Apellido Paterno
                        </label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno"
                               value="{{ old('apellido_paterno') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required>
                        @error('apellido_paterno')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="apellido_materno"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Apellido Materno
                        </label>
                        <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno"
                               value="{{ old('apellido_materno') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required>
                        @error('apellido_materno')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="numero_control"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Número de Control
                        </label>
                        <input type="text" name="numero_control" id="numero_control" placeholder="Número de Control"
                               value="{{ old('numero_control') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required>
                        @error('numero_control')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Guardar
                    </button>
                    <a href="{{ route('estudiantes.index') }}"
                       class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                        Cancelar
                    </a>
                </form>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
