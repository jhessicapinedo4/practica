<x-layout>
    <div class="w-full px-6 py-6">

        {{-- Botones de acción --}}
        <div class="flex space-x-6 mb-6 justify-start">
            <a href="{{ route('mantenimientos.create') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-200 ease-in-out shadow-lg transform hover:scale-105">
                Crear Nuevo Mantenimiento
            </a>
        </div>

        {{-- Tabla de Mantenimientos --}}
        <div class="overflow-x-auto bg-white shadow-xl rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white text-lg font-semibold">
                    <tr>
                        <th class="px-8 py-4 text-left">ID</th>
                        <th class="px-8 py-4 text-left">Equipo</th>
                        <th class="px-8 py-4 text-left">Responsable</th>
                        <th class="px-8 py-4 text-left">Fecha de Mantenimiento</th>
                        <th class="px-8 py-4 text-left">Tipo de Mantenimiento</th>
                        <th class="px-8 py-4 text-left">Descripción</th>
                        <th class="px-8 py-4 text-left">Costo</th>
                        <th class="px-8 py-4 text-left">Created At</th>
                        <th class="px-8 py-4 text-left">Acción</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($mantenimientos as $mantenimiento)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-8 py-4">{{ $mantenimiento->id }}</td>
                            <td class="px-8 py-4">{{ $mantenimiento->equipo->nombre }}</td> {{-- Mostrar el nombre del equipo --}}
                            <td class="px-8 py-4">{{ $mantenimiento->responsable->nombre }}</td> {{-- Mostrar el nombre del responsable --}}
                            <td class="px-8 py-4">{{ $mantenimiento->fecha_mantenimiento }}</td>
                            <td class="px-8 py-4">{{ $mantenimiento->tipo_mantenimiento }}</td>
                            <td class="px-8 py-4">{{ $mantenimiento->descripcion }}</td>
                            <td class="px-8 py-4">{{ $mantenimiento->costo }}</td>
                            <td class="px-8 py-4">{{ $mantenimiento->created_at }}</td>
                            <td class="px-8 py-4">
                                <div class="flex space-x-3 justify-center">
                                    <a href="{{ route('mantenimientos.show', $mantenimiento) }}" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('mantenimientos.edit', $mantenimiento) }}" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('mantenimientos.destroy', $mantenimiento) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Estás seguro de eliminar este mantenimiento?')" class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-600 transition duration-200 ease-in-out">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Paginación --}}
        <div class="mt-6 flex justify-center">
            <div class="pagination">
                {{ $mantenimientos->links() }}
            </div>
        </div>
    </div>
</x-layout>
