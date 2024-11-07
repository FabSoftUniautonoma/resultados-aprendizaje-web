@extends('vicerrrector.layouts.base_vicerrector')


@section('content')
<div class="container-fluid">
    <div class="page-header">
        <h4 class="page-title">Gestionar Vicerrector</h4>
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
                <a href="#">Vicerrector</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Gestionar Vicerrector</a>
            </li>
        </ul>
    </div>

    <style>

        /* Espacio entre desplegables */
        .dropdown {
            margin-bottom: 20px;
        }

        /* Ajuste para alinear los desplegables a la derecha */
        .row.justify-content-center {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Espacio entre los desplegables */
            margin-left: -60px; /* Ajusta este valor para mover el contenido hacia la derecha */
        }

        /* Ajustar tamaño del gráfico */
        #chart-container {
            width: 70%;
            height: 300px;
            margin: 5px auto; /* Centrar el gráfico y dar espacio */
        }
    </style>


        <div class="col-15 col-lg-25">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">


                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selecciona Facultad
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Facultad de Ingeniería</a>
                                <a class="dropdown-item" href="#">Faculatd de derecho</a>
                                <a class="dropdown-item" href="#">Facultad de ciencias Ambientales</a>
                                <a class="dropdown-item" href="#">Facultad de ciencias Administrativas</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selecciona Carrera
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Ingeniería de Software y Computacion</a>
                                <a class="dropdown-item" href="#">Ingeniería Civil</a>
                                <a class="dropdown-item" href="#">Ingeniería Electrónica</a>
                                <a class="dropdown-item" href="#">Derecho</a>
                                <a class="dropdown-item" href="#">Entrenamiento Deportivo</a>
                                <a class="dropdown-item" href="#">contaduria Pública</a>
                                <a class="dropdown-item" href="#">Ingeniería Energérgetica</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selecciona Prueba
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Prueba 1</a>
                                <a class="dropdown-item" href="#">Prueba 2</a>
                            </div>
                        </div>

                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selecciona Tiempo
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">2024</a>
                                <a class="dropdown-item" href="#">2025</a>
                                <a class="dropdown-item" href="#">2026</a>
                                <a class="dropdown-item" href="#">2027</a>
                                <a class="dropdown-item" href="#">2028</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="chart-container" style="width: 30%; height: 250px; float: left;">
            <canvas id="barChart"></canvas>
        </div>


                 <!-- Código JavaScript para inicializar el gráfico -->
            <script>
                var barChart = document.getElementById('barChart').getContext('2d');

            var myBarChart = new Chart(barChart, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets : [{
                        label: "Sales",
                        backgroundColor: 'rgb(23, 125, 255)',
                        borderColor: 'rgb(23, 125, 255)',
                        data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                }
            });
            </script>

            <!-- Código JavaScript para inicializar el gráfico -->
            <script>
                var barChart = document.getElementById('barChart').getContext('2d');

            var myBarChart = new Chart(barChart, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets : [{
                        label: "Sales",
                        backgroundColor: 'rgb(23, 125, 255)',
                        borderColor: 'rgb(23, 125, 255)',
                        data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                }
            });
            </script>

            <div id="chart-container" style="width: 30%; height: 250px; float: left;">
                <canvas id="pieChart"></canvas>
            </div>

            <!-- Código JavaScript para inicializar el gráfico circular -->
            <script>
            var pieChart = document.getElementById('pieChart').getContext('2d');

                var myPieChart = new Chart(pieChart, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [50, 35, 15],
                            backgroundColor :["#1d7af3","#f3545d","#fdaf4b"],
                            borderWidth: 0
                        }],
                        labels: ['Administración', 'Matemáticas', 'Contaduría']
                    },
                    options : {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position : 'bottom',
                            labels : {
                                fontColor: 'rgb(154, 154, 154)',
                                fontSize: 11,
                                usePointStyle : true,
                                padding: 20
                            }
                        },
                        pieceLabel: {
                            render: 'percentage',
                            fontColor: 'white',
                            fontSize: 14,
                        },
                        tooltips: false,
                        layout: {
                            padding: {
                                left: 20,
                                right: 20,
                                top: 20,
                                bottom: 20
                            }
                        }
                    }
                })
            </script>

            <div id="chart-container" style="width: 30%; height: 250px; float: left;">
                <canvas id="multipleLineChart"></canvas>
            </div>

            <!-- Código JavaScript para inicializar el gráfico linea -->
            <script>
                var multipleLineChart = document.getElementById('multipleLineChart').getContext('2d');

                    var myMultipleLineChart = new Chart(multipleLineChart, {
                        type: 'line',
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                label: "Administración",
                                borderColor: "#1d7af3",
                                pointBorderColor: "#FFF",
                                pointBackgroundColor: "#1d7af3",
                                pointBorderWidth: 2,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 1,
                                pointRadius: 4,
                                backgroundColor: 'transparent',
                                fill: true,
                                borderWidth: 2,
                                data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256]
                            },{
                                label: "Sftware",
                                borderColor: "#59d05d",
                                pointBorderColor: "#FFF",
                                pointBackgroundColor: "#59d05d",
                                pointBorderWidth: 2,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 1,
                                pointRadius: 4,
                                backgroundColor: 'transparent',
                                fill: true,
                                borderWidth: 2,
                                data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87]
                            }, {
                                label: "Matemáticas",
                                borderColor: "#f3545d",
                                pointBorderColor: "#FFF",
                                pointBackgroundColor: "#f3545d",
                                pointBorderWidth: 2,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 1,
                                pointRadius: 4,
                                backgroundColor: 'transparent',
                                fill: true,
                                borderWidth: 2,
                                data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194]
                            }]
                        },
                        options : {
                            responsive: true,
                            maintainAspectRatio: false,
                            legend: {
                                position: 'top',
                            },
                            tooltips: {
                                bodySpacing: 4,
                                mode:"nearest",
                                intersect: 0,
                                position:"nearest",
                                xPadding:10,
                                yPadding:10,
                                caretPadding:10
                            },
                            layout:{
                                padding:{left:15,right:15,top:15,bottom:15}
                            }
                        }
                    });
                </script>



                <table class="table table-bordered" style="width: 40%; height: auto;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Teórico</th>
                            <th scope="col">Práctico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Brayan Alexis Cuellar</td>
                            <td>4.5</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dniel Stevan Ortiz</td>
                            <td>4.5</td>
                            <td>3.0</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered" style="width: 40%; height: auto;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Teórico</th>
                            <th scope="col">Práctico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Brayan Alexis Cuellar</td>
                            <td>4.5</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dniel Stevan Ortiz</td>
                            <td>4.5</td>
                            <td>3.0</td>
                        </tr>
                    </tbody>
                </table>


                <button class="btn btn-primary btn-round">Descargar PDF</button>
                <button class="btn btn-primary btn-round">Descaragar Exel</button>

</div>

@endsection
