<x-layout>
    <div class="mid-container">
        <h2>Update Equipo</h2>
        <form action="{{ route('equipos.update', $equipo) }}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf

          {{-- Nombre --}}
          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $equipo->nombre) }}" placeholder="Enter nombre" class="@error('nombre') is-invalid @enderror">
              @error('nombre')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Tipo --}}
          <div class="form-group">
              <label for="tipo">Tipo:</label>
              <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $equipo->tipo) }}" placeholder="Enter tipo" class="@error('tipo') is-invalid @enderror">
              @error('tipo')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Estado --}}
          <div class="form-group">
              <label for="estado">Estado:</label>
              <select name="estado" id="estado" class="@error('estado') is-invalid @enderror">
                  <option value="">-- Select --</option>
                  <option {{ old('estado', $equipo->estado) == 'Activo' ? 'selected' : '' }} value="Activo">Activo</option>
                  <option {{ old('estado', $equipo->estado) == 'Inactivo' ? 'selected' : '' }} value="Inactivo">Inactivo</option>
                  <option {{ old('estado', $equipo->estado) == 'En mantenimiento' ? 'selected' : '' }} value="En mantenimiento">En Mantenimiento</option>
              </select>
              @error('estado')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Fecha de Adquisición --}}
          <div class="form-group">
              <label for="fecha_adquisicion">Fecha de Adquisición:</label>
              <input type="date" id="fecha_adquisicion" name="fecha_adquisicion" value="{{ old('fecha_adquisicion', $equipo->fecha_adquisicion) }}" class="@error('fecha_adquisicion') is-invalid @enderror">
              @error('fecha_adquisicion')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Imagen --}}
          <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" id="imagen" name="imagen" class="@error('imagen') is-invalid @enderror">
              @if ($equipo->imagen)
                  <div>
                      <img style="height: 60px" src="{{ asset('images/' . $equipo->imagen) }}" alt="Imagen del equipo">
                  </div>
              @else
                  <i>No habilitada</i>
              @endif
              @error('imagen')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          <button type="submit" class="form-btn">Update Equipo</button>
        </form>
        <br>
        <a href="{{ route('equipos.index') }}" class="action-link view-link">Back</a>
    </div>
</x-layout>
