<!DOCTYPE html>

<html lang="es">

<head>

    <title>Educación y Formación || Corporate Group Vértice</title>

    @include('CGV/includes/head')

</head>

<body style="background-color: #fff;">

    @include('CGV/includes/navbar')

    <!-- Otras secciones del sitio -->

    <main class="container">

        <section style="background-color: #eee;">
            <div class="text-center container py-5">
                <h4 class="mt-4 mb-5 text-dark"><strong>Educación y Formación</strong></h4>

                <div class="row">

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a id="formacionConsultoresBtn" class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        FORMACIÓN DE CONSULTORES
                                    </h5>
                                </a>

                                <script>
                                    document.getElementById('formacionConsultoresBtn').addEventListener('click', function() {
                                        window.location.href = "{{ route('ruta_FC') }}";
                                    });
                                </script>



                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Servicio al Cliente
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Inducción en SST
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i> PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i> VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Ciclos de Formación Continua
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Trabajo en Equipo
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Administración del Tiempo
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Formación a la Medida
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="img/10.jpg" class="w-100 img-fluid" />
                                <a>
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card-body bg-light">
                                <a class="text-reset">
                                    <h5 class="card-title mb-3 text-black">
                                        Actualización Normativa
                                    </h5>
                                </a>

                                <h6 class="mb-3 text-black">METODOLOGÍAS</h6>

                                <div class="row">
                                    <div class="col text-black">
                                        <i class="fas fa-chalkboard-teacher"></i>PRESENCIAL
                                    </div>
                                    <div class="col text-black">
                                        <i class="fas fa-desktop"></i>VIRTUAL
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="container my-4">
        <div class="row text-center">
            <div class="col-md-8 mb-5 mx-auto">
                <div style="position: relative; width: 100%; padding-top: 70%;">
                    <iframe class="rounded-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0860002137592!2d-75.59203859023458!3d6.252398893709935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429091a87d505%3A0xf032d899690661de!2sCra.%2071%20%2346-28%2C%20Laureles%20-%20Estadio%2C%20Medell%C3%ADn%2C%20Laureles%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1693585283630!5m2!1ses-419!2sco"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('CGV.includes.sliderGrandAliados')

    <!-- Enlace de WhatsApp -->
    <div class="container text-center mt-3">
        <a href="https://wa.me/573147675259?text=Quiero%20mas%20informacion." target="_blank"
            rel="noopener noreferrer">
            <img src="../CGV/img/whatsl.jpeg" alt="logo watsap" class="btn-wsp">
        </a>
    </div>

    @include('CGV.includes.footer')

</body>

</html>
