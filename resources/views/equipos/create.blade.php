<x-layout>
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-lg space-y-8">

        <!-- Título -->
        <h2 class="text-3xl font-bold text-center text-indigo-600">Crear Nuevo Equipo</h2>

        <form action="{{ route('equipos.store') }}" method="post" enctype="multipart/form-data" class="space-y-6 flex flex-col md:flex-row items-center justify-between gap-8">
            @csrf  

            <!-- Formulario -->
            <div class="space-y-6 w-full md:w-1/2">

                <div class="form-group">
                    <label for="nombre" class="block text-lg font-medium text-gray-700">Nombre del Equipo</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingresa el nombre del equipo" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tipo" class="block text-lg font-medium text-gray-700">Tipo del Equipo</label>
                    <input type="text" id="tipo" name="tipo" value="{{ old('tipo') }}" placeholder="Ingresa el tipo del equipo" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('tipo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="estado" class="block text-lg font-medium text-gray-700">Estado</label>
                    <select name="estado" id="estado" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="">-- Selecciona el estado --</option>
                        <option {{ old('estado') == 'Activo' ? 'selected' : '' }} value="Activo">Activo</option>
                        <option {{ old('estado') == 'Inactivo' ? 'selected' : '' }} value="Inactivo">Inactivo</option>
                        <option {{ old('estado') == 'En mantenimiento' ? 'selected' : '' }} value="En mantenimiento">En Mantenimiento</option>
                    </select>
                    @error('estado')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fecha_adquisicion" class="block text-lg font-medium text-gray-700">Fecha de Adquisición</label>
                    <input type="date" id="fecha_adquisicion" name="fecha_adquisicion" value="{{ old('fecha_adquisicion') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('fecha_adquisicion')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imagen" class="block text-lg font-medium text-gray-700">Imagen del Equipo</label>
                    <input type="file" id="imagen" name="imagen" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('imagen')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                

                <!-- Botón de Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full px-6 py-3 bg-indigo-600 text-white text-lg font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transform transition duration-200 ease-in-out">
                        Crear Equipo
                    </button>
                </div>
            </div>

            <!-- Imagen al lado -->
            <div class="w-full md:w-1/2">
                <div class="flex justify-center items-center h-full">
                    <img src="https://img.freepik.com/fotos-premium/sistema-gestion-talentos-que-rastrea-habilidades-desarrollo-profesional-empleados_1314467-35449.jpg" alt="Imagen de ejemplo" class="rounded-lg shadow-md">
                </div>
            </div>

        </form>

        <div class="flex justify-center">
            <a href="{{ route('equipos.index') }}" class="text-indigo-600 hover:underline text-lg">Volver a la lista de equipos</a>
        </div>

    </div>
</x-layout>
