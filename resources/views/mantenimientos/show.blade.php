<x-layout>
    <div class="mid-container">
        <h2>Mantenimiento Details</h2>

        {{-- Equipo --}}
        <div class="blog-details">
            <h3>Equipo:</h3>
            <p>{{ $mantenimiento->equipo->nombre }}</p> {{-- Mostrar el nombre del equipo --}}
        </div>

        {{-- Responsable --}}
        <div class="blog-details">
            <h3>Responsable:</h3>
            <p>{{ $mantenimiento->responsable->nombre }}</p> {{-- Mostrar el nombre del responsable --}}
        </div>

        {{-- Fecha de Mantenimiento --}}
        <div class="blog-details">
            <h3>Fecha de Mantenimiento:</h3>
            <p>{{ $mantenimiento->fecha_mantenimiento }}</p>
        </div>

        {{-- Tipo de Mantenimiento --}}
        <div class="blog-details">
            <h3>Tipo de Mantenimiento:</h3>
            <p>{{ $mantenimiento->tipo_mantenimiento }}</p>
        </div>

        {{-- Descripción --}}
        <div class="blog-details">
            <h3>Descripción:</h3>
            <p>{{ $mantenimiento->descripcion }}</p>
        </div>

        {{-- Costo --}}
        <div class="blog-details">
            <h3>Costo:</h3>
            <p>{{ $mantenimiento->costo }}</p>
        </div>

        {{-- Created At --}}
        <div class="blog-details">
            <h3>Created At:</h3>
            <p>{{ $mantenimiento->created_at }}</p>
        </div>

        <a href="{{ route('mantenimientos.index') }}" class="action-link view-link">Back</a>
        <a href="{{ route('mantenimientos.edit', $mantenimiento->id) }}" class="action-link edit-link">Edit</a>
    </div>
</x-layout>
