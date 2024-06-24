<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <!-- Seccion de la Configuración y Metadatos -->
  <script src="../js/color-modes.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Converge || Corporate Group Vértice</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="../img/Converge.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" />
  <link rel="stylesheet" href="../css/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_css_lightslider.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <!-- SGV de la Seccion de los SVG Icons - Botón de Cambio de Tema -->
  <svg class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- dev de la Seccion del Contenedor - Botón de Cambio de Tema -->
  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
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
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
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
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
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
    <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="10" />
      <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
    </symbol>
    <symbol id="cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
  </svg>

  <!-- div de la Seccion del Contenedor del Buscador -->
  <div class="container">
    <header class="border-bottom lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <!-- dev del texto con link al index de CGV -->
        <div class="col-4 pt-1">
          <h5>
            <a id="VerIniciobtn" class="blog-header-logo text-body-emphasis text-decoration-none">CGV</a>
            <script>
              document.getElementById('VerIniciobtn').addEventListener('click', function() {
                window.location.href = "{{ route('inicio') }}";
              });
            </script>
          </h5>
        </div>

        <!-- div del logo de vetice -->
        <div class="col-4 text-center">
          <!-- <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Converge</a> -->
          <div class="Converge-div-logo">
            <img src="../img/Converge.png" alt="Logotipo Converge" style="
                  max-width: calc(100% + 10px);
                  max-height: 100%;
                  height: auto;
                " />
          </div>
        </div>

        <!-- div del contenedor del icono sgv de la barra de busqueda que habre el Modal del Buscador de Converge -->
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary text-decoration-none" aria-label="Search" href="#!" data-bs-toggle="modal" data-bs-target="#modalBuscadorConverge1">
            Buscador
            <!-- ( ¡Explora y progresa! ) -->
            <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
              <title>Buscador</title>
              <circle cx="10.5" cy="10.5" r="7.5" />
              <path d="M21 21l-5.2-5.2" />
            </svg>
          </a>
        </div>
      </div>
    </header>

    <!-- div del Modal del Buscador de Converge -->
    <div tabindex="-1" aria-labelledby="modalBuscadorConverge1" aria-hidden="true" class="modal fade" id="modalBuscadorConverge1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="background: transparent; border: none">
          <div class="d-flex justify-content-center h-100">
            <div class="search">
              <input type="text" class="search-input" placeholder="Buscador..." name="" />
              <a href="#" class="search-icon">
                <i class="fa fa-search"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- div del navbar con scroller arrastable horizontalmente con los links a las secciones de la página -->
    <div class="nav-scroller py-1 mb-3 border-bottom overflow-x-auto">
      <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis active" id="Verindexbtn">INICIO</a>
        <script>
          document.getElementById('Verindexbtn').addEventListener('click', function() {
            window.location.href = "{{ route('inicio') }}";
          });
        </script>
        <a class="nav-item nav-link link-body-emphasis" id="VerSeguridadbtn">Seguridad Laboral y Excelencia Empresarial</a>

        <script>
          document.getElementById('VerSeguridadbtn').addEventListener('click', function() {
            window.location.href = "{{ route('ruta_Seguridad') }}";
          });
        </script>
        <a class="nav-item nav-link link-body-emphasis" href="#">Tecnología y Soluciones</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">Éxito Empresarial y Desarrollo</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">Procesos Empresariales y Cambio</a>
        <a class="nav-item nav-link link-body-emphasis" href="#">Desarrollo y Software</a>
      </nav>
    </div>

    <nav class="py-1" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb shadow p-3 mb-5 bg-body-tertiary rounded align-middle">
        <li class="breadcrumb-item"> Tú estás aquí:&nbsp;<a class="text-primary" id="VerBlogbtn">Inicio</a></li> &nbsp;
        <script>
          document.getElementById('VerBlogbtn').addEventListener('click', function() {
            window.location.href = "{{ route('ruta_blog') }}";
          });
        </script>
        <li class="breadcrumb-item active" aria-current="page">- Seguridad Laboral y Excelencia Empresarial</li>
      </ol>
    </nav>

  </div>

  <!-- main del Contenedor del contenido - Noticias -->
  <main class="container">
    <!-- div con el contenedor donde esta la gran mayoria del contenido de la pagina. -->
    <div class="row ">
      <!-- Div col-md-8 con el contenido que esta en el centro de la pagina. -->
      <div class="col-md-8 mb-5">

        <!-- Cuadricula Recomendados -->
        <div class="row g-4">
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/6.jpg" class="img-fluid rounded" alt="Imagen 1" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/7.jpg" class="img-fluid rounded" alt="Imagen 2" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/8.jpg" class="img-fluid rounded" alt="Imagen 3" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/9.jpg" class="img-fluid rounded" alt="Imagen 1" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/10.jpg" class="img-fluid rounded" alt="Imagen 2" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/11.jpg" class="img-fluid rounded" alt="Imagen 3" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/12.jpg" class="img-fluid rounded" alt="Imagen 1" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/img9.jpg" class="img-fluid rounded" alt="Imagen 2" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/img5.jpg" class="img-fluid rounded" alt="Imagen 3" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/img4.jpg" class="img-fluid rounded" alt="Imagen 1" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/img3.jpg" class="img-fluid rounded" alt="Imagen 2" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <a href="#!">
              <div class="card">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Categoria</strong>
                <img src="../img/img2.jpg" class="img-fluid rounded" alt="Imagen 3" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a
                    natural lead-in to additional content.
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
      <!-- Div del contenedor col-md-4 position-sticky con las publicaciones recientes -->
      <div class="col-md-4">
        <div class="position-sticky text-center" style="top: 2rem">

          <div class="container">
            <!-- Inicio de "Acerca de"   -->
            <div class="py-1 text-center">
              <h5 class="py-1 text-center">Acerca de Converge</h5>
              <p class="text-start card-text">Es un canal de medios empresariales dedicado a la tranquilidad de los empresarios. A través de contenido relevante y de calidad, Converge brinda información y herramientas para que los empresarios puedan tomar mejores decisiones y alcanzar sus objetivos.</p>
            </div>
          </div>

          <!-- div del contenedor del icono sgv de la barra de busqueda que habre el Modal del Buscador de Converge -->
          <div class="py-5 container align-items-center">
            <div class="text-center">
              <a class="link-secondary text-decoration-none" aria-label="Search" href="#!" data-bs-toggle="modal" data-bs-target="#modalBuscadorConverge1">
                <h4 class="text-center">Buscador
                  <!-- ( ¡Explora y progresa! ) -->
                  <svg width="25" height="25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                    <title>Buscador</title>
                    <circle cx="10.5" cy="10.5" r="7.5" />
                    <path d="M21 21l-5.2-5.2" />
                  </svg>
                </h4>
              </a>
            </div>
          </div>

          <!-- Inicio de tags  -->
          <div class="container-just text-center py-3 g-4">
            <a href="#">
              <button type="button" class="btn btn-outline-secondary btn-sm mb-2">Seguridad Laboral y Excelencia Empresarial</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-outline-secondary btn-sm mb-2">Tecnología y Soluciones</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-outline-secondary btn-sm mb-2">Éxito Empresarial y Desarrollo</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-outline-secondary btn-sm mb-2">Procesos Empresariales y Cambio</button>
            </a>
            <a href="#">
              <button type="button" class="btn btn-outline-secondary btn-sm mb-2">Desarrollo y Software</button>
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- pagination Inicio -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!-- pagination Final -->

    <div class="container">
      <div class="row">
        <div class="col-1">
          <!-- Contenido de la primera columna (izquierda) -->
        </div>
        <div class="col-10">
          <!-- Contenido de la segunda columna (centro) -->

          <div class="container mt-5">
            <h5 class="display-6 mb-4 text-center">🛡️ Preguntas frecuentes sobre seguridad y salud en el trabajo en Colombia 🌐</h5>
            <div class="accordion" id="faqAccordion">

              <!-- Pregunta 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    ¿Cuáles son las principales normativas de seguridad y salud en el trabajo en Colombia? 📜
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 1 -->
                    En Colombia, las normativas clave incluyen la Resolución 0312 de 2019 y el Decreto 1072 de 2015, que establecen los requisitos y obligaciones para garantizar la seguridad y salud en el trabajo. Estas regulaciones han sido fundamentales desde su implementación, contribuyendo a reducir incidentes laborales en un 15% en los últimos cinco años.
                  </div>
                </div>
              </div>

              <!-- Pregunta 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cómo pueden las empresas colombianas mejorar la prevención de accidentes laborales? 🏭
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 2 -->
                    Las empresas pueden mejorar la prevención de accidentes mediante la implementación de programas de capacitación, inspecciones regulares y la promoción de una cultura de seguridad entre los empleados. Datos recientes indican que las empresas que invierten en formación de seguridad han experimentado una disminución del 20% en los accidentes laborales.
                  </div>
                </div>
              </div>

              <!-- Pregunta 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cuál es el papel de los comités paritarios de seguridad y salud en el trabajo en Colombia? 🤝
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 3 -->
                    Los comités paritarios juegan un papel crucial al promover la participación activa de empleadores y trabajadores en la identificación y control de riesgos laborales, contribuyendo así a un entorno laboral más seguro. En los últimos años, la participación en estos comités ha aumentado en un 25%, evidenciando un mayor compromiso con la seguridad en el trabajo.
                  </div>
                </div>
              </div>

              <!-- Pregunta 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Cuáles son las sanciones por incumplir las normativas de seguridad y salud en el trabajo en Colombia? ⚖️
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 4 -->
                    Las sanciones pueden incluir multas significativas y medidas legales, y la gravedad depende de la naturaleza del incumplimiento y el riesgo para la seguridad y salud de los trabajadores. En el último año, se impusieron multas que sumaron un total de $2 millones, destacando la seriedad de las autoridades ante el incumplimiento.
                  </div>
                </div>
              </div>

              <!-- Pregunta 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Qué beneficios ofrece el Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST) en Colombia? 🔄
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 5 -->
                    El SG-SST contribuye a la reducción de accidentes laborales, mejora la productividad y garantiza el cumplimiento legal, lo que beneficia tanto a empleadores como a trabajadores. Estudios recientes han demostrado que las empresas con implementaciones efectivas del SG-SST experimentaron un aumento del 30% en la satisfacción laboral y la retención de empleados.
                  </div>
                </div>
              </div>

              <!-- Pregunta 6 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    ¿Cómo se actualiza el SG-SST en una empresa colombiana? 🔄
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <!-- Contenido de la respuesta 6 -->
                    La actualización del SG-SST implica revisar y ajustar regularmente los procedimientos, evaluar los riesgos y capacitar a los empleados, garantizando así que el sistema esté alineado con las condiciones laborales actuales. En el último año, el 80% de las empresas que actualizaron regularmente su SG-SST experimentaron una disminución del 10% en los incidentes reportados.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="col-1">
          <!-- Contenido de la tercera columna (derecha) -->
        </div>
      </div>
    </div>

  </main>

  <main class="container-just">
    <!-- Sección del Contenedor del footer -->
    <div class="container-fluid flex-grow-1">
      <div class="row py-5">
        <div class="col-lg-12 text-center">
          <h1 class="display-3">Explora más</h1>
          <p class="lead mb-0">Descubre contenido fascinante en nuestro blog.</p>
          <p class="lead py-3">Diseñado con cariño para ti. ¡Disfruta de la lectura!</p>
        </div>
      </div>
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
            <!-- Nueva estructura en formato Bootstrap -->
            <ul class="list-inline mt-4">
              <li class="list-inline-item">
                <a href="https://twitter.com/cgvertice1" target="_blank" title="twitter" class="text-reset">
                  <svg width="25" height="25" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/sivertice" target="_blank" title="facebook" class="text-reset">
                  <svg width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/vertice.co/" target="_blank" title="instagram" class="text-reset">
                  <svg width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://linktr.ee/VerticesSolucionesCorporativas" target="_blank" title="vimeo" class="text-reset">
                  <svg width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m13.736 5.853l4.005-4.117l2.325 2.38l-4.2 4.005h5.908v3.305h-5.937l4.229 4.108l-2.325 2.334l-5.74-5.769l-5.741 5.769l-2.325-2.325l4.229-4.108H2.226V8.121h5.909l-4.2-4.004l2.324-2.381l4.005 4.117V0h3.472zm-3.472 10.306h3.472V24h-3.472z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/channel/UCoHXkPDBTLhk3LuOCxaPNlA" target="_blank" title="pinterest" class="text-reset">
                  <svg width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.tiktok.com/" target="_blank" title="tiktok" class="text-reset">
                  <svg width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <hr class="p-0 m-0 b-0"> -->
      <div class="py-2">
        <div class="container text-center">
          <p class="text-muted mb-0 py-2">&copy; 2023 Corporate Group Vértice</p>
        </div>
      </div>
    </footer>
  </main>

  <!-- Seccion de js funcionalidades -->
  <script src="../js/code.jquery.com_jquery-3.7.1.js"></script>
  <script src="../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js"></script>
  <script src="../js/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_js_bootstrap.bundle.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="../js/script.js"></script>
</body>

</html>