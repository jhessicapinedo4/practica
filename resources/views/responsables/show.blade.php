<x-layout>
    <div class="mid-container">
        <h2>Responsable Details</h2>

        {{-- Nombre --}}
        <div class="blog-details">
            <h3>Nombre:</h3>
            <p>{{ $responsable->nombre }}</p>
        </div>

        {{-- Cargo --}}
        <div class="blog-details">
            <h3>Cargo:</h3>
            <p>{{ $responsable->cargo }}</p>
        </div>

        {{-- Teléfono --}}
        <div class="blog-details">
            <h3>Teléfono:</h3>
            <p>{{ $responsable->telefono }}</p>
        </div>

        {{-- Correo --}}
        <div class="blog-details">
            <h3>Correo:</h3>
            <p>{{ $responsable->correo }}</p>
        </div>

        <a href="{{ route('responsables.index') }}" class="action-link view-link">Back</a>
        <a href="{{ route('responsables.edit', $responsable->id) }}" class="action-link edit-link">Edit</a>
    </div>
</x-layout>
