<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src="../js/color-modes.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>V2 Suministros || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/V2logo.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <main class="container-just">
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
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme"
                type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
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
                    <button type="button" class="dropdown-item d-flex align-items-center active"
                        data-bs-theme-value="auto" aria-pressed="true">
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
    </main>

    @include('sistema.CGV.includes.navbarsuministros')

    <main class="container-just">

        <div class="container mt-4">
            <div class="col-xxl-12 px-4 py-3 mt-4">
                <div class="row flex-lg-row-reverse align-items-center g-4 mt-4">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="container-just">
                            <div class="card img-fluid rounded">
                                <img src="../img/insumos.png" alt="Error al Cargar la Imagen"
                                    class="img-fluid rounded mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container-just">
                            <h1 class="display-6 mb-3" style="color: #b8860b">¿Por qué recargar tu botiquín de primeros
                                auxilios?</h1>
                            &nbsp;
                            <ul class="card-text">
                                <li><b style="color: #b8860b">Conformidad Legal:</b> Cumple con regulaciones, evita
                                    sanciones y asegura un
                                    entorno laboral conforme.</li>
                                <li><b style="color: #b8860b">Máxima Preparación:</b> Estar siempre listo para
                                    emergencias y cumplir con
                                    normativas laborales.</li>
                                <li><b style="color: #b8860b">Rápida Respuesta:</b> Recarga regular para suministros
                                    inmediatos y respuestas
                                    rápidas ante incidentes.</li>
                                <li><b style="color: #b8860b">Protección del Personal:</b> Cuida a tu equipo con insumos
                                    de calidad para un
                                    entorno seguro.</li>
                            </ul>
                            &nbsp;
                            <p class="card-text">
                                Recuerda, nuestro asesoramiento es totalmente gratuito. ¡Estamos aquí para ayudarte!
                            </p>
                        </div>
                    </div>

                    &nbsp;
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="https://wa.me/573332371006?text=¿Por%20qué%20recargar%20tu%20botiquín%20de%20primeros%20auxilios?"
                            target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-lg"
                            type="button">¡Asesoramiento Gratis!</a>
                    </div>
                </div>
            </div>
            <div id="scrollspyHeading2" class="py-3">
                <div class="container">
                    <hr>
                </div>
            </div>
            <div class="album mt-4">
                <div class="container">

                    <div class="container text-center mt-3">
                        <div class="container-just py-4">
                            <h1 class="display-5" style="color: #b8860b">¡ Primeros auxilios !</h1>
                            <p class="card-text">Asegura tu bienestar con nuestro completo Kit de Primeros Auxilios.
                                Estamos comprometidos con tu seguridad y salud. Recuerda que según la circulación 072 de
                                noviembre 30 de 2021, los ciclos PHVA asociados a los SG-SST con vigencia anual se
                                contabilizan entre el 01 de enero y el 31 de diciembre de cada año. !Renuevalos¡</p>
                        </div>
                    </div>

                    @can('Crear Productos')
                        <div class="container text-center">
                            <button type="button" class="btn btn-outline-primary p-2" style="--bs-bg-opacity: .5;"
                                data-bs-toggle="modal" data-bs-target="#create">
                                Registrar Producto
                            </button>
                        </div>
                    @endcan
                    <div class="row mt-4">
                        @foreach ($V2 as $producto)
                            <div class="col-md-3 mb-4"> <!-- Ajusta la clase col-md-3 según tus necesidades -->
                                <div class="card shadow-sm">
                                    <div class="container py-3">
                                        <div class="container">
                                            <strong class="d-inline-block fs-5">{{ $producto->nombre }}</strong>
                                        </div>
                                    </div>
                                    <div class="container-just text-center">
                                        <div class="container">
                                            <img src="{{ asset('imagenesProducto/img/' . $producto->imagen) }}"
                                                class="img-fluid rounded"
                                                alt="Error con la carga de la imagen para el producto para la camilla de emergencia preciona F5 para solucionarlo"
                                                style="width: 250px; height: 250px;">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="d-grid gap-2">
                                                <a href="https://wa.me/573147675259?text=Quiero%20comprar%20sus%20productos."
                                                    target="_blank" rel="noopener noreferrer"
                                                    class="btn btn-success btn-sm">Comprar Ahora en WhatsApp</a>
                                                <a href="{{ route('producto.informacion', ['id' => $producto->idProducto]) }}"
                                                    class="btn btn-outline-primary btn-sm">Más información</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @include('sistema.V2.create')
            </div>
        </div>
        <div class="container py-5">
            <div class="position-relative p-1 text-center text-muted bg-body border border-dashed rounded-5">
                <br>
                <h1 class="text-body-emphasis mb-4">✨ ¿Qué pasa si no cumples con la norma 0705? ✨</h1>
                <p class="card-text col-lg-9 mx-auto mb-4">
                    No cumplir con la norma 0705 podría resultar en sanciones por parte de la autoridad competente, como
                    multas, suspensiones o incluso cierres temporales del establecimiento. 🚫💼
                </p>
                <p class="card-text col-lg-9 mx-auto mb-4">
                    ¿Cómo puedes asegurarte de cumplir con la norma? Considera contratar a un proveedor de servicios de
                    primeros auxilios. Ellos te ayudarán a revisar tu botiquín y a implementar un plan de capacitación
                    para tus empleados. 🛡️👩‍⚕️ Actuar de manera proactiva garantiza la seguridad de tu entorno laboral
                    y evita riesgos y sanciones para tu empresa. 🌐✅
                </p>
                <div class="container mt-4">
                    <div class="btn-container">
                        <button type="button" class="btn btn-warning btn-lg" data-mdb-ripple-init
                            data-mdb-ripple-color="dark">¡Asegura tu cumplimiento ahora!</button>
                        <div class="card-text mb-4" style="padding-top: 2%">
                            🛡️✨ Contáctanos para proteger tu negocio contra posibles sanciones. 🚀👩‍⚕️
                            #CumpleNorma0705
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </main>

    @include('sistema.CGV.includes.footer')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

    <!-- Otros scripts -->
    <script src="../js/code.jquery.com_jquery-3.7.1.js"></script>
    <script src="../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src="../js/script.js"></script>
    <!-- Al final del archivo, antes de </body> -->
</body>

</html>
