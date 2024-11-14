@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Editar Programa Académico</h4>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar: {{ $programa->nombre_programa }}</h4>
                </div>
                <div class="card-body">
                    <!-- Formulario de edición -->
                    <form action="{{ route('programas.update', $programa->id_programa) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre_programa">Nombre del Programa</label>
                            <input type="text" class="form-control" name="nombre_programa" value="{{ $programa->nombre_programa }}" required>
                        </div>

                        <div class="form-group">
                            <label for="codigo_programa">Código del Programa</label>
                            <input type="text" class="form-control" name="codigo_programa" value="{{ $programa->codigo_programa }}" required>
                        </div>

                        <div class="form-group">
                            <label for="facultad_id">Facultad</label>
                            <select class="form-control" name="facultad_id" required>
                                @foreach($facultades as $facultad)
                                    <option value="{{ $facultad->id_facultad }}" {{ $programa->facultad_id == $facultad->id_facultad ? 'selected' : '' }}>
                                        {{ $facultad->nombre_facultad }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="numero_semestres_programa">Semestres</label>
                            <input type="number" class="form-control" name="numero_semestres_programa" value="{{ $programa->numero_semestres_programa }}" required>
                        </div>

                        <div class="form-group">
                            <label for="numero_creditos_programa">Créditos</label>
                            <input type="number" class="form-control" name="numero_creditos_programa" value="{{ $programa->numero_creditos_programa }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar Programa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
