@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Gestionar Estudiantes</h4>
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
                <a href="#">Gestionar Estudiantes</a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                       <h1 class="text-center">Lista de estudiantes</h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Porgrama</th>
                                            <th>Código</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>Brayan </td>
                                                <td>Cuellar </td>
                                                <td>brayan.cuellar.a@</td>
                                                <td>3137489814</td>
                                                <td>ingeniera</td>
                                                <td>000017373</td>

                                            </tr>
                                </tbody>
                        </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
