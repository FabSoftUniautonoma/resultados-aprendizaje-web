    @extends('admin.layouts.app')

    @section('content')
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Registrar facultades</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href={{route('dashboard')}}>
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">facultades</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('registrarfacultad.create') }}>Registrar facultades</a>
                    </li>
                </ul>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <!--Formulario de registro de facultades por medio de campos-->
                                <form action="{{ route('guardarfacultad.store') }}" method="POST"
                                    enctype="multipart/form-data" class="needes-validation" novalidate>
                                    @csrf <!-- Protección CSRF de Laravel -->
                                    @method('POST')
                                    <h1 class="text-center">Añadir Facultad</h1>
                                    <!-- Campo de nombre de la facultad -->
                                    <div class="form-group">
                                        <label class="form-label" for="text">Nombre <span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('nombre_facultad') is-invalid @enderror"
                                            name="nombre_facultad" id="nombre_facultad" value="{{ old('nombre_facultad') }}"
                                            maxlength="100" placeholder="Ingrese el nombre" required>
                                        @error('nombre_facultad')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Campo de descripción de la facultad -->
                                    <div class="form-group">
                                        <label class="form-label" for="descripcion_facultad">Descripción <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('descripcion_facultad') is-invalid @enderror" name="descripcion_facultad"
                                            id="descripcion_facultad" maxlength="500" placeholder="Ingrese la descripción" required>{{ old('descripcion_facultad') }}</textarea>
                                        @error('descripcion_facultad')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Botones -->
                                    <div class="form-group text-center">
                                        <!-- Boton para cargar un formulario manualmente -->
                                        <button type="submit" class="btn btn-primary">Cargar facultades</button>
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
                                                    <h5 class="modal-title" id="cargaMasivaModalLabel">Carga masiva de una
                                                        facultad</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2 class="text-center">Carga Masiva</h2>
                                                    <!-- Campo para seleccionar un archivo CSV -->
                                                    <div class="form-group">
                                                        <label for="archivo_facultad">Selecciona un archivo CSV</label>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="archivo_facultad" name="archivo_facultad" accept=".csv"
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
