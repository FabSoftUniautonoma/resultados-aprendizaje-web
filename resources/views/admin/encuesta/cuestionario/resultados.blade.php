@extends('admin.layouts.app', ['attributes' => 'sidebar_minimize'])
@section('content')
    <style>
        .result-card {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f8f9fa;
            padding: 15px;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ccc;
            margin-right: 10px;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .user-avatar > i{
            font-size: 1.8rem;
        }

        .user-name {
            font-weight: bold;
            font-size: 18px;
        }

        .result-table {
            width: 100%;
        }

        .result-table td {
            padding: 5px 10px;
            border-bottom: 1px solid #ddd;
        }

        .result-table tr:last-child td {
            border-bottom: none;
        }

        .score {
            font-weight: bold;
            color: #007bff;
        }

        .score-success {
            color: #28a745;
        }
    </style>
    <div class="container-fluid">
        <h2 class="mb-4 m-4 text-center">Resultados obtenidos</h2>
        <div class="result-card shadow-sm">
            <div class="user-info">
                <div class="user-avatar"><i class="fa fa-user"></i></div>
                <div class="user-name text-uppercase">{{ $user->name }}</div>
            </div>

            <table class="result-table">
                <tr>
                    <td><strong>Comenzado el</strong></td>
                    <td>{{$fechaComienzo}} </td>
                </tr>
                <tr>
                    <td><strong>Estado</strong></td>
                    <td class="text-success">Finalizado</td>
                </tr>
                <tr>
                    <td><strong>Finalizado en</strong></td>
                    <td>{{$fechaComienzo}} </td>
                </tr>
                <tr>
                    <td><strong>Tiempo empleado</strong></td>
                    <td>43 minutos 52 segundos{{-- Pendiente construir --}}</td>
                </tr>
                <tr>
                    <td><strong>Puntos</strong></td>
                    <td class="score">{{ $puntaje }}/{{ $cantidadRespuestas }}</td>
                </tr>
                <tr>
                    <td><strong>Calificación</strong></td>
                    <td class="score-success">{{ number_format($calificacion,2) }} de 5,00 ({{number_format(($calificacion*100)/5,2)}}%)</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
