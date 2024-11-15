@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Gestionar Personal</h4>
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
                <a href="#">Gestionar Personal</a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('registrarAdministrativos.create') }}" class="btn btn-primary">Agregar Personal</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Identificación</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($administrativos as $administrativo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $administrativo->nombre_personal }}</td>
                                    <td>{{ $administrativo->apellido_personal }}</td>
                                    <td>{{ $administrativo->identificacion_personal }}</td>
                                    <td>{{ $administrativo->personal_rol }}</td>
                                    <td>
                                        <a href="{{ route('administrativos.edit', $administrativo->id_administrativos) }}">Editar</a>


                                        <form action="{{ route('administrativos.destroy', $administrativo->id_administrativos) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
