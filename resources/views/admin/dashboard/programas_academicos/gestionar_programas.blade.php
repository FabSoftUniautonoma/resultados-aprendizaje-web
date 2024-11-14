@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Gestionar Programas</h4>
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
                <a href="#">Programas Académicos</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Gestionar Programas</a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('registrarProgramas.create') }}" class="btn btn-primary">Agregar Programa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Facultad</th>
                                    <th scope="col">Semestres</th>
                                    <th scope="col">Créditos</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($programas as $programa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $programa->nombre_programa }}</td>
                                    <td>{{ $programa->codigo_programa }}</td>
                                    <td>{{ $programa->facultad->nombre_facultad }}</td>
                                    <td>{{ $programa->numero_semestres_programa }}</td>
                                    <td>{{ $programa->numero_creditos_programa }}</td>
                                    <td>
                                        <a href="{{ route('programas.edit', $programa->id_programa) }}" class="btn btn-warning btn-sm">Editar</a>
                                        
                                        <form action="{{ route('programas.destroy', $programa->id_programa) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este programa?')">Eliminar</button>
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
