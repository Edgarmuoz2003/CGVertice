<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Group Vértice || Nosotros</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('sistema.CGV.includes.navbar')

    <section class="section-about">
        <div class="content-Conózcanos">
            <p class="text-center titulo" id="animated-title">Conózcanos</p>
            <p class="text-center texto" id="animated-text">
                <i id="start-i" class="fas fa-quote-left"></i>
                <span id="typed-text">Quiénes Somos y Nuestra Pasión por la Excelencia Empresarial.</span>
                <i id="start-i" class="fas fa-quote-right"></i>
            </p>
        </div>
    </section>
    <section class="Acrostico-section">
        <div class="container">
            <div class="row" style="cursor: default">
                <div class="col-12 text-center mt-5">
                    <h3 class="acrostico">
                        <span class="letter">C O R P O R A T E</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">G R O U P</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">V E R T I C E</span>
                        <span class="letter" style="padding: 7px;">
                            <!-- Espacio -->
                        </span>
                        <span class="letter">S.</span>
                        <span class="letter">A.</span>
                        <span class="letter">S.</span>
                    </h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md 1"></div>
                <div class="col-md-7">
                    <p class="acrostico-text" style="cursor: default;">
                        <a class="cgv" title="Validación de procesos">V<a style="color: #636363"> alidación de
                                procesos</a></a> 
                                <br>
                        <a class="cgv" title="Empresariales mediante la">E<a style="color: #636363"> mpresariales
                                mediante la</a></a><br>
                        <a class="cgv" title="Retroalimentación y gestión de riesgos que utiliza">R<a
                                style="color: #636363">
                                etroalimentación y gestión
                                de riesgos que utiliza</astyle=></a> <br>
                            <a class="cgv" title="Técnicas de trabajo orientadas a">T<a style="color: #636363">
                                    écnicas de trabajo orientadas
                                    a</a></a>
                            <br>
                            <a class="cgv"
                                title="Inferir en el cambio organizacional, mediante el aprovechamiento de">I<a
                                    style="color: #636363"> nferir en
                                    el cambio organizacional, mediante el aprovechamiento de</a></a> <br>
                            <a class="cgv"
                                title="Características y capacidades individuales que permitan el desarrollo de">C<a
                                    style="color: #636363">
                                    aracterísticas
                                    y capacidades individuales que permitan el desarrollo de</a></a> <br>
                            <a class="cgv" title="Ecosistemas internos empoderados">E<a style="color: #636363">
                                    cosistemas internos
                                    empoderados.</a></a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/LogoAgosto.png') }}" alt="Corporate Group Vertice sas"
                        style="width: 55%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <section class="section-about-video">
        <div class="container col-xxl-12 ">
            <div class="row flex-lg-row-reverse">
                <div class="col-12 col-sm-12 col-lg-9 align-items-center">
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/__PTxljtsgs?si=ylFDviGeaSflAxVq&start=1&autoplay=1&rel=0&cc_load_policy=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-lg-3">
                    <br>
                    <p><i class="fas fa-trophy"></i> Líderes</p>
                    <hr>
                    <p><i class="fas fa-check-circle"></i> Validación de Procesos</p>
                    <p><i class="fas fa-exclamation-triangle"></i> Gestión de Riesgos</p>
                    <p><i class="fas fa-cogs"></i> Técnicas de Trabajo</p>
                    <hr>
                    <p><i class="fas fa-exchange-alt"></i> Cambio Organizacional</p>
                    <p><i class="fas fa-users"></i> Características y Capacidades</p>
                    <p><i class="fas fa-chart-line"></i> Desarrollo Empresarial</p>
                    <hr>
                    <p><i class="fas fa-building"></i> Empresa Especializada</p>
                    <p><i class="fas fa-handshake"></i> Compromiso</p>
                    <p><i class="fas fa-award"></i> Excelencia Empresarial</p>
                    <hr>
                    <p><i class="fas fa-users"></i> Quiénes Somos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="Timeline">
        <div class="container py-5">
            <div class="main-timeline-2">
                {{-- Área de servicio al cliente --}}
                <div class="timeline-2 left-2">
                    {{-- CardsNosotros (Buscar así tal cual en el css) --}}
                    <div class="cardNosotros">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 1">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">Servicio
                                al cliente</h3>
                            <p class="mb-0">
                                En nuestra empresa, el servicio al cliente es nuestra prioridad número uno. Nos
                                esforzamos por brindar una experiencia excepcional a cada uno de nuestros clientes en
                                cada interacción. Nuestro equipo de atención al cliente está altamente capacitado y
                                dedicado a satisfacer tus necesidades y resolver cualquier pregunta o problema que
                                puedas tener.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Espacio de SST-SG --}}
                <div class="timeline-2 right-2">
                    <div class="cardNosotros">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 2">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">SST-SG
                            </h3>
                            <p class="mb-0">
                                SST-SG se dedica a garantizar la seguridad y el bienestar en el entorno laboral. Nuestra
                                prioridad es proporcionar soluciones efectivas en seguridad y salud en el trabajo.
                                Contamos con un equipo altamente capacitado en normativas y medidas preventivas. Estamos
                                aquí para ayudarte en cualquier aspecto relacionado con la seguridad laboral. ¡Confía en
                                SST-SG para un entorno laboral más seguro y saludable!.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Espacio de multimedia --}}
                <div class="timeline-2 left-2">
                    <div class="cardNosotros">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen 3">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b;">
                                Multimedia</h3>
                            <p class="mb-0">
                                Contamos con una variedad de recursos multimedia, incluyendo videos educativos,
                                infografías informativas y testimonios de clientes satisfechos. Estos recursos están
                                diseñados para brindar información relevante y útil sobre SST y servicio al cliente,
                                ayudando a nuestros clientes a comprender mejor estos temas y cómo pueden beneficiar a
                                sus empresas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('sistema.CGV.includes.mapa')

    <section>
        <div class="container text-center mt-3">
            <a href="https://wa.me/573147675259?text=Quiero%20mas%20informacion%20." target="_blank">
                <img src="../img/whatsl.jpeg" alt="logo watsap" class="btn-wsp">
            </a>
        </div>
    </section>

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

</html>
