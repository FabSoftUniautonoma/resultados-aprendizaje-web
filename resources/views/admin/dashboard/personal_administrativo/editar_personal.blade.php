@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Editar Administrativo</h2>
    <form action="{{ route('administrativos.update', $administrativo->id_administrativos) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método HTTP PUT para actualizar -->

        <!-- Campo Nombre -->
        <div class="mb-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" name="nombre_personal" id="nombre_personal" class="form-control @error('nombre_personal') is-invalid @enderror" value="{{ old('nombre_personal', $administrativo->nombre_personal) }}" required>
            @error('nombre_personal')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Apellido -->
        <div class="mb-3">
            <label for="apellido_personal" class="form-label">Apellido</label>
            <input type="text" name="apellido_personal" id="apellido_personal" class="form-control @error('apellido_personal') is-invalid @enderror" value="{{ old('apellido_personal', $administrativo->apellido_personal) }}" required>
            @error('apellido_personal')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Identificación -->
        <div class="mb-3">
            <label for="identificacion_personal" class="form-label">Identificación</label>
            <input type="text" name="identificacion_personal" id="identificacion_personal" class="form-control @error('identificacion_personal') is-invalid @enderror" value="{{ old('identificacion_personal', $administrativo->identificacion_personal) }}" required>
            @error('identificacion_personal')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Rol -->
        <div class="mb-3">
            <label for="personal_rol" class="form-label">Rol</label>
            <select name="personal_rol" id="personal_rol" class="form-select @error('personal_rol') is-invalid @enderror" required>
                <option value="Docente" {{ old('personal_rol', $administrativo->personal_rol) == 'Docente' ? 'selected' : '' }}>Docente</option>
                <option value="Coordinador" {{ old('personal_rol', $administrativo->personal_rol) == 'Coordinador' ? 'selected' : '' }}>Coordinador</option>
                <option value="Vicerrector" {{ old('personal_rol', $administrativo->personal_rol) == 'Vicerrector' ? 'selected' : '' }}>Vicerrector</option>
            </select>
            @error('personal_rol')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón para guardar cambios -->
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('gestionarAdministrativos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
