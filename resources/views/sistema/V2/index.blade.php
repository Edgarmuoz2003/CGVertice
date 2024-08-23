<head>
    <meta charset="utf-8" />
    <!-- Seccion de la Configuración y Metadatos -->
    <script src={{ asset('../js/color-modes.js') }}></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>V2 Suministros || Corporate Group Vértice</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../img/V2logo.jpeg" type="image/x-icon" />
    @include('sistema.CGV.includes.head')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    

    @include('sistema.CGV.includes.navbarsuministros')
    @include('sistema.CGV.includes.regresarArriba')

    <main class="container-just">

        <div class="container mt-4">
            <div class="col-xxl-12 px-4 py-3 mt-4">
                <div class="row flex-lg-row-reverse align-items-center g-4 mt-4">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="container-just">
                            <div class="card img-fluid rounded">
                                <img src={{ asset('../img/insumos.png') }} alt="Error al Cargar la Imagen"
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
            <form class="d-flex me-3" role="search" action="{{ route('productos.search') }}" method="GET">
                <input class="form-control me-3" type="search" name="query" placeholder="¿Qué estás buscando?" aria-label="Search">
                <button class="btn btn-outline-warning me-3" type="submit">Buscar</button>
            </form>
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
                                                <a href="https://wa.me/573016280574?text=Quiero%20comprar%20sus%20productos."
                                                    target="_blank" rel="noopener noreferrer"
                                                    class="btn btn-secondary btn-sm">Comprar Ahora en WhatsApp</a>
                                                <a href="{{ route('producto.informacion', ['id' => $producto->idProducto]) }}"
                                                    class="btn btn-outline-warning btn-sm">Más información</a>
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
    @include('sistema.CGV.includes.botonWhatsapp')

    <script src={{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}></script>


    <!-- Otros scripts -->
    <script src={{ asset('../js/code.jquery.com_jquery-3.7.1.js') }}></script>
    <script src={{ asset('../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js') }}></script>
    <script src={{ asset('../js/popper.min.js') }}></script>
    <script src={{ asset('https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js') }}
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src={{ asset('../js/script.js') }}></script>
    <!-- Al final del archivo, antes de </body> -->
    @include('sistema.CGV.includes.boton')
</body>

</html>
