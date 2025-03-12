@extends('admin.layouts.app')
@section('content')

    <div class="page-inner">
        <h1 class="text-center"><b>Cuestionarios</b></h1>
        <div class="mt-4">
            @component('components.table')
                @slot('thead')
                    <th>N°</th>
                    <th scope="col">Cuestionario</th>
                    <th scope="col">Estado</th>
                    <th scope="col" class="text-right">Acciones</th>
                @endslot
                @slot('tbody')
                    @foreach ($cuestionarios as $cuestionario)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="text-truncate">{{ $cuestionario->titulo }}</td>
                            <td class="text-truncate">Por presentar</td>
                            <td>
                                <div class="row justify-content-center" style="font-size: 20px">
                                    <div class="col-4">
                                        <a href="{{ route('cuestionario.showPreguntasByCuestionarioId', $cuestionario->id_cuestionario) }}" style="color: #fa8c15;">
                                            <i class="fas fa-pencil-alt" data-toggle="tooltip" title="Realizar cuestionario"></i>
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
