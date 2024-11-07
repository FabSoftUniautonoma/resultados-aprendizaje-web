@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Personal</h4>
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
                    <a href="#">Personal Administrativo</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Registrar Personal</a>
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

                                <h1 class="text-center">Añadir Personal Administrativo</h1>

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control " id="nombre_personal"
                                        name="nombre_personal" placeholder="Ingrese el nombre" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" class="form-control " id="apellido_personal"
                                        name="apellido_personal" placeholder="Ingrese el apellido" required>
                                </div>
                                <div class="form-group">
                                    <label for="facultades">Seleccionar Rol</label>
                                    <select class="form-control " id="personal_rol">
                                        <option>Docente</option>
                                        <option>Coordinador</option>
                                        <option>Vicerrector</option>
                                    </select>
                                </div>
                                <h2 class="text-center">Carga Masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV:</label>
                                    <input type="file" class="form-control" id="archivo_personal" name="archivo_personal"
                                        accept=".csv" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar Personal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
