<x-layout>
    <div class="w-full px-6 py-6">

        {{-- Botones de acción --}}
        <div class="flex space-x-6 mb-6 justify-start">
            <a href="{{ route('equipos.create') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-200 ease-in-out shadow-lg transform hover:scale-105">
                Crear Nuevo EQUIPO
            </a>
        </div>

        {{-- Tabla de Equipos --}}
        <div class="overflow-x-auto bg-white shadow-xl rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white text-lg font-semibold">
                    <tr>
                        <th class="px-8 py-4 text-left">ID</th>
                        <th class="px-8 py-4 text-left">Nombre</th>
                        <th class="px-8 py-4 text-left">Tipo</th>
                        <th class="px-8 py-4 text-left">Fecha de Adquisición</th>
                        <th class="px-8 py-4 text-left">Estado</th>
                        <th class="px-8 py-4 text-left">Imagen</th>
                        <th class="px-8 py-4 text-left">Created At</th>
                        <th class="px-8 py-4 text-left">Acción</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($equipos as $equipo)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-8 py-4">{{ $equipo->id }}</td>
                            <td class="px-8 py-4">{{ $equipo->nombre }}</td>
                            <td class="px-8 py-4">{{ $equipo->tipo }}</td>
                            <td class="px-8 py-4">{{ $equipo->fecha_adquisicion }}</td>
                            <td class="px-8 py-4">{{ $equipo->estado }}</td>
                            <td class="px-8 py-4">
                                @if ($equipo->imagen)
                                    <img src="{{ asset('images/' . $equipo->imagen) }}" alt="Imagen del equipo" class="h-16 w-16 object-cover rounded-lg">
                                @else
                                    <i>No habilitada</i>
                                @endif
                            </td>
                            <td class="px-8 py-4">{{ $equipo->created_at }}</td>
                            <td class="px-8 py-4">
                                <div class="flex space-x-3 justify-center">
                                    <a href="{{ route('equipos.show', $equipo) }}" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('equipos.edit', $equipo) }}" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Estás seguro de eliminar este equipo?')" class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-600 transition duration-200 ease-in-out">
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
                {{ $equipos->links() }}
            </div>
        </div>
    </div>
</x-layout>
