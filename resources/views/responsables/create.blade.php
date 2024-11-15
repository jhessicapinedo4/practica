<x-layout>
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-lg space-y-8">

        <!-- Título -->
        <h2 class="text-3xl font-bold text-center text-green-600 mb-6">Crear Nuevo Responsable</h2>

        <form action="{{ route('responsables.store') }}" method="post" enctype="multipart/form-data" class="space-y-6 flex flex-col md:flex-row items-center justify-between gap-8">
            @csrf  

            <!-- Formulario -->
            <div class="space-y-6 w-full md:w-1/2">

                <!-- Nombre -->
                <div class="form-group">
                    <label for="nombre" class="block text-lg font-medium text-gray-700">Nombre del Responsable</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingresa el nombre del responsable" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Cargo -->
                <div class="form-group">
                    <label for="cargo" class="block text-lg font-medium text-gray-700">Cargo</label>
                    <input type="text" id="cargo" name="cargo" value="{{ old('cargo') }}" placeholder="Ingresa el cargo del responsable" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('cargo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div class="form-group">
                    <label for="telefono" class="block text-lg font-medium text-gray-700">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ingresa el teléfono del responsable" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('telefono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Correo -->
                <div class="form-group">
                    <label for="correo" class="block text-lg font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" value="{{ old('correo') }}" placeholder="Ingresa el correo del responsable" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('correo')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botón de Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full px-6 py-4 bg-green-500 text-white text-lg font-semibold rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 transform transition duration-200 ease-in-out">
                        Crear Responsable
                    </button>
                </div>
            </div>

            <!-- Imagen al lado -->
            <div class="w-full md:w-1/2">
                <div class="flex justify-center items-center h-full">
                    <img src="https://img.freepik.com/fotos-premium/persona-que-utiliza-herramientas-marketing-movil-rastrear-eficacia-roi-campana_1327465-10205.jpg" alt="Imagen responsable" class="rounded-lg shadow-md w-full h-auto object-cover">
                </div>
            </div>

        </form>

        <!-- Volver al listado -->
        <div class="flex justify-center">
            <a href="{{ route('responsables.index') }}" class="text-green-600 hover:underline text-lg">Volver a la lista de responsables</a>
        </div>

    </div>
</x-layout>
