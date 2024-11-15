<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
<x-layout>
    <div class="mid-container">
        <h2>Update Mantenimiento</h2>
        <form action="{{ route('mantenimientos.update', $mantenimiento) }}" method="post" enctype="multipart/form-data">

          @method('PUT')
          @csrf

          {{-- Equipo --}}
          <div class="form-group">
              <label for="id_equipo">Equipo:</label>
              <select name="id_equipo" id="id_equipo" class="@error('id_equipo') is-invalid @enderror">
                  <option value="">-- Select --</option>
                  @foreach ($equipos as $equipo)
                      <option value="{{ $equipo->id }}" {{ old('id_equipo', $mantenimiento->id_equipo) == $equipo->id ? 'selected' : '' }}>
                          {{ $equipo->nombre }}
                      </option>
                  @endforeach
              </select>
              @error('id_equipo')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Responsable --}}
          <div class="form-group">
              <label for="id_responsable">Responsable:</label>
              <select name="id_responsable" id="id_responsable" class="@error('id_responsable') is-invalid @enderror">
                  <option value="">-- Select --</option>
                  @foreach ($responsables as $responsable)
                      <option value="{{ $responsable->id }}" {{ old('id_responsable', $mantenimiento->id_responsable) == $responsable->id ? 'selected' : '' }}>
                          {{ $responsable->nombre }}
                      </option>
                  @endforeach
              </select>
              @error('id_responsable')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Fecha de Mantenimiento --}}
          <div class="form-group">
              <label for="fecha_mantenimiento">Fecha de Mantenimiento:</label>
              <input type="date" id="fecha_mantenimiento" name="fecha_mantenimiento" value="{{ old('fecha_mantenimiento', $mantenimiento->fecha_mantenimiento) }}" class="@error('fecha_mantenimiento') is-invalid @enderror">
              @error('fecha_mantenimiento')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Tipo de Mantenimiento --}}
          <div class="form-group">
              <label for="tipo_mantenimiento">Tipo de Mantenimiento:</label>
              <input type="text" id="tipo_mantenimiento" name="tipo_mantenimiento" value="{{ old('tipo_mantenimiento', $mantenimiento->tipo_mantenimiento) }}" placeholder="Enter tipo de mantenimiento" class="@error('tipo_mantenimiento') is-invalid @enderror">
              @error('tipo_mantenimiento')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Descripción --}}
          <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <textarea id="descripcion" name="descripcion" placeholder="Enter descripcion" class="@error('descripcion') is-invalid @enderror">{{ old('descripcion', $mantenimiento->descripcion) }}</textarea>
              @error('descripcion')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          {{-- Costo --}}
          <div class="form-group">
              <label for="costo">Costo:</label>
              <input type="number" id="costo" name="costo" value="{{ old('costo', $mantenimiento->costo) }}" step="0.01" class="@error('costo') is-invalid @enderror">
              @error('costo')
                  <div class="app-error">{{ $message }}</div>
              @enderror
          </div>

          <button type="submit" class="form-btn">Update Mantenimiento</button>
        </form>
        <br>
        <a href="{{ route('mantenimientos.index') }}" class="action-link view-link">Back</a>
    </div>
</x-layout>
