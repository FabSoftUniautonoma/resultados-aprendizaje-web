@extends('admin.layouts.app', ['attributes' => 'sidebar_minimize'])
@section('content')
    <div class="page-inner">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Pregunta {{ $preguntaActual }} de {{ $totalPreguntas }}</h5>
            </div>
            <div class="card-body">
                @foreach ($preguntaCuestionario as $pregunta)
                    <div class="card">
                        <p class="fs-5">{{ $pregunta->preguntas->titulo }}</p>
                        <p class="fs-5">{{ $pregunta->preguntas->pregunta }}</p>
                        <form action="{{-- {{ route('cuestionario.responder', $pregunta->id) }} --}}" method="POST">
                            @csrf
                            @foreach ($pregunta->preguntas->respuestas as $respuesta)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="respuesta" id="respuesta{{ $respuesta->id }}" value="{{ $respuesta->id }}">
                                    <label class="form-check-label" for="respuesta{{ $respuesta->id }}">
                                        {{ $respuesta->respuesta }}
                                    </label>
                                </div>
                            @endforeach
                        </form>
                    </div>
                    @endforeach
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Siguiente</button>
                    </div>
            </div>
        </div>
    </div>

<div class="container">
    <h2 class="mb-4">DESARROLLO APLICACIONES WEB</h2>

    <div class="row">
        <!-- Panel de navegación -->
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header">Navegación por el cuestionario</div>
                <div class="card-body text-center">
                    @for ($i = 1; $i <= 20; $i++)
                        <button class="btn btn-sm btn-outline-primary mb-1">{{ $i }}</button>
                    @endfor
                    <div class="mt-2">
                        <button class="btn btn-secondary btn-sm">Terminar intento...</button>
                        <button class="btn btn-primary btn-sm">Comenzar nueva previsualización</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panel de preguntas -->
        <div class="col-md-9">
            <button class="btn btn-secondary mb-3">Atrás</button>
            <div class="alert alert-warning">
                Puede previsualizar este cuestionario, pero si este fuera un intento real, podría ser bloqueado debido a:
                <br>Este cuestionario no está disponible en este momento.
            </div>

            <div class="row">
                <!-- Tarjeta de Información de Pregunta -->
                <div class="col-md-3">
                    <div class="card text-center mb-3">
                        <div class="card-body p-2">
                            <p class="mb-1"><strong>Pregunta 1</strong></p>
                            <p class="text-muted small">Sin responder aún</p>
                            <p class="text-muted small">Se puntúa como <br> <strong>0 sobre 1,00</strong></p>
                            <a href="#" class="d-block text-muted small">
                                <i class="fas fa-flag"></i> Marcar pregunta
                            </a>
                            <a href="#" class="d-block text-primary small">
                                <i class="fas fa-cog"></i> Editar pregunta
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contenedor de Pregunta -->
                <div class="col-md-9">
                    <div class="card mb-3">
                        <div class="card-header">Pregunta 1</div>
                        <div class="card-body">
                            <p><strong>¿Cuál de los siguientes NO es considerado un componente fundamental para construir una aplicación web moderna, escalable y segura?</strong></p>
                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" id="p1a">
                                    <label class="form-check-label" for="p1a">Frameworks de desarrollo web</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" id="p1b">
                                    <label class="form-check-label" for="p1b">Lenguajes de programación del lado del servidor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" id="p1c">
                                    <label class="form-check-label" for="p1c">Editores de texto avanzados</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" id="p1d">
                                    <label class="form-check-label" for="p1d">Sistemas de gestión de bases de datos</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- Cierre de fila de la pregunta -->

        </div>
    </div>
</div>

@endsection

