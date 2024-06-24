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
    @include('sistema.CGV.includes.navbar')

    <br>
    <br>


    <!-- SGV de la Seccion de los SVG Icons - Botón de Cambio de Tema -->
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

    <main class="container">
        <!-- Div del Bienvenidos y la imagen -->
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary" style="display: flex; flex-direction:row; ">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic" style="color:#b8860b">¡Bienvenidos a Converge!</h1>
                <p class="lead my-3">
                    Nos alegra que te unas a nuestra comunidad de información. En Converge, estamos comprometidos a
                    ofrecerte las noticias más actuales, relevantes y confiables del panorama global. Ya sea política,
                    economía, tecnología, entretenimiento o deportes, nuestro objetivo es mantenerte bien informado y al
                    tanto de los acontecimientos más importantes del momento.

                    Aquí, no solo reportamos noticias, también fomentamos el diálogo y la reflexión. Queremos ser tu
                    fuente de información confiable y tu espacio para el intercambio de ideas.

                    Gracias por confiar en nosotros para mantenerte informado. ¡Vamos a converger en la verdad y el
                    conocimiento!.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-4 text-center" style="margin-left:10%; margin-top:10%; height:200px;">
                <div class="Converge-div-logo">
                    <img id="VerIniciobtn" src="../img/Converge.png" alt="Logotipo Converge" class="img-fluid" />
                </div>
            </div>
        </div>
        <br>
        <div class="container py-1">
            <hr>
        </div>
        <!-- Card-slider Recomendados -->
        <h3 class="display-4 fst-italic">Tendencia</h3>

        <!-- Botón para crear noticia -->
        @can('Crear Noticias')
            <div class="container text-center">
                <button type="button" class="btn btn-outline-primary p-2" style="--bs-bg-opacity: .5;"
                    data-bs-toggle="modal" data-bs-target="#create">
                    Crear Noticia
                </button>
            </div>
        @endcan
        <div class="row">
            @foreach ($Blog as $blogg)
                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $blogg->opcion }}</strong>
                                <p class="d-inline-block mb-2 text-emphasis">{{ $blogg->nombre_noticia }}</p>
                                <div class="dropdown">
                                    @if (Auth::check() && (Auth::user()->can('Editar Noticias') || Auth::user()->can('Eliminar Noticias')))
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton{{ $blogg->id }}" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu"
                                            aria-labelledby="dropdownMenuButton{{ $blogg->id }}">
                                            @can('Editar Noticias')
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#edit{{ $blogg->id }}">Editar</button>
                                                </li>
                                            @endcan
                                            @can('Eliminar Noticias')
                                                <li>
                                                    <button type="button" class="dropdown-item"
                                                        data-noticia-id="{{ $blogg->id }}"
                                                        onclick="eliminarNoticia('{{ $blogg->id }}')">Eliminar</button>
                                                </li>
                                            @endcan
                                        </ul>
                                    @endif
                                </div>

                            </div>
                            <div class="container">
                                <img src="{{ asset('imagenesBlog/img/' . $blogg->foto) }}" class="img-fluid rounded"
                                    style="width: 250px; height: 250px;">
                            </div>
                            @if ($blogg->video)
                                <p>Haz clic en "Mas información" para ver el video</p>
                            @endif
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $blogg->id }}">
                                Mas información
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal{{ $blogg->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $blogg->nombre_noticia }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <hr>
                                    @if ($blogg->video)
                                        <video id="video{{ $blogg->id }}" width="100%" controls>
                                            <source src="{{ asset($blogg->video) }}" type="video/mp4">
                                            Tu navegador no soporta el elemento de video.
                                        </video>
                                    @else
                                        <img src="{{ asset('imagenesBlog/img/' . $blogg->foto) }}"
                                            alt="Imagen actual" style="max-width: 100%;">
                                    @endif
                                </div>
                                <hr>
                                <p> Descripcion: <br>{{ $blogg->descripcion_noticia }}</p>
                                <p>Fecha de Creación: {{ $blogg->created_at }}</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



                <script>
                    // Función para manejar errores de carga de video
                    document.addEventListener('DOMContentLoaded', function() {
                        var video = document.getElementById('video{{ $blogg->id }}');
                        if (video) {
                            video.addEventListener('error', function() {
                                var errorMessage = document.createElement('p');
                                errorMessage.textContent = 'El video no se puede cargar.';
                                video.parentNode.insertBefore(errorMessage, video.nextSibling);
                            });
                        }
                    });
                </script>

                @include('sistema.blog.editar')
            @endforeach
        </div>

        @include('sistema.blog.create')
    </main>

    <main class="container-just">
        <!-- Sección del Contenedor del footer -->
        <div class="container-fluid flex-grow-1">
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3" style="color:#b8860b">Explora más</h1>
                    <p class="lead mb-0">Descubre contenido fascinante en nuestro blog.</p>
                    <p class="lead py-3">Diseñado con cariño para ti. ¡Disfruta de la lectura!</p>
                </div>
            </div>
        </div>

        @include('sistema.CGV.includes.footer')

    </main>


    <!-- Seccion de js funcionalidades -->
    <script src="../js/code.jquery.com_jquery-3.7.1.js"></script>
    <script src="../js/cdnjs.cloudflare.com_ajax_libs_lightslider_1.1.6_js_lightslider.min.js"></script>
    <script src="../js/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_js_bootstrap.bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src="../js/script.js"></script>
    <script>
        function eliminarNoticia(idNoticia) {
            Swal.fire({
                title: '¿Confirmar eliminación?',
                text: 'Estás a punto de eliminar la noticia.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Define la URL de la solicitud DELETE utilizando la ruta con nombre
                    const url = `{{ route('blogs.destroy', ':id') }}`.replace(':id', idNoticia);

                    // Realiza una solicitud DELETE usando Fetch API
                    fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then(response => {
                        if (response.ok) {
                            // Redirige a la ruta /V2 después de eliminar
                            window.location.href = '/Blog';
                        } else {
                            // Muestra un mensaje de error si la eliminación no fue exitosa
                            Swal.fire({
                                icon: 'success',
                                title: 'Eliminación correcta',
                                text: 'La noticia se eliminó correctamente.'
                            });
                            window.location.reload();
                        }
                    }).catch(error => {
                        console.error(error);
                        // Muestra un mensaje de error si hay un problema con la solicitud
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al eliminar la noticia',
                            text: 'Hubo un problema al intentar eliminar la noticia.'
                        });
                    });
                }
            });
        }
    </script>


</body>

</html>
