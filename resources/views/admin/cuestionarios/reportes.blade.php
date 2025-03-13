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
                    <a href="{{ route('cuestionario.index') }}">Reportes cuestionarios</a>
                </li>
            </ul>
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Generar reporte de cuestionarios</h4>
                </div>
                <div class="card-body">
                    <p>Descarga un reporte en formato Excel con los cuestionarios realizados</p>
                    <a href="{{ route('reportes.cuestionarios.exportar') }}" class="btn btn-success">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
