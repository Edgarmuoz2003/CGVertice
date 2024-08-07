<nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
    <div class="container">
        <!-- Logo -->
        <a id="logoInicio">
            <img class="logo-cgv" src="{{ asset('img/V2logoSinFondo.png') }}" alt="Logo de Vértice" style="width: 40%">
        </a>
        <!-- Botón del menú Offcanvas para pantallas pequeñas -->
        <button class="navbar-toggler custom-toggler bg-dark" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Botón de Inicio -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @can('Admin Configuracion')
                    <div class="nav-item dropdown">
                        <a id="adminDropdown" class="nav-link dropdown-toggle" style="color: #b8860b" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Configuración
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <a class="dropdown-item" href="#" id="VerUsersbtn">
                                <i class="fas fa-users ml-2"></i> Usuarios
                            </a>
                            <script>
                                document.getElementById('VerUsersbtn').addEventListener('click', function() {
                                    window.location.href = "{{ route('ruta_Users') }}";
                                });
                            </script>
                            <li>
                                <a class="dropdown-item" href="#" id="rolesBtn">
                                    <i class="fas fa-user-tag"></i> Roles
                                </a>
                            </li>
                            <script>
                                document.getElementById('rolesBtn').addEventListener('click', function() {
                                    window.location.href = "{{ route('ruta_Roles') }}";
                                });
                            </script>
                            <li>
                                <a class="dropdown-item" href="#" id="permissionsBtn">
                                    <i class="fas fa-key"></i> Permisos
                                </a>
                            </li>
                            <script>
                                document.getElementById('permissionsBtn').addEventListener('click', function() {
                                    window.location.href = "{{ route('ruta_Perm') }}";
                                });
                            </script>
                        </ul>
                    </div>
                @endcan
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            </ul>
            <a id="btnInicio" class="nav-link" aria-current="page"
                style="color: #b8860b; font-weight: 500; text-decoration: none; cursor: pointer;">Inicio</a>
            <script>
                // Script para el logo
                document.getElementById('logoInicio').addEventListener('click', function() {
                    window.location.href = "{{ route('inicio') }}";
                });

                // Script para el botón de inicio
                document.getElementById('btnInicio').addEventListener('click', function() {
                    window.location.href = "{{ route('inicio') }}";
                });
            </script>

            <a class="nav-link" id="VerNosotrosbtn"
                style="color: #b8860b;font-weight: 400;margin-left: 30px;text-decoration: none;cursor: pointer;">Nosotros</a>
            <script>
                document.getElementById('VerNosotrosbtn').addEventListener('click', function() {
                    window.location.href = "{{ route('nosotros') }}";
                });
            </script>

            <a class="nav-link" id="VerBlogbtn"
                style="color: #b8860b;font-weight: 400;margin-left: 30px;text-decoration: none;cursor: pointer;">Converge</a>
            <script>
                document.getElementById('VerBlogbtn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_blog') }}";
                });
            </script>

            <a class="nav-link" id="VerV2btn"
                style="color: #b8860b;font-weight: 400;margin-left: 30px;text-decoration: none;cursor: pointer;">V2suministros</a>
            <script>
                document.getElementById('VerV2btn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_V2') }}";
                });
            </script>

            <a class="nav-link active" id="VerServicesbtn"
                style="color: #b8860b;font-weight: 400;margin-left: 30px;text-decoration: none;cursor: pointer;">Servicios</a>
            <script>
                document.getElementById('VerServicesbtn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_services') }}";
                });
            </script>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div class="nav-item dropdown">
                @auth
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #b8860b" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bienvenido, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#" id="logoutBtn">
                                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>
                @else
                    <div class="nav-link" style="color: #b8860b; display: inline-block;">
                        <a href="{{ url('/login') }}" style="color: #b8860b;">Iniciar sesión</a>
                        <span style="margin: 0 5px;">|</span> <!-- Separador -->
                        <a href="{{ url('/register') }}" style="color: #b8860b;">Registrarme</a>
                    </div>
                @endauth
            </div>
            {{-- Poner aquí el boton de buscar --}}

            <script>
                // Manejar clic en el botón de cerrar sesión
                document.getElementById('logoutBtn').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
                    document.getElementById('logoutForm').submit(); // Enviar el formulario de cierre de sesión
                });
            </script>

            <!-- Formulario de cierre de sesión -->
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
<!-- Rutas para las otras paginas del sitio web -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
    <div class="offcanvas-header">
        <!-- Título del Offcanvas -->
        <h5 class="offcanvas-title" id="offcanvasNavLabel">Menú</h5>
        <!-- Botón para cerrar el Offcanvas -->
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Contenido del Offcanvas -->
        <ul class="navbar-nav mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" id="VerInicioOffcanvasBtn">Inicio</a>
            <script>
                document.getElementById('VerInicioOffcanvasBtn').addEventListener('click', function() {
                    window.location.href = "{{ route('inicio') }}";
                });
            </script>
            <a class="nav-link active" aria-current="page" id="VerNosotrosOffcanvasBtn">Nosotros</a>
            <script>
                document.getElementById('VerNosotrosOffcanvasBtn').addEventListener('click', function() {
                    window.location.href = "{{ route('nosotros') }}";
                });
            </script>
            <a class="nav-link active" id="VerBlogOffcanvasBtn">Converge</a>
            <script>
                document.getElementById('VerBlogOffcanvasBtn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_blog') }}";
                });
            </script>

            <a class="nav-link active" id="VerV2OffcanvasBtn">V2suministros</a>
            <script>
                document.getElementById('VerV2OffcanvasBtn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_V2') }}";
                });
            </script>
            <a class="nav-link active" id="VerServicesOffcanvasBtn">Servicios</a>
            <script>
                document.getElementById('VerServicesOffcanvasBtn').addEventListener('click', function() {
                    window.location.href = "{{ route('ruta_services') }}";
                });
            </script>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div class="nav-item dropdown">
                @auth
                    <a id="navbarDropdownOffcanvas" class="nav-link active" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Bienvenido, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownOffcanvas">
                        <li>
                            <a class="dropdown-item" href="#" id="logoutOffcanvasBtn">Cerrar sesión</a>
                        </li>
                    </ul>
                @else
                    <div class="nav-link" style="color: #b8860b; display: inline-block;">
                        <a href="{{ route('login') }}" style="color: white;">Iniciar sesión</a>
                        <span style="margin: 0 5px; color: white">|</span> <!-- Separador -->
                        <a href="{{ route('register') }}" style="color: white;">Registrarme</a>
                    </div>
                @endauth
            </div>

            <script>
                // Manejar clic en el botón de cerrar sesión
                document.getElementById('logoutOffcanvasBtn').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
                    document.getElementById('logoutForm').submit(); // Enviar el formulario de cierre de sesión
                });
            </script>

            <!-- Formulario de cierre de sesión -->
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
        <ul class="navbar-nav flex-row text-center">
            <div class="text-center text-reset">
                <a href="https://www.facebook.com/sivertice" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-facebook"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="https://twitter.com/cgvertice1" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-twitter-x"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/vertice.co/" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-instagram"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/vertice-s-a-s-56312a291/" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-linkedin"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <a href="https://linktr.ee/VerticesSolucionesCorporativas" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="m13.736 5.853l4.005-4.117l2.325 2.38l-4.2 4.005h5.908v3.305h-5.937l4.229 4.108l-2.325 2.334l-5.74-5.769l-5.741 5.769l-2.325-2.325l4.229-4.108H2.226V8.121h5.909l-4.2-4.004l2.324-2.381l4.005 4.117V0h3.472zm-3.472 10.306h3.472V24h-3.472z" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UCoHXkPDBTLhk3LuOCxaPNlA" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-youtube"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@cgvertice" target="_blank"
                    class="px-2 text-reset link-offset-2 link-underline link-underline-opacity-0">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-tiktok"
                        viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                    </svg>
                </a>
            </div>
        </ul>
    </div>
</div>
