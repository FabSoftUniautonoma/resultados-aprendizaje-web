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
                            <form action="{{--{{ route('facultades.store') }}--}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Añadir Facultad</h1>

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control input-solid" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="Ingrese el nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Código</label>
                                    <input type="number" class="form-control input-solid" id="codigo_facultad" name="codigo_facultad"
                                        placeholder="Ingrese el código" required>
                                </div>

                                <h2 class="text-center">Carga Masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV:</label>
                                    <input type="file" class="form-control" id="archivo_facultad" name="archivo_facultad" accept=".csv"
                                        required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar facultades</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
