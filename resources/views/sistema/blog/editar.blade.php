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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-primary" onclick="validarFormularioEdicion('{{ $blogg->id }}')">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function validarNombreE() {
        var nombre = document.getElementById('NombreE').value.trim();
        var errorNombre = document.getElementById('errorNombre');
        if (nombre.length === 0) {
            errorNombre.textContent = 'El nombre de la noticia es obligatorio';
        } else {
            errorNombre.textContent = '';
        }
    }

    function validarImagenE() {
        var imagen = document.getElementById('ImagenE');
        var errorImagen = document.getElementById('errorImagen');
        if (imagen.files.length > 0 && !imagen.files[0].type.match('image.*')) {
            errorImagen.textContent = 'Debe seleccionar una imagen válida';
        } else {
            errorImagen.textContent = '';
        }
    }

    // Agregar validación de videoE
    function validarVideoE() {
        var video = document.getElementById('VideoE');
        var errorVideo = document.getElementById('errorVideo');
        if (video.files.length > 0 && !video.files[0].type.match('video.*')) {
            errorVideo.textContent = 'Debe seleccionar un video válido';
        } else {
            errorVideo.textContent = '';
        }
    }

    function validarDescripcionE() {
        var descripcion = document.getElementById('DescripcionE').value.trim();
        var errorDescripcion = document.getElementById('errorDescripcion');
        if (descripcion.length === 0) {
            errorDescripcion.textContent = 'La descripción es obligatoria';
        } else {
            errorDescripcion.textContent = '';
        }
    }

    function validarOpcionE() {
        var opcion = document.getElementById('OpcionE').value;
        var errorOpcion = document.getElementById('errorOpcion');
        if (opcion === '') {
            errorOpcion.textContent = 'Debes seleccionar una opción';
        } else {
            errorOpcion.textContent = '';
        }
    }

    function validarFormularioEdicion(id) {
        validarNombreE();
        validarImagenE();
        validarVideoE(); // Agregar validación de videoE
        validarDescripcionE();
        validarOpcionE();

        // Si no hay errores, enviar el formulario
        var errorNombre = document.getElementById('errorNombre').textContent;
        var errorImagen = document.getElementById('errorImagen').textContent;
        var errorVideo = document.getElementById('errorVideo').textContent; // Agregar errorVideo
        var errorDescripcion = document.getElementById('errorDescripcion').textContent;
        var errorOpcion = document.getElementById('errorOpcion').textContent;

        if (errorNombre === '' && errorImagen === '' && errorVideo === '' && errorDescripcion === '' && errorOpcion === '') {
            document.getElementById('editarNoticiaForm' + id).submit();
        }
    }
</script>