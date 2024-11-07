@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar facultades</h4>
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
                    <a href="#">facultades</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Registrar facultades</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="{{-- {{ route('facultades.store') }} --}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Añadir Facultad</h1>

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="Ingrese el nombre" required
                                        {{ old('archivo_facultad') ? 'disabled' : '' }}>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control " id="descripcion_facultad" name="descripcion_facultad" rows="3" required
                                        {{ old('archivo_facultad') ? 'disabled' : '' }}></textarea>
                                </div>

                                <h2 class="text-center">Carga Masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="archivo_facultad"
                                            name="archivo_facultad" accept=".csv" onchange="toggleFields(this)">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" id="eliminarArchivoBtn"
                                                onclick="eliminarArchivo()" style="display: none;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar facultades</button>
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
                                    document.getElementById('archivo_facultad').value = '';
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
