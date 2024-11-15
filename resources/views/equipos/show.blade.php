<x-layout>
    <div class="mid-container">
        <h2>Equipo Details</h2>
        <div class="blog-details">
            <h3>Nombre:</h3>
            <p>{{ $equipo->nombre }}</p>
        </div>
        <div class="blog-details">
            <h3>Tipo:</h3>
            <p>{{ $equipo->tipo }}</p>
        </div>
        <div class="blog-details">
            <h3>Estado:</h3>
            <p>{{ $equipo->estado }}</p>
        </div>
        <div class="blog-details">
            <h3>Fecha de Adquisición:</h3>
            <p>{{ $equipo->fecha_adquisicion }}</p>
        </div>
        <div class="blog-details">
            <h3>Imagen:</h3>
            <p>
                @if (!empty($equipo->imagen))
                    <img style="height: 60px" src="{{ asset('images/' . $equipo->imagen) }}" alt="Imagen del equipo">
                @else
                    <i>No habilitada</i>
                @endif
            </p>
        </div>
        <a href="{{ route('equipos.index') }}" class="action-link view-link">Back</a>
        <a href="{{ route('equipos.edit', $equipo->id) }}" class="action-link edit-link">Edit</a>
    </div>
</x-layout>
