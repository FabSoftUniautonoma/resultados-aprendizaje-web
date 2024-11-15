@extends('admin.layouts.app')

@section('content')
    <!-- Page Header -->
    <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Editar Facultades</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href={{route('dashboard')}}>
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Facultades</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('registrarfacultad.create') }}>Editar facultades</a>
                    </li>
                </ul>
            </div>



            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">

                            <form action="{{ route('facultades.update', $facultad->id_facultad) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <h1 class="text-center">Editar Facultad</h1>

                                <div class="form-group">
                                    <label for="nombre_facultad">Nombre de la Facultad:</label>
                                    <input type="text" id="nombre_facultad" name="nombre_facultad" value="{{ $facultad->nombre_facultad }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="descripcion_facultad">Descripción de la Facultad:</label>
                                    <textarea id="descripcion_facultad" name="descripcion_facultad" class="form-control" rows="4" required>{{ $facultad->descripcion_facultad }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Guardar cambios</button>
                                </div>
                            </form>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    
@endsection







