<html lang="es">
    <head>
        <title>Corporate Group Vértice</title>
        @include('sistema.CGV.includes.head')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    </head>

    <body>

        @include('sistema.CGV.includes.navbar')
        @include('sistema.CGV.includes.boton')

        <div class="container-fluid">
            <section>
                <div class="content">
                    <div class="container" style="padding-right:5%;">
                        <div class="MainTittle">
                            <h2>
                                <span style="color:  #b8860b;">Trabajamos</span> por
                                <br>la <span style="color: #b8860b;">tranquilidad</span> de los <span
                                    style="color:  #b8860b;">empresarios.</span>
                            </h2>
                        </div>
                        <div class="TextoInicio">
                            <p>
                                En Vértice, nos dedicamos a salvaguardar la tranquilidad de los empresarios. Nuestro
                                compromiso se centra en brindar soluciones que alivien las preocupaciones diarias de quienes
                                dirigen empresas. Desde asesoramiento estratégico hasta servicios especializados, trabajamos
                                incansablemente para crear un entorno empresarial donde la paz mental y la confianza sean la
                                norma. Tu tranquilidad es nuestra prioridad, porque sabemos que cuando los empresarios se
                                sienten seguros, pueden alcanzar su máximo potencial y hacer crecer sus negocios con
                                confianza y serenidad.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 mb-4 zoom-effect">
                        <img src="/img/DD.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="Imagn"
                            width="800px" height="600px" />
                    </div>
                </div>
            </section>
        </div>

        <section class="section-about-video">
            <div class="container col-xxl-12 ">
                <div class="row flex-lg-row-reverse">
                    <div class="col-12 col-sm-12 col-lg-9 align-items-center">
                        <div class="ratio ratio-16x9">
                            <iframe width="100%" height="100%"
                                src="/videos/VideoInicio.mp4"
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

        

        @include('sistema.CGV.includes.serviciosTeaser')

        <br><br>

        @include('sistema.CGV.includes.sliderProductos')

        <br><br>

        @include('sistema.CGV.includes.noticiasBlogCartasSticky')

        <br><br>

        @include('sistema.CGV.includes.mapa')

        <br>

        @include('sistema.CGV.includes.sliderGrandAliados')

        @include('sistema.CGV.includes.footer')

    </body>
</html>