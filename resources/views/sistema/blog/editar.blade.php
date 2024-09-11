<div class="modal fade" id="edit{{$blogg->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl"> <!-- Modificado: Agregado modal-xl para hacerlo aún más grande -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Noticia - {{$blogg->nombre_noticia}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('blogs.update', $blogg->id) }}" method="post" enctype="multipart/form-data" id="editarNoticiaForm{{$blogg->id}}">
                @csrf
                @method('PUT')
                <div class="modal-body row">
                    <!-- Columna izquierda para la imagen -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="NombreE" class="form-label">Nombre de la noticia</label>
                            <input type="text" class="form-control" name="NombreE" id="NombreE" aria-describedby="helpId" value="{{ $blogg->nombre_noticia }}" required maxlength="255" oninput="validarNombreE()">
                            <small class="text-danger" id="errorNombre"></small>
                        </div>
                        <div class="mb-3">
                            <label for="ImagenE" class="form-label">Imagen actual</label>
                            <img src="{{ asset('imagenesBlog/img/' . $blogg->foto) }}" alt="Imagen actual" style="max-width: 100%;">
                        </div>
                        <div class="mb-3">
                            <label for="ImagenE" class="form-label">Seleccionar nueva imagen</label>
                            <input type="file" class="form-control" name="ImagenE" id="ImagenE" accept="image/*" onchange="validarImagenE()">
                            <small class="text-danger" id="errorImagen"></small>
                        </div>
                        <div class="mb-3">
                            <label for="DescripcionE" class="form-label">Descripción</label>
                            <textarea class="form-control" name="DescripcionE" id="DescripcionE" rows="3" required oninput="validarDescripcionE()">{{ $blogg->descripcion_noticia }}</textarea>
                            <small class="text-danger" id="errorDescripcion"></small>
                        </div>
                        <div class="mb-3">
                            <label for="OpcionE" class="form-label">Opción</label>
                            <select class="form-select" name="OpcionE" id="OpcionE" required onchange="validarOpcionE()">
                                <option value="">Selecciona una Opción</option>
                                <option value="Noticias de Actualidad" {{ $blogg->opcion == 'Noticias de Actualidad' ? 'selected' : '' }}>Noticias de Actualidad</option>
                                <option value="Consultas Normativas" {{ $blogg->opcion == 'Consultas Normativas' ? 'selected' : '' }}>Consultas Normativas</option>
                                <option value="Publicaciónes Recientes" {{ $blogg->opcion == 'Publicaciónes Recientes' ? 'selected' : '' }}>Publicaciónes Recientes</option>
                            </select>
                            <small class="text-danger" id="errorOpcion"></small>
                        </div>
                    </div>
                    <!-- Columna derecha para el video -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="VideoE" class="form-label">Video actual</label>
                            @if ($blogg->video)
                            <video width="100%" controls>
                            <source src="{{ asset($blogg->video) }}" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>
                            @else
                            <p>No hay video disponible</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="VideoE" class="form-label">Seleccionar nuevo video</label>
                            <input type="file" class="form-control" name="VideoE" id="VideoE" accept="video/mp4,video/mpeg,video/quicktime">
                            <small class="text-danger" id="errorVideo"></small>
                        </div>
                        <div class="mb-3">
                            <label for="AutorE" class="form-label">Autor</label>
                            <input type="text" class="form-control" name="AutorE" id="AutorE" aria-describedby="helpId" value="{{ $blogg->autor }}" required maxlength="255" oninput="validarAutorE()">
                            <small class="text-danger" id="errorAutor"></small>
                        </div>
                        <div class="mb-3">
                            <label for="UrlE" class="form-label">URL</label>
                            <input type="url" class="form-control" name="UrlE" id="UrlE" aria-describedby="helpId" value="{{ $blogg->url }}" required oninput="validarUrlE()">
                            <small class="text-danger" id="errorUrl"></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-warning" onclick="validarFormularioEdicion('{{ $blogg->id }}')">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function validarAutorE() {
        var autor = document.getElementById('AutorE').value.trim();
        var errorAutor = document.getElementById('errorAutor');
        if (autor.length === 0) {
            errorAutor.textContent = 'El nombre del autor es obligatorio';
        } else {
            errorAutor.textContent = '';
        }
    }

    function validarUrlE() {
        var url = document.getElementById('UrlE').value.trim();
        var errorUrl = document.getElementById('errorUrl');
        var regexUrl = /^(https?:\/\/)?([\w\-])+\.{1}([a-zA-Z]{2,63})([\w\-\._~:/?#[\]@!$&'()*+,;=.]+)?$/;
        if (url.length === 0) {
            errorUrl.textContent = 'La URL es obligatoria';
        } else if (!regexUrl.test(url)) {
            errorUrl.textContent = 'Debes ingresar una URL válida';
        } else {
            errorUrl.textContent = '';
        }
    }

    function validarFormularioEdicion(id) {
        validarNombreE();
        validarImagenE();
        validarVideoE();
        validarDescripcionE();
        validarOpcionE();
        validarAutorE();  // Validar Autor
        validarUrlE();     // Validar URL

        var errorNombre = document.getElementById('errorNombre').textContent;
        var errorImagen = document.getElementById('errorImagen').textContent;
        var errorVideo = document.getElementById('errorVideo').textContent;
        var errorDescripcion = document.getElementById('errorDescripcion').textContent;
        var errorOpcion = document.getElementById('errorOpcion').textContent;
        var errorAutor = document.getElementById('errorAutor').textContent;
        var errorUrl = document.getElementById('errorUrl').textContent;

        if (errorNombre === '' && errorImagen === '' && errorVideo === '' && errorDescripcion === '' && errorOpcion === '' && errorAutor === '' && errorUrl === '') {
            document.getElementById('editarNoticiaForm' + id).submit();
        }
    }
</script>
