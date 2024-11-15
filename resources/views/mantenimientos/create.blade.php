<x-layout> 
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-lg space-y-8">

        <!-- Título -->
        <h2 class="text-3xl font-bold text-center text-yellow-600">Crear Nuevo Mantenimiento</h2>

        <form action="{{ route('mantenimientos.store') }}" method="post" enctype="multipart/form-data" class="space-y-6 flex flex-col md:flex-row items-center justify-between gap-8">
            @csrf  

            <!-- Formulario -->
            <div class="space-y-6 w-full md:w-1/2">

                <div class="form-group">
                    <label for="id_equipo" class="block text-lg font-medium text-gray-700">Equipo:</label>
                    <select name="id_equipo" id="id_equipo" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <option value="">-- Selecciona el equipo --</option>
                        @foreach ($equipos as $equipo)
                            <option value="{{ $equipo->id }}" {{ old('id_equipo') == $equipo->id ? 'selected' : '' }}>
                                {{ $equipo->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_equipo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Responsable -->
                <div class="form-group">
                    <label for="id_responsable" class="block text-lg font-medium text-gray-700">Responsable:</label>
                    <select name="id_responsable" id="id_responsable" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <option value="">-- Selecciona el responsable --</option>
                        @foreach ($responsables as $responsable)
                            <option value="{{ $responsable->id }}" {{ old('id_responsable') == $responsable->id ? 'selected' : '' }}>
                                {{ $responsable->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_responsable')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Fecha de Mantenimiento -->
                <div class="form-group">
                    <label for="fecha_mantenimiento" class="block text-lg font-medium text-gray-700">Fecha de Mantenimiento:</label>
                    <input type="date" id="fecha_mantenimiento" name="fecha_mantenimiento" value="{{ old('fecha_mantenimiento') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('fecha_mantenimiento')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tipo de Mantenimiento -->
                <div class="form-group">
                    <label for="tipo_mantenimiento" class="block text-lg font-medium text-gray-700">Tipo de Mantenimiento:</label>
                    <input type="text" id="tipo_mantenimiento" name="tipo_mantenimiento" value="{{ old('tipo_mantenimiento') }}" placeholder="Ingresa el tipo de mantenimiento" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('tipo_mantenimiento')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcion" class="block text-lg font-medium text-gray-700">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingresa la descripción" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Costo -->
                <div class="form-group">
                    <label for="costo" class="block text-lg font-medium text-gray-700">Costo:</label>
                    <input type="number" id="costo" name="costo" value="{{ old('costo') }}" step="0.01" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('costo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botón de Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full px-6 py-4 bg-yellow-500 text-white text-lg font-semibold rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 transform transition duration-200 ease-in-out">
                        Crear Mantenimiento
                    </button>
                </div>
            </div>

            <!-- Imagen al lado -->
            <div class="w-full md:w-1/2">
                <div class="flex justify-center items-center h-full">
                    <img src="https://img.freepik.com/fotos-premium/visualizacion-informe-cumplimiento-principales-conclusiones-recomendaciones_1314467-20190.jpg" alt="Imagen de mantenimiento" class="rounded-lg shadow-md">
                </div>
            </div>

        </form>

        <div class="flex justify-center">
            <a href="{{ route('mantenimientos.index') }}" class="text-yellow-600 hover:underline text-lg">Volver a la lista de mantenimientos</a>
        </div>

    </div>
</x-layout> 
