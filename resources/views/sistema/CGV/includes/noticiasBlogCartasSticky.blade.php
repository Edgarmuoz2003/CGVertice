<div class="container">
    <h3 class="text" style="color:#b8860b">Converge Noticias</h3>
    <hr>
    <!-- Div del carrusel con las noticias Destacado -->
    @can('Crear Noticias')
            <div class="container text-center">
                <button type="button" class="btn btn btn-outline-warning m-4"
                    data-bs-toggle="modal" data-bs-target="#create">
                    Crear Noticia
                </button>
            </div>
        @endcan
        <div class="row">
            @foreach ($Blog as $blogg)
                <div class="col-sm-4 col-lg-4 mb-3">
                    {{-- cardBlog (Buscar así tal cual en el archivo de css) --}}
                    <div class="cardBlog">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong class="d-inline-block mb-2">{{ $blogg->opcion }}</strong>
                                <p class="d-inline-block mb-2 text-emphasis" style="color: #b8860b">{{ $blogg->nombre_noticia }}</p>
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
                            <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal"
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
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="padding-left:7%;">
            <!-- item activo del carrusel con las noticias Destacado -->
            <div class="carousel-item active">
                <div class="row mb-2">
                    <!-- Primera noticia del carrusel con las noticias Destacado -->
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">¿Por qué nos cuesta tomar decisiones?</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    ¡Únete a nuestro reto HOY DECIDO!
                                    En momentos de incertidumbre, tomar decisiones puede ser desafiante. ¿Te gustaría descubrir por qué y aprender estrategias para tomar decisiones asertivas?
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yd4S5qUNuMw?si=OvRZo7eIiFTWhL85" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">Formación para el trabajo y el desarrollo humano</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    ¡Descubre las ETDH de la mano de la rectora de COMPUEDU!
                                    ¿Interesado en conocer los fundamentos de las ETDH Estrategias de Transformación Digital en las Empresas? Únete a nosotros y explora junto a la rectora de COMPUEDU los procesos de prácticas.
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4s8hv1ccXkQ?si=qoWsebdDwbeaHBIy" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Siguiente item del carrusel con las noticias Destacado -->
            <div class="carousel-item">
                <div class="row mb-2">
                    <!-- Primera noticia del carrusel con las noticias Destacado -->
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">Darte por Vencido o darle una oportunidad a tu empresa?</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    "Descubre con el Abogado William Zapata cómo las leyes de insolvencia pueden salvar tus proyectos empresariales. Aprende sobre la insolvencia, su gestión y la caducidad de deudas. ¡No te pierdas esta oportunidad de fortalecer tu negocio!"
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mzY32px4SWE?si=lyDhE7kxD3gI7PTL" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">Mediciones y emisiones ambientales</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    ¡¡Descubre las mediciones ambientales con Diagnóstico Ambiental y el Ingeniero Alexander Cubaque López! En este video, exploraremos cómo estas mediciones impactan en temas como empresas, salud laboral, convivencia y más. No te pierdas esta oportunidad de aprender de un experto en el campo. ¡Haz clic para ver el video ahora mismo!
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mZIDY30c8Fk?si=l_Cho0cFl2BPN5qR" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercer item del carrusel con las noticias Destacado -->
            <div class="carousel-item">
                <div class="row mb-2">
                    <!-- Primera noticia del carrusel con las noticias Destacado -->
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">De lo Legal a lo Social. Impactos de la Gestión en medio de la contingencia</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    ¡No te pierdas nuestro próximo video!
                                    Exploraremos cómo las decisiones gubernamentales impactan en la vida de las personas y empresas. Únete a la Abogada Andrea Iglesias y al Sociólogo Oscar Chaparro para descubrir más.
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jGUKMJxUyac?si=0rAV0Ye3CNYJypZk" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="col-md-10 p-4 d-flex flex-column position-static" style="border: #b8860b 1px solid; margin: auto;">
                                <strong class="d-inline-block mb-2 text-primary">Categoria</strong>
                                <h3 class="mb-0" style="color:#b8860b">Hacer empresa si se puede, pero con responsabilidad</h3>
                                <br>
                                <p class="card-text mb-auto">
                                    ¡No te pierdas el lanzamiento de Converge TV!
                                    Únete al primer programa diseñado por empresarios para empresarios, donde abordaremos tus necesidades de información, actualización y acompañamiento.
                                </p>
                                <br>
                                <!-- Video de la carta -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Rjkiawshj50?si=ZOJLg-Jqqzvsqf3z" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
</div>
