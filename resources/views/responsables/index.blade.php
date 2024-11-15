<x-layout>
    <div class="w-full px-6 py-6">

        {{-- Botones de acción --}}
        <div class="flex space-x-6 mb-6 justify-start">
            <a href="{{ route('responsables.create') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-200 ease-in-out shadow-lg transform hover:scale-105">
                Crear Nuevo Responsable
            </a>
        </div>

        {{-- Tabla de Responsables --}}
        <div class="overflow-x-auto bg-white shadow-xl rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white text-lg font-semibold">
                    <tr>
                        <th class="px-8 py-4 text-left">ID</th>
                        <th class="px-8 py-4 text-left">Nombre</th>
                        <th class="px-8 py-4 text-left">Cargo</th>
                        <th class="px-8 py-4 text-left">Teléfono</th>
                        <th class="px-8 py-4 text-left">Correo</th>
                        <th class="px-8 py-4 text-left">Created At</th>
                        <th class="px-8 py-4 text-left">Acción</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($responsables as $responsable)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-8 py-4">{{ $responsable->id }}</td>
                            <td class="px-8 py-4">{{ $responsable->nombre }}</td>
                            <td class="px-8 py-4">{{ $responsable->cargo }}</td>
                            <td class="px-8 py-4">{{ $responsable->telefono }}</td>
                            <td class="px-8 py-4">{{ $responsable->correo }}</td>
                            <td class="px-8 py-4">{{ $responsable->created_at }}</td>
                            <td class="px-8 py-4">
                                <div class="flex space-x-3 justify-center">
                                    <a href="{{ route('responsables.show', $responsable) }}" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('responsables.edit', $responsable) }}" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('responsables.destroy', $responsable) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Estás seguro de eliminar este responsable?')" class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-600 transition duration-200 ease-in-out">
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
                {{ $responsables->links() }}
            </div>
        </div>
    </div>
</x-layout>
