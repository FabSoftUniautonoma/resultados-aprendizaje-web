@extends('admin.layouts.app')
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
@endsection

