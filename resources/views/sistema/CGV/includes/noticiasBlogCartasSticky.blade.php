<div class="container">
    <h3 class="text" style="color:#b8860b">Converge Noticias</h3>
    <hr>
    <!-- Div del carrusel con las noticias Destacado -->
    @can('Crear Noticias')
        <div class="container text-center">
            <button type="button" class="btn btn btn-outline-warning m-4" data-bs-toggle="modal" data-bs-target="#create">
                Crear Noticia
            </button>
        </div>
    @endcan
    <div class="ContainerBlogSecond">
        <div class="row">
            @foreach ($mainBlog as $blogg)
                <div class="col-lg-3 m-4">
                    {{-- cardBlog (Buscar así tal cual en el archivo de css) --}}
                    <div class="cardBlog">
                        <div class="CardNoticias">
                            <strong class="CategoriaNoticias">{{ $blogg->opcion }}</strong>
                        </div>
                        <div class="imgcontainer">
                            <img src="{{ asset('imagenesBlog/img/' . $blogg->foto) }}" class="img-fluid rounded">
                        </div>
                        <p class="NombreNoticias">{{ $blogg->nombre_noticia }}</p>
                        <div class="CardBlogBtn">
                            <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $blogg->id }}">
                                Más información
                            </button>
                            <div class="btndropdown">
                                @if (Auth::check() && (Auth::user()->can('Editar Noticias') || Auth::user()->can('Eliminar Noticias')))
                                    <button class="btn btn-warning" type="button"
                                        id="dropdownMenuButton{{ $blogg->id }}" data-bs-toggle="dropdown">
                                        Editar<i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $blogg->id }}">
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
                    </div>
                </div>
                <div class="modal fade" id="exampleModal{{ $blogg->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $blogg->nombre_noticia }}</h1>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal"aria-label="Close"></button>
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
                                        <img src="{{ asset('imagenesBlog/img/' . $blogg->foto) }}" alt="Imagen actual"
                                            style="max-width: 100%;">
                                    @endif
                                </div>
                                <hr>
                                <p> Descripcion: <br> {{ $blogg->descripcion_noticia }}</p>
                                <p>Fecha de publicación: {{ $blogg->created_at }}</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    </div>


    @include('sistema.blog.create')
</div>
