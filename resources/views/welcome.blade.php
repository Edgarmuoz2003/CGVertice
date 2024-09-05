<html lang="es">

<head>
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    @include('sistema.CGV.includes.newNavbar')
    @include('sistema.CGV.includes.boton')

    <div class="container-fluid">
        <section>
            {{-- PrimerContenedor (Buscar tal cual en el css) --}}
            <div class="content">
                <div class="container">
                    <div class="MainTittle">
                        <p id="MainTittle">
                            <span style="color: #bf943a">Trabajamos</span> y
                            <span style="color: #bf943a">protegemos</span> lo que más te
                            <span style="color: #bf943a">importa.</span>
                        </p>
                    </div>
                    <div class="TextoInicio">
                        <p>
                            En Vértice, nos enfocamos en ofrecer soluciones que alivian las preocupaciones diarias de
                            quienes lideran empresas, propiedades horizontales, instituciones educativas y demás
                            organizaciones. Desde el asesoramiento estratégico hasta servicios especializados, nos
                            dedicamos a crear un entorno seguro y confiable. Tu tranquilidad y bienestar son nuestra
                            prioridad, porque sabemos que cuando lo que
                            te importa está protegido, puedes alcanzar tu máximo potencial con confianza y serenidad.
                        </p>
                    </div>
                </div>
                <div class="mt-5 mb-4 zoom-effect">
                    <img src={{ asset('/img/DD.jpg') }} class="rounded-circle img-fluid shadow-1-strong" alt="Imagn"
                        width="800px" height="600px" />
                </div>
            </div>
        </section>
    </div>

    <br><br>
    @include('sistema.CGV.includes.sliderGrandClientes')
   

    <section class="section-about-video">
        <div class="container col-xxl-12 ">
            <div class="row flex-lg-row-reverse">
                <div class="col-12 col-sm-12 col-lg-9 align-items-center">
                    <div class="ratio ratio-16x9">
                        <iframe width="100%" height="100%" src={{ asset('/videos/VideoInicio.mp4') }}
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
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

    @include('sistema.CGV.includes.regresarArriba')

    <br>

    @include('sistema.CGV.includes.sliderGrandAliados')
    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')


</body>

</html>
