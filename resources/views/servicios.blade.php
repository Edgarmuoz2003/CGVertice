<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    
    @include('sistema.CGV.includes.boton')
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
    <div class="Centrar">
        <div class="EncabezadoSer">
            <div class="row" style="cursor: default">
                <div class="col-12 text-center mt-8">
                    <h3 class="acrostico">
                        <span class="letter">Conozca todo acerca de...</span>
                    </h3>
                </div>
                <div class="mt-5">
                    <p style="font-size: 20px">Corporate Group Vértice SAS, con más de 14 años de experiencia en procesos de consultoría de Gestión, 
                        ha acompañado a más de 350 empresarios a nivel nacional en la gestión del cumplimiento normativo. 
                        Con un amplio portafolio empresarial llegamos a nuestros usuarios con beneficios integradores, 
                        que les permite efectividad y eficiencia en el alcance de sus objetivos. 
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                        <h3 class="fw-bold mb-4 " style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            Gestión de empresas
                        </h3>
                        <div class="card-body p-4">
                            <p class="mb-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil facere voluptas necessitatibus. Quaerat laudantium accusamus praesentium deserunt! Magnam perferendis praesentium nisi, totam a enim amet quibusdam tempora perspiciatis voluptate maiores! 
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
                                <div class="modal-header titulo-modal">
                                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Gestion Empresarial</h1>
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
                                                <a href="/GestionCalidad"
                                                    style="color: black">Ver</a></button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Gestión de desarrollo empresarial
                                            </b>
                                            <br><br>
                                            El modelo de gestión empresarial de CG Vértice acerca al empresario a productos 
                                            y servicios de 2 categorías: Única Misión y Asistenciales permanentes.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="/gestionDesarrollo
                                                " style="color: black;">Ver</a>
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
                                                <a href="/GestionIps"
                                                    style="color: black">Ver</a></button>
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
                                    <h1 class="modal-title fs-5 titulo-modal" id="exampleModalLabel">Gestion Instituciones Educativas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- imagen de video al principio del modal -->
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="...">
                                    <br><br>

                                    <!-- texto debajo de la imagen del video -->
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
                                            <h4 style="color: #b8860b">Servicios de gestión Instituciones Educativas</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Manuales de Convivencia
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
                                                Diseño de PEI
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
                                                Mayas Curriculares
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
                                                Evaluacion Docentes
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
                                                Evaluacion Institucional
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            
                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Educación%20y%20Formación."
                                                    style="color: black">Cotizar</a>
                                            </button>
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
                                        aria-label="Close">
                                    </button>
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
                                        <div class="card-title text-center" style="padding: 1% 0% 2% 0%">
                                            <h4 style="color: #b8860b">Servicios de gestión Instituciones Educativas</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Formación continua
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            
                                            <button type="button" class="btn btn-warning">
                                                <a href="https://wa.me/573332371006?text=Estoy%20interesado%20en%20el%20servicio%20de%20Educación%20y%20Formación."
                                                    style="color: black">Cotizar</a>
                                            </button>
                                        </div>
                                        <div class="container py-1">
                                            <hr>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                Formación a la medida
                                            </b>
                                            <br><br>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Velit fuga soluta fugit provident dolores cum magni est nihil.
                                            Sunt nemo commodi sit maiores reprehenderit distinctio qui magnam
                                            eum quia? Provident.
                                            <br><br>
                                            <button type="button" class="btn btn-warning">
                                                <a href="FormacionContinua"
                                                    style="color: black">Ver</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-2 right-2" id="GestionE">
                    <div class="card">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImageTimeline1">
                            <img src="img/img.jpeg" class="card-img-top" style="width: 100%; height: auto;"
                                alt="Imagen de gestión empresarial">
                        </a>
                        <br>
                        <h3 class="fw-bold mb-4" style="font-family: 'Swiss', sans-serif; color:#b8860b">
                            PH (Propiedades Horizontales)
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
                        data-bs-target="#exampleModal6" style="background-color: #b8860b; border:#b8860b 1px solid;">
                        Más información
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 titulo-modal" id="exampleModalLabel">Propiedades Horizontales</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- imagen de video al principio del modal -->
                                <div class="modal-body">
                                    <img src="img/img.jpeg" class="card-img-top imgpopup" alt="...">
                                    <br><br>

                                    <!-- texto debajo de la imagen del video -->
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
                                            <h4 style="color: #b8860b">Servicios de Propiedades Horizontales</h4>
                                        </div>
                                        <div>
                                            <b style="color: #b8860b">
                                                SST
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
                                                PMIRS
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
                                                BD
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
                                                Planes de Emergencia
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
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>

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
