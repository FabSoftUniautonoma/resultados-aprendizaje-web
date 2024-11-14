@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Graficos</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href={{route('dashboard')}}>
                    <i class="flaticon-home"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <h1>Aquí puede colocar su contenido</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
