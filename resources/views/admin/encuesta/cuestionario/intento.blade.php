@extends('admin.layouts.app', ['attributes' => 'sidebar_minimize'])
@section('content')
    <div class="container-fluid">
        <h2 class="mb-4 m-4">{{ $preguntaCuestionario->first()->cuestionarios->titulo }}</h2>
        <form
            action="{{ route('cuestionario.storeIntentoUser', [
                'cuestionarioId' => $preguntaCuestionario->first()->cuestionarios->id_cuestionario,
                'userId' => auth()->user()->id,
            ]) }}"
            method="POST" class="needs-validation" id="quizForm" novalidate>
            @csrf
            @method('POST')
            <div class="row m-4">
                <!-- Panel de navegación -->
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4>Navegación por el cuestionario</h4>
                        </div>
                        <div class="card-body text-center">
                            {{-- @for ($i = 1; $i <= $preguntaCuestionario->count(); $i++)
                            <button class="btn btn-sm btn-outline-primary mb-1">{{ $i }}</button>
                        @endfor --}}
                            @for ($i = 1; $i <= 20; $i++)
                                <button class="btn btn-sm btn-outline-primary mb-1">{{ $i }}</button>
                            @endfor
                            <div class="row">

                                <div class="col">
                                    <div class="mt-2">
                                        <button class="btn btn-secondary btn-sm"><span class="font-34">Terminar
                                                intento...</span></button>
                                        {{-- Es para el creador del cuestionario --}}
                                        {{-- <button class="btn btn-primary btn-sm mt-2">Comenzar nueva previsualización</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel de preguntas -->
                <div class="col-md-9">
                    @foreach ($preguntaCuestionario as $pregunta)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><strong>Pregunta {{ $loop->iteration }}</strong></h3>
                            </div>
                            <div class="card-body">
                                <p class="font-34">{{ $pregunta->preguntas->pregunta }}</p>
                                <div class="col m-2">
                                    <div class="form-group">
                                        @foreach ($pregunta->preguntas->respuestas as $respuesta)
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="pregunta{{ $pregunta->preguntas->id_pregunta }}"
                                                    id="respuesta{{ $respuesta->id_respuesta }}"
                                                    value="{{ $respuesta->id_respuesta }}" required>
                                                <label class="form-check-label"
                                                    for="respuesta{{ $respuesta->id_respuesta }}">
                                                    {{ $opciones[$loop->iteration - 1] }}
                                                    {{ $respuesta->respuesta }}</label>
                                            </div>
                                        @endforeach
                                        <div class="invalid-feedback">
                                            Es necesario que seleccione una opción
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row mr-4 mb-4">
                <div class="col d-flex justify-content-end ">
                    <button class="btn btn-secondary mb-3 mr-2"><i class="fas fa-arrow-left"></i> Atrás</button>
                    {{-- <button class="btn btn-primary mb-3">Siguiente <i class="fas fa-arrow-right"></i></button> --}}
                    <button class="btn btn-primary mb-3" type="submit">Enviar <i class="fas fa-check"></i></button>
                </div>
            </div>
        </form>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var form = document.getElementById('quizForm');
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            }, false);
        })();
    </script>
    <script>
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                var form = document.getElementById('quizForm');

                form.addEventListener('submit', function(event) {
                    var isValid = true;

                    // Validar radio buttons manualmente
                    var gruposRadios = {};
                    var radioInputs = form.querySelectorAll('input[type="radio"]');

                    radioInputs.forEach(function(radio) {
                        if (!gruposRadios[radio.name]) {
                            gruposRadios[radio.name] = false;
                        }
                        if (radio.checked) {
                            gruposRadios[radio.name] = true;
                        }
                    });

                    // Mostrar error si no hay selección en cada grupo
                    for (var grupo in gruposRadios) {
                        var radiosGrupo = document.getElementsByName(grupo);
                        var feedback = radiosGrupo[0].closest('.form-group').querySelector(
                            '.invalid-feedback');
                        if (!gruposRadios[grupo]) {
                            feedback.style.display = 'block';
                            isValid = false;
                        } else {
                            feedback.style.display = 'none';
                        }
                    }

                    if (!form.checkValidity() || !isValid) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                });

                // Ocultar mensaje de error cuando se selecciona un radio button
                var radioButtons = form.querySelectorAll('input[type="radio"]');
                radioButtons.forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        var feedback = this.closest('.form-group').querySelector(
                            '.invalid-feedback');
                        feedback.style.display = 'none';
                    });
                });

            }, false);
        })();
    </script>
@endsection
