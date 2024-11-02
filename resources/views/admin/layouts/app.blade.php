<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ env('APP_NAME') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="{{ asset('img/mascota_icono.png') }}" />

    <!-- Core JS Files -->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('atlantis/assets/js/atlantis.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('atlantis/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Chart JS-->
    <script src="{{ asset('atlantis/assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <!--JS personalizado-->
    <script src="{{ asset('js/admin.js') }}"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('atlantis/assets/css/fonts.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--Select 2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- CSS Files -->
    <link href="{{ asset('atlantis/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('atlantis/assets/css/atlantis.css') }}" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        .form-group label,
        .form-check label {
            white-space: normal;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="" class="logo">
                    <div class="avatar-sm mr-4 ">
                        <img src="{{ asset('img/autonoma_icono.png') }}" class="navbar-brand" height="40">
                    </div>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
                <div class="container-fluid">

                    <div class="collapse" id="search-nav">
                        <div class="user-box">
                            <div class="u-text">
                                <h2 style="color: white">Bienvenid@ {{-- {{ Auth::user()->nombre }} --}}</h2>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <a class="dropdown-item" href="{{-- {{ route('logout') }} --}}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>
                                        <form id="logout-form" action="{{-- {{ route('logout') }} --}}" method="POST"
                                            style="display: none;">@csrf</form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="bg2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-primary">
                        <!-- Inicio -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Inicio</h4>
                        </li>
                        <li class="nav-item {{ request()->is(['dashboard', '/']) ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <i class="fas fa-home"></i>
                                <p>Historial</p>
                            </a>
                        </li>
                        <!-- Facultades -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Facultades</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#facultades">
                                <i class="fas fa-university"></i>
                                <p>Facultades</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="facultades">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href=" {{ route('gestionarfacultad.index') }}">
                                            <span class="sub-item">Gestionar facultades</span>
                                        </a>
                                    </li>
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href=" {{ route('registrarfacultad.create') }}">
                                            <span class="sub-item">Registrar facultades</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Programas académicos -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Programas académicos</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#programas_academicos">
                                <i class="fas fa-atlas"></i>
                                <p>Programas académicos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="programas_academicos">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href=" {{ route('gestionarProgramas.index') }}">
                                            <span class="sub-item">Gestionar programas</span>
                                        </a>
                                    </li>
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('registrarProgramas.create') }}">
                                            <span class="sub-item">Registrar programas</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Personal Administrativo -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Personal administrativo</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#personal_administrativo">
                                <i class="fas fa-id-card"></i>
                                <p>Personal administrativo</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="personal_administrativo">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href=" {{ route('gestionarAdministrativos.index') }}">
                                            <span class="sub-item">Gestionar personal</span>
                                        </a>
                                    </li>
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('registrarAdministrativos.create') }} ">
                                            <span class="sub-item">Registrar personal</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Estudiantes -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Estudiantes</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#estudiantes">
                                <i class="fas fa-user-graduate"></i>
                                <p>Estudiantes</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="estudiantes">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('gestionarEstudiantes.index') }}">
                                            <span class="sub-item">Gestionar estudiantes</span>
                                        </a>
                                    </li>
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('registrarEstudiantes.create') }}">
                                            <span class="sub-item">Registrar estudiantes</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Resultados de aprendizaje -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Resultados de aprendizaje</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#resultados_de_aprendizaje">
                                <i class="fas fa-list-ol"></i>
                                <p>Resultados de aprendizaje</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="resultados_de_aprendizaje">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('gestionarAprendizaje.index') }}">
                                            <span class="sub-item">Gestionar resultados</span>
                                        </a>
                                    </li>
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('registrarAprendizaje.create') }}">
                                            <span class="sub-item">Registrar resultados</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Roles -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Roles</h4>
                        </li>
                        <li class="nav-item {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'active' : '' }} --}}">
                            <a data-toggle="collapse" href="#roles">
                                <i class="fas fa-users-cog"></i>
                                <p>Roles</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{-- {{ request()->routeIs(['mantenimientos.create', 'mantenimientos.store']) ? 'show' : '' }} --}}" id="roles">
                                <ul class="nav nav-collapse">
                                    <li class="{{-- {{ request()->routeIs(['equipos.index','equipos.show','equipos.edit','equipos.update','equipos.destroy',]) ? 'active': '' }} --}}">
                                        <a href="{{ route('gestionarRoles.index') }} ">
                                            <span class="sub-item">Gestionar roles</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                {{-- @include('sweetalert::alert') --}}
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                    </nav>
                    <div class="copyright ml-auto">
                        {{ now()->year }} © con❤️<a href="https://www.uniautonoma.edu.co" target="_blank"
                            style="text-decoration: none">Uniautónoma</a> v{{ ENV('APP_VERSION') }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
