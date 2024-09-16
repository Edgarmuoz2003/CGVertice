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
    <ul class="name">
        <li><a href="/servicios#GestioenEmpresas">Gestión empresas</a>
            <ul class="topic">
                <li><a href="/GestionCalidad">Gestión de calidad de su empresa</a></li>
                <li><a href="/gestionDesarrollo">Gestión de desarrollo empresarial</a></li>
                <li><a href="/GestionIps">IPS Gerencial</a></li>
            </ul>
        </li>
        <li><a href="/servicios#GestionE">Gestión I.E.</a>
            <ul class="topic">
                <li><a href="/servicios#GestionE">Manuales de Convivencia</a></li>
                <li><a href="/servicios#GestionE">Diseño de PEI</a></li>
                <li><a href="/servicios#GestionE">Mallas Curriculares</a></li>
                <li><a href="/servicios#GestionE">Evaluación Docentes</a></li>
                <li><a href="/servicios#GestionE">Evaluación Institucional</a></li>
            </ul>
        </li>
        <li><a href="/servicios#GestionEdu">Educación y formación</a>
            <ul class="topic">
                <li><a href="/servicios#GestionEdu">Formación continua</a></li>
                <li><a href="/FormacionContinua">Formación a la medida</a></li>
                <li><a href="/servicios#GestionEdu">Instituciones Educativas</a></li>
            </ul>
        </li>
        <li><a href="/servicios#PH">Propiedades Horizontales</a>
            <ul class="topic">
                <li><a href="/GestionIps">SST</a></li>
                <li><a href="/gestionDesarrollo">PMIRS</a></li>
                <li><a href="/gestionDesarrollo">Tratamiento Datos (TD)</a></li>
                <li><a href="/gestionDesarrollo">Planes de Emergencia</a></li>
            </ul>
        </li>
    </ul>

    <div class="container-fluid">
        <section>
            {{-- PrimerContenedor (Buscar tal cual en el css) --}}
            <div class="content">
                <div class="container">
                    <div class="MainTittle">
                        <img src={{ asset('/img/Slogan.png') }} alt="Imagn" width="auto" height="450px"
                            class="img-fluid" />
                    </div>
                </div>
                <div class="mt-5 mb-4 zoom-effect ImgMain">
                    <img src={{ asset('/img/DD.jpg') }} class="rounded-circle img-fluid shadow-1-strong" alt="Imagn"
                        width="800px" height="600px" />
                </div>
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
