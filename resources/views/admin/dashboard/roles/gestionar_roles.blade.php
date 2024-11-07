@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Gestionar Roles</h4>
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
                <a href="#">Roles</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Gestionar Roles</a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form action="{{--{{ route('rol.store') }}--}}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Protección CSRF de Laravel -->

                            <h1 class="text-center">Gestionar Roles</h1>


                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Código">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                        </form>
                                    </div>
                                </nav>

                            <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Daniel Ortiz</td>
                                        <td>000017263</td>
                                        <td>daniel.ortiz.@uniautonoma.edu.co</td>
                                    </tr>


                                </tbody>
                            </table>


                            <div class="form-group">
                                <div class="input-group">

                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-border dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualizar Rol</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Administrador</a>
                                            <a class="dropdown-item" href="#">Cordinador</a>
                                            <a class="dropdown-item" href="#">docente</a>
                                            <a class="dropdown-item" href="#">Vicerrector</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
