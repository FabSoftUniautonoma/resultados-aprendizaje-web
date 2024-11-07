@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Programa </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
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
                    <a href="#">Registrar Programa</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="{{-- {{ route('programas.store') }} --}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Añadir Programa Académico</h1>

                                <div class="form-group">
                                    <label for="nombre">Título</label>
                                    <input type="text" class="form-control" id="nombre_programa" name="nombre_programa"
                                        placeholder="Ingrese el nombre" required
                                        {{ old('archivo_programa') ? 'disabled' : '' }}>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Código de Programa</label>
                                    <input type="number" class="form-control" id="codigo_programa" name="codigo_programa"
                                        placeholder="Ingrese el código" required
                                        {{ old('archivo_programa') ? 'disabled' : '' }}>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Número de semestres</label>
                                    <input type="number" class="form-control" id="numero_semestres_programa"
                                        name="numero_semestres_programa" placeholder="Ingrese el número de semestres"
                                        required {{ old('archivo_programa') ? 'disabled' : '' }}>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Número de créditos</label>
                                    <input type="number" class="form-control" id="numero_creditos_programa"
                                        name="numero_creditos_programa" placeholder="Ingrese el número de créditos"
                                        required {{ old('archivo_programa') ? 'disabled' : '' }}>
                                </div>

                                <div class="form-group">
                                    <label for="facultades">Facultades</label>
                                    <select class="form-control" id="facultad_id" name="facultad_id" required
                                        {{ old('archivo_programa') ? 'disabled' : '' }}>
                                        @foreach ($facultades as $facultad)
                                            <option value="{{ $facultad->id }}">{{ $facultad->nombre_facultad }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <h2 class="text-center">Carga masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="archivo_programa"
                                            name="archivo_programa" accept=".csv" onchange="toggleFields(this)">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" id="eliminarArchivoBtn"
                                                onclick="eliminarArchivo()" style="display: none;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar programas</button>
                                </div>
                            </form>

                            <script>
                                // Función para habilitar o deshabilitar los campos si se sube un archivo CSV
                                function toggleFields(input) {
                                    const fields = document.querySelectorAll('input, select');
                                    const eliminarBtn = document.getElementById('eliminarArchivoBtn');

                                    if (input.files.length > 0) {
                                        // Si se ha seleccionado un archivo CSV, deshabilitar los campos
                                        fields.forEach(field => field.disabled = true);
                                        // Mostrar el botón de eliminar
                                        eliminarBtn.style.display = 'inline-block';
                                    } else {
                                        // Si no hay archivo, habilitar los campos
                                        fields.forEach(field => field.disabled = false);
                                        // Ocultar el botón de eliminar
                                        eliminarBtn.style.display = 'none';
                                    }
                                }

                                // Función para eliminar el archivo seleccionado y habilitar los campos
                                function eliminarArchivo() {
                                    // Limpiar el archivo cargado
                                    document.getElementById('archivo_programa').value = '';
                                    // Habilitar los campos
                                    const fields = document.querySelectorAll('input, select');
                                    fields.forEach(field => field.disabled = false);
                                    // Ocultar el botón de eliminar
                                    document.getElementById('eliminarArchivoBtn').style.display = 'none';
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
