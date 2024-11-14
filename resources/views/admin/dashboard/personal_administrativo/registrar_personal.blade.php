@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Registrar Personal</h4>
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
                    <a href="#">Registrar Personal</a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <!--Formulario de registro de personal administrativo por medio de campos-->
                            <form action="{{-- {{ route('facultades.store') }} --}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Protección CSRF de Laravel -->

                                <h1 class="text-center">Añadir Personal Administrativo</h1>
                                <!-- Campo del nombre para personal administrativo -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Nombre <span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('nombre_personal') is-invalid @enderror"
                                        name="nombre_personal" id="nombre_personal" value="{{ old('nombre_personal') }}"
                                        maxlength="100" placeholder="Ingrese el nombre" required>
                                    @error('nombre_personal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Campo del apellido para personal administrativo -->
                                <div class="form-group">
                                    <label class="form-label" for="text">Apellido <span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('apellido_personal') is-invalid @enderror"
                                        name="apellido_personal" id="nombre_personal" value="{{ old('apellido_personal') }}"
                                        maxlength="100" placeholder="Ingrese el apellido " required>
                                    @error('apellido_personal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                 <!-- Campo del código para personal administrativo -->
                                 <div class="form-group">
                                    <label class="form-label" for="text">Identificación Administrativa <span
                                            class="text-danger">*</span></label>
                                    <input type="number"
                                        class="form-control @error('identificacion_personal') is-invalid @enderror"
                                        name="identificacion_personal" id="identificacion_personal"
                                        value="{{ old('identificacion_personal') }}" maxlength="100"
                                        placeholder="Ingrese la identificación" required>
                                    @error('identificacion_personal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="facultades">Seleccionar Rol</label>
                                    <select class="form-control " id="personal_rol">
                                        <option>Docente</option>
                                        <option>Coordinador</option>
                                        <option>Vicerrector</option>
                                    </select>
                                </div>

                                <h2 class="text-center">Carga Masiva</h2>

                                <div class="form-group">
                                    <label for="archivo">Selecciona un archivo CSV:</label>
                                    <input type="file" class="form-control" id="archivo_personal" name="archivo_personal"
                                        accept=".csv" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Cargar Personal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
