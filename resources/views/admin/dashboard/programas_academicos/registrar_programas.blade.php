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
                            <form action="{{-- {{ route('facultades.store') }} --}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Añadir Programa Académico</h1>

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control input-solid" id="nombre_programa"
                                        name="nombre_programa" placeholder="Ingrese el nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Código</label>
                                    <input type="number" class="form-control input-solid" id="codigo_programas" name="codigo_programas"
                                        placeholder="Ingrese el código" required>
                                </div>

                                <div class="form-group">
                                    <label for="codigo">Numero de semestres</label>
                                    <input type="number" class="form-control input-solid" id="numero_semestres_programas" name="numero_semestres_programas"
                                        placeholder="Ingrese el número de semestres" required>
                                </div>

                                <div class="form-group">
                                    <label for="facultades">Facultades</label>
                                    <select class="form-control input-solid" id="programa_facultad">
                                        <option>Facultad de Ingenieria</option>
                                        <option>Facultad de Ciencias</option>
                                        <option>Fcaultad de Administración</option>
                                    </select>
                                </div>

                                <h2 class="text-center">Carga Masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV:</label>
                                    <input type="file" class="form-control" id="archivo_programa" name="archivo_programa"
                                        accept=".csv" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar Programas</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
