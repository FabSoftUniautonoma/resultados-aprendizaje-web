@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Programa </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href={{ route('dashboard') }}>
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Programa Administrativo</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('registrarProgramas.create') }}>Registrar Programa</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="{{ route('guardarProgramas.store') }} " method="POST"
                                enctype="multipart/form-data" class="needes-validation" novalidate>
                                @csrf <!-- Protección CSRF de Laravel -->
                                @method('POST')

                                <h1 class="text-center">Añadir Programa Académico</h1>
                                <!-- Campo de nombre del programa -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Título <span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('nombre_programa') is-invalid @enderror"
                                        name="nombre_programa" id="nombre_programa" value="{{ old('nombre_programa') }}"
                                        maxlength="100" placeholder="Ingrese el nombre" required>
                                    @error('nombre_programa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Campo de código del programa -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Código de Programa <span
                                            class="text-danger">*</span></label>
                                    <input type="number"
                                        class="form-control @error('codigo_programa') is-invalid @enderror"
                                        name="codigo_programa" id="codigo_programa" value="{{ old('codigo_programa') }}"
                                        maxlength="100" placeholder="Ingrese el código" required>
                                    @error('codigo_programa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Campo de número de semestres del programa -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Número de semestres <span
                                            class="text-danger">*</span></label>
                                    <input type="number"
                                        class="form-control @error('numero_semestres_programa') is-invalid @enderror"
                                        name="numero_semestres_programa" id="numero_semestres_programa"
                                        value="{{ old('numero_semestres_programa') }}" maxlength="100"
                                        placeholder="Ingrese el número de semestres" required>
                                    @error('numero_semestres_programa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Campo de número de créditos del programa -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Número de créditos <span
                                            class="text-danger">*</span></label>
                                    <input type="number"
                                        class="form-control @error('numero_creditos_programa') is-invalid @enderror"
                                        name="numero_creditos_programa" id="numero_creditos_programa"
                                        value="{{ old('numero_creditos_programa') }}" maxlength="100"
                                        placeholder="Ingrese el número de créditos" required>
                                    @error('numero_creditos_programa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Elección de facultad del programa -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Facultades <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control @error('facultad_id') is-invalid @enderror"
                                        name="facultad_id" id="facultad_id" value="{{ old('facultad_id') }}"
                                        maxlength="100" required>
                                        @foreach ($facultades as $facultad)
                                            <option value="{{ $facultad->id_facultad}}">{{ $facultad->nombre_facultad }}</option>
                                        @endforeach
                                    </select>
                                    @error('facultad_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Botones -->
                                <div class="form-group text-center">
                                    <!-- Boton para cargar un formulario manualmente -->
                                    <button type="submit" class="btn btn-primary">Cargar Programa</button>
                                    <!-- Boton de cargar formulario mediante archivo CSV -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#cargaMasivaModal">
                                        Carga masiva
                                    </button>
                                </div>
                                <!-- Modal para cargar un archivo CSV -->
                                <div class="modal fade" id="cargaMasivaModal" tabindex="-1" role="dialog"
                                    aria-labelledby="cargaMasivaModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cargaMasivaModalLabel">Carga masiva de un
                                                    programa</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <h2 class="text-center">Carga Masiva</h2>
                                                <!-- Campo para seleccionar un archivo CSV -->
                                                <div class="form-group">
                                                    <label for="archivo_programa">Selecciona un archivo CSV</label>
                                                    <div class="input-group">
                                                        <input type="file" class="form-control" id="archivo_programa"
                                                            name="archivo_programa" accept=".csv"
                                                            onchange="toggleFields(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Boton cerrar modal -->
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close</button>
                                                <!-- Boton guardar un archivo  CSV -->
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
