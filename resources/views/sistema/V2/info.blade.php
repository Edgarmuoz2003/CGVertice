<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src="../js/color-modes.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$producto->nombre}} || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/V2logoSinFondo.png" type="image/x-icon" />
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
@include('sistema.CGV.includes.boton')

    <!-- Contenedor de la cabeza de la pagina "head" -->
    <main class="container-just">

        <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 mb-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" aria-disabled="true">
                    <img src="../img/V2logoSinFondo.png" alt="V2 Suministros" class="img-fluid me-5" width="50" height="auto">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="nav nav-underline me-auto mb-0 mb-lg-0">
                        <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                            <div class="nav-item">
                                <a class="nav-link me-2" href="../V2/" style="color: #b8860b; font-size: 1.5rem; font-weight: bold">V2Suministos</a>
                            </div>
                        </div>
                        <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                            <div class="nav-item">
                                <a class="nav-link me-2" href="../" style="color: #b8860b; font-size: 1.5rem; font-weight: bold">Inicio</a>
                            </div>
                        </div>
                    </ul>
                    

                    {{-- <div class="btn-group dropstart">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/Perfil.jpg" width="40" height="40" class="rounded-circle">
                        </a>

                    </div> --}}
                </div>
            </div>
        </nav>

        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">

            <div class="offcanvas-body">

                <div class="container-just">
                    <div class="container">
                        <div class="row text-center mb-4 py-3">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img src="../img/Perfil.jpg" class="img-fluid rounded-4 card" alt="...">
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="row py-3">
                            <div class="col-4">
                                <div class="nav nav-underline me-auto mb-2 mb-lg-0">
                                    <div class="nav-item">
                                        <a class="nav-link" href="#!">Inicio</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="nav nav-underline me-auto mb-0 mb-lg-0">
                                    <div class="nav-item">
                                        <a class="nav-link" href="../">CGVértice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Contenedor main del cuerpo o "body de la pagina" -->
    <main class="container-just">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col">

                    <!-- . -->
                    <!--Main layout-->
                    <main class="mt-1 pt-4">
                        <div class="container mt-1">
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <div class="container-just">
                                        <!-- border -->
                                        <img src="{{ asset('imagenesProducto/img/' . $producto->imagen) }}" width="100%" height="100%" class="img-fluid" alt="" />
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <!--Content-->
                                    <div class="p-4">

                                        <h1>{{$producto->nombre}}</h1>
                                        <p class="lead">
                                            <span>$ {{$producto->precio}}</span>
                                        </p>

                                        <strong>
                                            <p class="DescriptionP">Descripción</p>
                                        </strong>

                                        <div class="description-box">
                                            <p>
                                                {{$producto->descripcion}}
                                            </p>
                                        </div>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <a href="https://wa.me/573147675259?text=Quiero%20cotizar%20el%20{{$producto->nombre}}." target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm">Comprar ahora</a>
                                            <br>
                                        
                                            @can('Editar Productos')
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edit{{ $producto->idProducto }}">Editar Producto</button>
                                            @endcan
                                            @can('Eliminar Productos')
                                            <button type="button" class="btn btn-outline-danger" data-producto-id="{{ $producto->idProducto }}" onclick="eliminarProducto('{{ $producto->idProducto }}')">
                                                Eliminar Producto
                                            </button>
                                            @endcan
                                        </div>

                                    </div>
                                    @include('sistema.V2.editar')
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row d-flex justify-content-center">
                                <!-- Grid column -->
                                <div class="col-md-12 text-center">

                                    <div class="row g-3 my-4">
                                        <div class="col-3">
                                            <h4 class="text-center">Información Adicional</h4>
                                        </div>
                                        <div class="col-9">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="informacion-box">
                                        <p>
                                            {{$producto->informacionA}}
                                        </p>
                                    </div>
                                    <style>
                                        .informacion-box {
                                            max-width: 1500px;
                                            height: auto;
                                            overflow-wrap: break-word;
                                            border: 1px solid #ddd;
                                            padding: 10px;
                                            background-color: #f9f9f9;
                                            border-radius: 5px;
                                            color:black;
                                        }
                                    </style>

                                    @if($producto->opcion == "Botiquin")
                                    @can('Ver DetallesProductos')
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <!-- En tu vista info.blade.php -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    <h5>Detalles del Botiquín</h5>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @can('Crear Detalles')
                                                    <div class="container text-center">
                                                        <a href="{{ route('producto.detalles.modal', ['id' => $producto->idProducto]) }}" class="btn btn-outline-primary p-2" data-bs-toggle="modal" data-bs-target="#create">
                                                            Registrar Elementos
                                                        </a>
                                                    </div>
                                                    @endcan
                                                    <br>
                                                    @if ($producto->detalleproductos->count() > 0)
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>ELEMENTOS</th>
                                                                <th>UNIDADES</th>
                                                                <th>CANTIDAD</th>
                                                                @if(Auth::check() && (Auth::user()->can('Editar Detalles') || Auth::user()->can('Eliminar Detalles')))
                                                                <th>Acciones</th>
                                                                @endif
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($producto->detalleproductos as $detalle)
                                                            <tr>
                                                                <td>{{ $detalle->elementos }}</td>
                                                                <td>{{ $detalle->unidades }}</td>
                                                                <td>{{ $detalle->cantidad }}</td>
                                                                @if(Auth::check() && (Auth::user()->can('Editar Detalles') || Auth::user()->can('Eliminar Detalles')))
                                                                <td>
                                                                    @can('Editar Detalles')
                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editarDetalle{{ $detalle->idDetalle }}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                        </svg>
                                                                    </button>
                                                                    @endcan
                                                                    @can('Eliminar Detalles')
                                                                    <button type="button" class="btn btn-outline-danger" data-detalle-id="{{ $detalle->idDetalle }}" onclick="eliminarDetalle('{{ $detalle->idDetalle }}')">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                        </svg>
                                                                    </button>
                                                                    @endcan
                                                                </td>
                                                                @endif
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @else
                                                    <p>No hay detalles disponibles.</p>
                                                    @endif
                                                    @include('sistema.V2.detalles')
                                                </div>
                                            </div>
                                            @foreach ($producto->detalleproductos as $detalle)
                                            @include('sistema.V2.editarDetalle', ['detalle' => $detalle])
                                            @endforeach
                                        </div>
                                    </div>
                                    @endcan
                                </div>
                            </div>

                            <div class="card my-4">
                                <div class="card-body">
                                    <h5 class="card-title">Consideraciones al Adquirir un Botiquín</h5>
                                    <p>
                                        Al adquirir un botiquín, ten en cuenta lo siguiente:
                                    </p>
                                    <ul>
                                        <li>Este se utiliza únicamente en situaciones de emergencia, dentro del escenario u operación de la empresa.</li>
                                        <li>Siempre verifica la vigencia de los productos y realiza su reposición con antelación a su fecha de caducidad.</li>
                                        <li>Es recomendable contar con capacitación previa en el uso de botiquines, así como en primeros auxilios. Mantén actualizados los planes de emergencia y proporciona entrenamiento al personal de las brigadas de emergencias.</li>
                                        <li>Realiza inspecciones periódicas del botiquín y sus elementos.</li>
                                        <li>Haz un uso adecuado de los equipos y herramientas, de acuerdo con la función para la que fueron creados.</li>
                                    </ul>
                                </div>
                            </div>
                            @else
                            @endif

                        </div>
                    </main>

                    <style>
                        .description-box {
                            max-width: 600px;
                            height: auto;
                            overflow-wrap: break-word;
                            border: 1px solid #ddd;
                            padding: 10px;
                            background-color: #f9f9f9;
                            border-radius: 5px;
                            color: black;
                        }
                    </style>

                    <!--Main layout-->

                </div>
            </div>
        </div>
    </main>

    <!-- Contenedor main del footer de la pagina -->
    <main class="container-just">

        <div class="container">
            <hr>
            <hr>
        </div>

        <footer class="container-fluid">
            <div class="container py-5">
                <div class="row py-3">
                    <!-- Sección "Help" -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Ayuda</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Preguntas frecuentes</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Soluciones.vertice@gmail.com</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">( +57 ) 314 767 52 59</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Mercadeo.vertice@gmail.com</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">( +57 ) 323 735 74 03</a></li>
                        </ul>
                    </div>
                    <!-- Sección "About" -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Acerca de</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Sobre nosotros</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Youtube</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Contáctenos</a></li>
                        </ul>
                    </div>
                    <!-- Sección "Policy" -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Política</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Condiciones de uso</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Seguridad</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Privacidad</a></li>
                        </ul>
                    </div>
                    <!-- Sección "Company" -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Compañía</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Mapa del sitio</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Nuestros productos</a></li>
                        </ul>
                    </div>
                    <!-- Sección "Registered Office Address" -->
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">DIRECCIÓN DEL DOMICILIO SOCIAL</h6>
                        <p class="text-muted mb-4"> Carrera 71# 46-28 Laureles, Estadio.</p>
                        <div>
                            <a href="https://www.facebook.com/sivertice" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com/cgvertice1" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/vertice.co/" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/vertice-s-a-s-56312a291/" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                            </a>
                            <a href="https://linktr.ee/VerticesSolucionesCorporativas" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="m13.736 5.853l4.005-4.117l2.325 2.38l-4.2 4.005h5.908v3.305h-5.937l4.229 4.108l-2.325 2.334l-5.74-5.769l-5.741 5.769l-2.325-2.325l4.229-4.108H2.226V8.121h5.909l-4.2-4.004l2.324-2.381l4.005 4.117V0h3.472zm-3.472 10.306h3.472V24h-3.472z" />
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/channel/UCoHXkPDBTLhk3LuOCxaPNlA" target="_blank" class="me-4 text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/" target="_blank" class="text-reset link-offset-2 link-underline link-underline-opacity-0">
                                <svg width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- <hr class="p-0 m-0 b-0"> -->
        <div class="py-2">
            <div class="container text-center bg-body-tertiary">
                <p class="text-muted mb-0 py-2">&copy; 2023 Corporate Group Vértice</p>
            </div>
        </div>
    </main>

    <!-- Seccion de js funcionalidades -->
    <script src="../js/code.jquery.com_jquery-3.7.1.js"></script>
    <script src="../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js"></script>
    <script src="../js/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_js_bootstrap.bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function mostrarSweetAlertEliminar(idProducto) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'No podrás revertir esto.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    eliminarProducto(idProducto);
                }
            });
        }

        function eliminarProducto(idProducto) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar el producto.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Realiza una solicitud DELETE usando Fetch API
                    fetch('/V2/' + idProducto, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Redirige a la ruta /V2 después de eliminar
                            window.location.href = '/V2';
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'error',
                                title: 'Error al eliminar el producto',
                                text: 'Hubo un problema al intentar eliminar el producto.'
                            });
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar el producto',
                            text: 'Hubo un problema al intentar eliminar el producto.'
                        });
                    });
                }
            });
        }

        function eliminarDetalle(idDetalle) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar el detalle.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Realiza una solicitud DELETE usando Fetch API
                    fetch('/eliminar-detalle/' + idDetalle, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Recarga la página actual después de eliminar
                            location.reload();
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'error',
                                title: 'Error al eliminar el detalle',
                                text: 'Hubo un problema al intentar eliminar el detalle.'
                            });
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar el detalle',
                            text: 'Hubo un problema al intentar eliminar el detalle.'
                        });
                    });
                }
            });
        }
    </script>

</body>

</html>