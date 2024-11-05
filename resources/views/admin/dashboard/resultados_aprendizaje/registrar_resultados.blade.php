@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Registrar Resultados</h4>
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
                <a href="#">Resultados De Aprendizaje </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Registrar Resultados</a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <h1>Resultados de Aprendizaje</h1>
                    </div>
                    <div class="form-group">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <span class="input-icon-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                    </div>
                    <div class="col-12 col-lg-8 bt-5">

                    </div>
                    <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Programa Academico</th>
                                <th scope="col">Perfil de Egreso</th>
                                <th scope="col">Competencias</th>
                                <th scope="col">Accion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ingeniería Software</td>
                                <td>Desarrollar soluciones multiplataforma e interactivas basadas en buenas prácticas.</td>
                                <td>3</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Derecho</td>
                                <td>Abogados integrales, interdisciplinarios y éticos con altas capacidades.</td>
                                <td>2</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Finanzas</td>
                                <td>Formación de personas con capacidad de reconocer oportunidades y desafíos externos.</td>
                                <td>4</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ingeniería Ambiental</td>
                                <td>Alta calidad de sus procesos académicos y formación de profesionales con compromiso.</td>
                                <td>3</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ingeniería Electrónica</td>
                                <td>Profesionales calificados que contribuyan al desarrollo socio-tecnológico.</td>
                                <td>2</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ingeniería Civil</td>
                                <td>Profesional integral e innovador para planificar y gestionar proyectos de ingeniería civil.</td>
                                <td>3</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
