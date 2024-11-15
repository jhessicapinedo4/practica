<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crud de Equipos</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  @vite('resources/css/app.css') {{-- Asegúrate de que Tailwind está configurado correctamente --}}
</head>
<body class="bg-gray-50">

  <!-- Barra de Navegación -->
  <nav class="bg-blue-600 shadow-lg p-8">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <a href="{{ route('equipos.index') }}" class="text-white text-xl font-semibold hover:text-gray-300">CRUD MANTENIMIENTO</a>
      <div class="space-x-4">
        <a href="{{ route('dashboard') }}" class="text-white hover:text-gray-300">Dashboard</a>
        <a href="{{ route('equipos.index') }}" class="text-white hover:text-gray-300">Equipos</a>
        <a href="{{ route('mantenimientos.index') }}" class="text-white hover:text-gray-300">Mantenimientos</a>
        <a href="{{ route('responsables.index') }}" class="text-white hover:text-gray-300">Responsables</a>
      </div>
    </div>
  </nav>

  <!-- Contenido Principal -->
  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    
    {{-- Mensaje de Éxito --}}
    @session('success') 
        <div class="bg-green-500 text-white p-4 rounded-md shadow-md mb-6">
          <i class="fa fa-check-circle mr-2"></i> {{ session('success') }}
        </div>
    @endsession
    
    {{-- Aquí se insertará el contenido de la vista --}}
    {{ $slot }}

  </div>

</body>
</html>
