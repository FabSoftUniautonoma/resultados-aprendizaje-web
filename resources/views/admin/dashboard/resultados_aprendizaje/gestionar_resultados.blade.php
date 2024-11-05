@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Gestionar Resultados de Aprendizaje</h4>
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
                    <a href="#">Resultados de Aprendizaje</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Gestionar Resultados de Aprendizaje</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form action="{{--{{ route('facultades.store') }}--}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Gesionar Resultados de Aprendizaje</h1>


                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                        Facultad Academica
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="#">Facultad de Ciencias Administrativas, Contables y Económicas</a>
                                        <a class="dropdown-item" href="#">Facultad de Ciencias Ambientales y Desarrollo Sostenible</a>
                                        <a class="dropdown-item" href="#">Facultad de Derecho, Ciencias Sociales y Políticas</a>
                                        <a class="dropdown-item" href="#">Facultad de Educación</a>
                                        <a class="dropdown-item" href="#">Facultad de Ingeniería</a>
                                    </ul>
                                </div>

                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                        Programa Academico
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="#">Ingeniería de Software y computación</a>
                                        <a class="dropdown-item" href="#">Ingeniería Civil</a>
                                        <a class="dropdown-item" href="#">Ingeniería Electrónica</a>
                                    </ul>
                                </div>

                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                        Realizar Carga
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="#">Masiva</a>
                                        <a class="dropdown-item" href="#">Manual</a>
                                    </ul>
                                </div>

                               









                                <div class="form-group">
                                    <label for="nombre">Perfil de Egreso</label>
                                    <input type="text" class="form-control input-solid" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="El profesional" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-solid" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="Competencia 1" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-solid" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="Competencia 2" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-solid" id="nombre_facultad" name="nombre_facultad"
                                        placeholder="Competencia 3" required>
                                </div>

                               

                                

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
