<x-layout>
    <div class="mid-container">
        <h2>Update Responsable</h2>
        <form action="{{ route('responsables.update', $responsable) }}" method="post" enctype="multipart/form-data">

          @method('PUT')
          @csrf

          {{-- Nombre --}}
          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $responsable->nombre) }}" placeholder="Enter nombre" class="@error('nombre') is-invalid @enderror">
              @error('nombre')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Cargo --}}
          <div class="form-group">
              <label for="cargo">Cargo:</label>
              <input type="text" id="cargo" name="cargo" value="{{ old('cargo', $responsable->cargo) }}" placeholder="Enter cargo" class="@error('cargo') is-invalid @enderror">
              @error('cargo')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Teléfono --}}
          <div class="form-group">
              <label for="telefono">Teléfono:</label>
              <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $responsable->telefono) }}" placeholder="Enter teléfono" class="@error('telefono') is-invalid @enderror">
              @error('telefono')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Correo --}}
          <div class="form-group">
              <label for="correo">Correo:</label>
              <input type="email" id="correo" name="correo" value="{{ old('correo', $responsable->correo) }}" placeholder="Enter correo" class="@error('correo') is-invalid @enderror">
              @error('correo')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          <button type="submit" class="form-btn">Update Responsable</button>
        </form>
        <br>
        <a href="{{ route('responsables.index') }}" class="action-link view-link">Back</a>
    </div>
</x-layout>
