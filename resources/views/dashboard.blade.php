<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-blue-600 mb-2">{{ __("Bienvenido!") }}</h3>
                        <p class="text-gray-700">Seleccione una de las siguientes opciones para comenzar:</p>
                    </div>

                    {{-- Opciones del Dashboard --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        {{-- Opción para Equipos --}}
                        <div class="p-6 bg-blue-100 rounded-lg shadow-lg hover:bg-blue-200 transition duration-200">
                            <a href="{{ route('equipos.index') }}" class="flex items-center justify-center text-blue-800 text-lg font-semibold hover:text-blue-600">
                                <i class="fa fa-cogs mr-3"></i> Ver Equipos
                            </a>
                        </div>

                        {{-- Opción para Mantenimientos --}}
                        <div class="p-6 bg-green-100 rounded-lg shadow-lg hover:bg-green-200 transition duration-200">
                            <a href="{{ route('mantenimientos.index') }}" class="flex items-center justify-center text-green-800 text-lg font-semibold hover:text-green-600">
                                <i class="fa fa-wrench mr-3"></i> Ver Mantenimientos
                            </a>
                        </div>

                        {{-- Opción para Responsables --}}
                        <div class="p-6 bg-yellow-100 rounded-lg shadow-lg hover:bg-yellow-200 transition duration-200">
                            <a href="{{ route('responsables.index') }}" class="flex items-center justify-center text-yellow-800 text-lg font-semibold hover:text-yellow-600">
                                <i class="fa fa-users mr-3"></i> Ver Responsables
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
