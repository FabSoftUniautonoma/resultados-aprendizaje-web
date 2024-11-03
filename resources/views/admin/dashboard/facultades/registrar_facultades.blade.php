@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar facultades</h4>
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
                    <a href="#">facultades</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Registrar facultades</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <label class="mt-3 mb-3">
                                <h2>Cargar Facultades</h2>
                                <div class="form-group">
                                    <label for="squareInput">Nombre</label>
                                    <input type="text" class="form-control input-square" id="squareInput" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="squareInput">Código</label>
                                    <input type="text" class="form-control input-square" id="squareInput" placeholder="codigo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Abjuntar Archivo</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="card-action ">
                                    <button class="btn btn-primary">Guardar</button>
                                    <button class="btn btn-danger">Cancelar</button>
                                </div>
                                
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
