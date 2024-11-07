@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Registrar Estudiantes</h4>
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
                <a href="#">Estudiantes</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Registrar Estudiantes</a>
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

                            <h1 class="text-center">Añadir EStudiante</h1>

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control input-solid" id="nombre_estudiante"
                                    name="nombre_estudiante" placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control input-solid" id="apellido_estudiante"
                                    name="apellido_estudiante" placeholder="Ingrese el apellido" required>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Código estudiantil</label>
                                <input type="number" class="form-control input-solid" id="codigo_estudiante" name="codigo_estudainte"
                                    placeholder="Ingrese el código" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo institucional</label>
                                <input type="email" class="form-control input-solid" id="correo_estudiante"
                                    aria-describedby="emailHelp" placeholder="Ingrese el correo" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1"></label>
                                <input type="password" class="form-control input-solid" id="contraseña_estudiante"
                                    placeholder="Ingrese la contraseña" required>
                            </div>
                            
                            <h2 class="text-center">Carga Masiva</h2>

                            <div class="form-group">
                                <label for="archivo">Selecciona un archivo CSV:</label>
                                <input type="file" class="form-control" id="archivo_personal" name="archivo_estudiante"
                                    accept=".csv" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Cargar estudiante</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
