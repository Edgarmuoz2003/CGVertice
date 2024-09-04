<head>
    <link rel="stylesheet" href="/css/EstilosNewNavBar.css">
</head>
<body style="width: 100%">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container MainNavbar">
            <!-- Logo -->
            <a id="logoInicio" href="{{ route('inicio') }}">
                <img class="logo-cgv" src="{{ asset('img/logoo.png') }}" alt="Logo de Vértice">
            </a>
            <!-- Botón del menú Offcanvas para pantallas pequeñas -->
            <button class="navbar-toggler custom-toggler bg-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de Navegación -->
            <div class="collapse navbar-collapse navbar">
                <ul class="navbar-nav ms-auto">
                    @can('Admin Configuracion')
                        <li class="nav-item dropdown">
                            <a id="adminDropdown" class="nav-link dropdown-toggle" style="color: #bf943a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Configuración
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                                <li><a class="dropdown-item" href="{{ route('ruta_Users') }}"><i class="fas fa-users ml-2"></i> Usuarios</a></li>
                                <li><a class="dropdown-item" href="{{ route('ruta_Roles') }}"><i class="fas fa-user-tag"></i> Roles</a></li>
                                <li><a class="dropdown-item" href="{{ route('ruta_Perm') }}"><i class="fas fa-key"></i> Permisos</a></li>
                            </ul>
                        </li>
                    @endcan
                    
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li><a href="{{ route('ruta_blog') }}">Converge</a></li>
                    <li><a href="{{ route('ruta_V2') }}">V2suministros</a></li>
                        <li><a href="{{ route('ruta_services') }}">Servicios</a>
                            <ul class="name">
                            <li><a href="">Gestión empresas</a>
                                <ul class="topic">
                                    <li><a href="">Gestión de calidad de su empresa</a></li>
                                    <li><a href="">Gestión de desarrollo empresarial</a></li>
                                    <li><a href="">IPS Gerencial</a></li>
                                </ul>
                            </li>
                            <li><a href="">Gestión I.E.</a>
                                <ul class="topic">
                                    <li><a href="">Manuales de Convivencia</a></li>
                                    <li><a href="">Diseño de PEI</a></li>
                                    <li><a href="">Mallas Curriculares</a></li>
                                    <li><a href="">Evaluación Docentes</a></li>
                                    <li><a href="">Evaluación Institucional</a></li>
                                </ul>
                            </li>
                            <li><a href="">Educación y formación</a>
                                <ul class="topic">
                                    <li><a href="">Formación continua</a></li>
                                    <li><a href="">Formación a la medida</a></li>
                                </ul>
                            </li>
                            <li><a href="">Propiedades Horizontales</a>
                                <ul class="topic">
                                    <li><a href="">SST</a></li>
                                    <li><a href="">PMIRS</a></li>
                                    <li><a href="">BD</a></li>
                                    <li><a href="">Planes de Emergencia</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                    </div>
                        
                    
                </ul>

                <div class="nav-item dropdown">
                    @auth
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #bf943a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bienvenido, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" id="logoutBtn"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                        </ul>
                    @else
                        <div class="nav-link" style="color: #bf943a; display: inline-block;">
                            <a href="{{ url('/login') }}" style="color: #bf943a;">Iniciar sesión</a>
                            <span style="margin: 0 5px;">|</span>
                            <a href="{{ url('/register') }}" style="color: #bf943a;">Registrarme</a>
                        </div>
                    @endauth
                </div>

                <!-- Formulario de cierre de sesión -->
                <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <!-- Rutas para las otras páginas del sitio web -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavLabel">Menú</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{ route('ruta_blog') }}">Converge</a></li>
                <li><a href="{{ route('ruta_V2') }}">V2suministros</a></li>
                <li><a href="{{ route('ruta_services') }}">Servicios</a></li>

                <div class="nav-item dropdown">
                    @auth
                        <a id="navbarDropdownOffcanvas" class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bienvenido, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownOffcanvas">
                            <li><a class="dropdown-item" href="#" id="logoutOffcanvasBtn">Cerrar sesión</a></li>
                        </ul>
                    @else
                        <div class="nav-link" style="color: #bf943a;">
                            <a href="{{ route('login') }}" style="color: white;">Iniciar sesión</a>
                            <span style="margin: 0 5px; color: white;">|</span>
                            <a href="{{ route('register') }}" style="color: white;">Registrarme</a>
                        </div>
                    @endauth
                </div>

                <!-- Formulario de cierre de sesión -->
                <form id="logoutFormOffcanvas" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</body>