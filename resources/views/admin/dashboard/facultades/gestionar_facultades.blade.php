@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Gestionar facultades</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="dashboard-uno">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="gestionarfacultad.index">Facultades</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="gestionar-facultad">Gestionar facultades</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <h1 class="text-center">Facultades</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre facultad</th>
                                            <th scope="col">Descripción facultad</th>
                                            <th scope="col" class="text-center">Acción</th> <!-- Centrado del encabezado -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($facultades as $facultad)
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;">{{ $facultad->id_facultad }}</td>
                                            <td style="vertical-align: middle;">{{ $facultad->nombre_facultad }}</td>
                                            <td style="vertical-align: middle;">{{ $facultad->descripcion_facultad }}</td>
                                            <td class="text-center" style="vertical-align: middle;">

                                                <div style="display: flex; justify-content: center; align-items: center;">
                                                    <!-- Botón de Editar -->
                                                    <a href="{{ route('facultades.edit', $facultad->id_facultad) }}" class="text-primary" style="margin-right: 10px;">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    
                                                    <!-- Botón de Eliminar -->
                                                    <form action="{{ route('facultades.destroy', ['id' => $facultad->id_facultad]) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link text-danger" onclick="return confirm('¿Estás seguro de eliminar esta facultad?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
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



    </div>
    </div>
@endsection
