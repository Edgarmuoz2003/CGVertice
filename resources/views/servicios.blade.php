<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <svg class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <!-- dev de la Seccion del Contenedor - Botón de Cambio de Tema -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Suave
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Oscuro
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <!-- SVG de la Seccion de los SVG Icons - Cartas con animacion en el boton de leer mas del contenedor del contenido, las cartas en el carrucel-->
    <svg class="d-none">
        <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path
                d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
    </svg>

    @include('sistema.CGV.includes.navbar')

    <section class="section-abouts">
        <div class="content-Servicios">
            <p class="text-center titulo" id="animated-title">Servicios</p>
            <p class="text-center texto" id="animated-text">
                <i id="start-i" class="fas fa-quote-left"></i>
                <span id="typed-text">Conozca nuestros servicios para usted y su crecimiento empresarial.</span>
                <i id="start-i" class="fas fa-quote-right"></i>
            </p>
        </div>
    </section>
    &nbsp;
    <div class="container py-1">
        <hr>
    </div>
    <section class="Acrostico-section">
        <div class="container">
            <div class="row" style="cursor: default">
                <div class="col-12 text-center mt-5">
                    <h3 class="acrostico">
                        <span class="letter">Conozca todo acerca de...</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                    </h3>
                    <div style="padding-top: 3%">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad et laudantium iure ratione illum neque obcaecati aperiam
                            voluptas amet numquam esse nam temporibus, commodi consequatur
                            distinctio minus quam eum quas?
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    &nbsp;
    <section class="Timeline">
        <div class="container py-4" style="pointer:default;">
            <div class="main-timeline-2">
                {{-- Área de servicio al cliente --}}
                <div class="timeline-2 left-2" id="EduYFor">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 1">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Gestión de empresas
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem ipsum dolor</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="...">
                                    <br><br>
                                    <div class="container justify-content-around">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, minus
                                        provident ipsam sit voluptatibus nam aspernatur beatae tempora nostrum
                                        numquam qui dolor, voluptate impedit itaque quia hic unde veritatis. Officia?
                                        <br><br><br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde et illo cum
                                        deleniti doloribus libero ab provident consequuntur beatae. Dolorum cum
                                        praesentium consectetur aut debitis nemo quos tenetur odit corrupti?
                                        <hr>
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de gestión empresarial</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Gestión de calidad de su empresa
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Educación%20y%20Formación."
                                                    style="color: black">Cotizar</a></button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Gestión de desarrollo empresarial
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="/gestionDesarrollo">Ver</a>
                                            </button>
                                            
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                IPS Gerencial
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Educación%20y%20Formación."
                                                    style="color: black">Cotizar</a></button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Espacio de SST-SG --}}
                <div class="timeline-2 right-2" id="GestionE">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Gestión de Instituciones Educativas
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                                        Gestión de Instituciones Educativas
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="..."> <br><br>
                                    <div class="container justify-content-around">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, minus
                                        provident ipsam sit voluptatibus nam aspernatur beatae tempora nostrum
                                        numquam qui dolor, voluptate impedit itaque quia hic unde veritatis. Officia?
                                        <br><br><br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde et illo cum
                                        deleniti doloribus libero ab provident consequuntur beatae. Dolorum cum
                                        praesentium consectetur aut debitis nemo quos tenetur odit corrupti?
                                        <hr>
                                        <div class="card-title text-center">
                                            <h4>Detalles</h4>
                                        </div>
                                        <b>
                                            Tipos de tableros:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Servicios incluidos:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Técnicas de reparación:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div style="font-size:15px">
                                        <a>¿Estás interesado?</a>
                                        <br>
                                        <div>
                                            <button style="margin-left: 5%" type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button style="margin-left: 17%" type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Gestión%20Empresarial."
                                                    style="color: black">Sí</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Espacio de multimedia --}}
                <div class="timeline-2 left-2" id="GestionEdu">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 1">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Educación y formación
                        </h3>
                        <div class="card-body p-1">
                            <p class="mb-0">
                                Lorem ipsum titulo 3 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem ipsum dolor</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="..."> <br><br>
                                    <div class="container justify-content-around">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, minus
                                        provident ipsam sit voluptatibus nam aspernatur beatae tempora nostrum
                                        numquam qui dolor, voluptate impedit itaque quia hic unde veritatis. Officia?
                                        <br><br><br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde et illo cum
                                        deleniti doloribus libero ab provident consequuntur beatae. Dolorum cum
                                        praesentium consectetur aut debitis nemo quos tenetur odit corrupti?
                                        <hr>
                                        <div class="card-title text-center">
                                            <h4>Detalles</h4>
                                        </div>
                                        <b>
                                            Tipos de tableros:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Servicios incluidos:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Técnicas de reparación:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div style="font-size:15px">
                                        <a>¿Estás interesado?</a>
                                        <br>
                                        <div>
                                            <button style="margin-left: 5%" type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button style="margin-left: 17%" type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Gestión%20de%20Empresas%20Educativas."
                                                    style="color: black">Sí</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2" id="IPS">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 1">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            PH (Propiedades horizontales)
                        </h3>
                        <div class="card-body p-1">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-warning boton4 botoninfo" data-bs-toggle="modal"
                        data-bs-target="#exampleModal4" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem ipsum dolor</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="..."> <br><br>
                                    <div class="container justify-content-around">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, minus
                                        provident ipsam sit voluptatibus nam aspernatur beatae tempora nostrum
                                        numquam qui dolor, voluptate impedit itaque quia hic unde veritatis. Officia?
                                        <br><br><br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde et illo cum
                                        deleniti doloribus libero ab provident consequuntur beatae. Dolorum cum
                                        praesentium consectetur aut debitis nemo quos tenetur odit corrupti?
                                        <hr>
                                        <div class="card-title text-center">
                                            <h4>Detalles</h4>
                                        </div>
                                        <b>
                                            Tipos de tableros:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Servicios incluidos:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                        <b>
                                            Técnicas de reparación:
                                        </b>
                                        <br><br>
                                        Lorem ipsum dolor
                                        <br><br>
                                    </div>
                                </div>
                                <div style="padding: 2% 2% 2% 2%">
                                    <a>¿Cuales son tus necesidades?</a>
                                    <br>
                                    <div class="containerModal">
                                        <div class="itemModal"><a href="">SST</a></div>
                                        <div class="itemModal"><a href="">Mayas curriculares</a></div>
                                        <div class="itemModal"><a href="">PMIRS</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>

    <div class="container">
        <div class="col-md-4">
            <div class="text-center">
                <div style="position: relative; width: 300%; padding-top: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0860002137592!2d-75.59203859023458!3d6.252398893709935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429091a87d505%3A0xf032d899690661de!2sCra.%2071%20%2346-28%2C%20Laureles%20-%20Estadio%2C%20Medell%C3%ADn%2C%20Laureles%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1693585283630!5m2!1ses-419!2sco"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <br>

    @include('sistema.CGV.includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="{{ asset('js/code.jquery.com_jquery-3.7.1.js') }}"></script>
<script src="{{ asset('js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js') }}"></script>
<script src="{{ asset('js/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_js_bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
