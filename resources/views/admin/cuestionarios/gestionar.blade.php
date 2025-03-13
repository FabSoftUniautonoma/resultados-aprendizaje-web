@extends('admin.layouts.app')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Cuestionarios</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cuestionario.index') }}">Gestionar cuestionarios</a>
                </li>
            </ul>
        </div>
        <h1 class="text-center"><b>Gestionar cuestionarios</b></h1>
        <div class="mt-4">
            @component('components.table')
                @slot('thead')
                    <th>N°</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha apertura</th>
                    <th scope="col">Limite tiempo</th>
                    <th scope="col" class="text-right">Acciones</th>
                @endslot
                @slot('tbody')
                    @foreach ($cuestionarios as $cuestionario)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="text-truncate">{{ $cuestionario->titulo }}</td>
                            <td class="text-truncate">{{ $cuestionario->descripcion}}</td>
                            <td class="text-truncate">{{ $cuestionario->created_at}}</td>
                            <td class="text-truncate">{{ $cuestionario->limite_tiempo}}</td>
                            <td>
                                <div class="row justify-content-center" style="font-size: 20px">
                                    <div class="col-2">
                                        <a href="{{ route('cuestionario.showPreguntasByCuestionarioId', $cuestionario->id_cuestionario) }}" style="color: #fa8c15;">
                                            <i class="la icon-eye" data-toggle="tooltip" title="Ver cuestionario"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('cuestionario.edit', $cuestionario->id_cuestionario) }}" style="color: #5C55BF;">
                                            <i class="la icon-note" data-toggle="tooltip" title="Editar cuestionario"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endslot
                <span> Total registros <b>{{ $cuestionarios->total() }}</b></span>
                <span class="float-right">{{ $cuestionarios->links() }}</span>
            @endcomponent
        </div>
    </div>
@endsection
