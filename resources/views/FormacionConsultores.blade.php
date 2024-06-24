<!DOCTYPE html>

<html lang="es">

<head>

    <title>Formación de Consultores || Corporate Group Vértice</title>

    @include('sistema.CGV.includes.head')

</head>

<style>
    .custom-purple-border {
        border-color: #8a2be2;
        /* Código hexadecimal para el color púrpura */
    }

    .custom-light-bg {
        background-color: #b48b8b;
        /* Código hexadecimal para un tono más claro */
    }
</style>

<body style="background-color: #fff">

    @include('CGV/includes/navbar')

    <!-- Otras secciones del sitio -->

    <main class="container">
        <!-- div con el contenedor donde esta la gran mayoria del contenido de la pagina. -->
        <div class="row">
            <!-- Div col-md-8 con el contenido que esta en el centro de la pagina. -->
            <div class="col-md-9 mx-auto border border-primary text-black">
                <p>
                    Sección 1: <br>
                    Información General <br>
                    -Duración del Curso <br>
                    -Modalidad (Presencial, Virtual, etc.) <br>
                    -Horario y Días de Clases <br>
                    -Sobre el Programa <br>
                    -Razones para Elegir Este Programa-Audiencia Objetivo <br>
                    -Objetivos del Programa <br>
                    -Objetivo General <br>
                    -Objetivos Específicos.
                </p>
            </div>
            <div class="col-md-3 border border-secondary">
                <form class="container border rounded p-3 custom-purple-border custom-light-bg">
                    <div class="container-just text-center">
                        <h5 class="mb-4 mt-3 text-dark">¡Déjanos tus datos y te contactaremos!</h5>
                    </div>
                    <div class="mb-3">
                        <label for="nombreCompleto" class="form-label text-dark">Nombre completo</label>
                        <input type="text" class="form-control bg-light text-dark" id="nombreCompleto" required>
                    </div>
                    <div class="mb-3">
                        <label for="correoElectronico" class="form-label text-dark">Correo electrónico</label>
                        <input type="email" class="form-control bg-light text-dark" id="correoElectronico" required>
                    </div>
                    <div class="mb-3">
                        <label for="celularFijo" class="form-label text-dark">Celular o fijo</label>
                        <input type="tel" class="form-control bg-light text-dark" id="celularFijo" required>
                    </div>
                    <div class="mb-3">
                        <label for="comentario" class="form-label text-dark">Comentario...</label>
                        <textarea class="form-control bg-light text-dark" id="comentario" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <p class="small text-dark">Al enviar tus datos, aceptas nuestra <a href="#">política de
                                privacidad</a>.</p>
                    </div>
                    <div class="container-just text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="d-flex align-items-start border border-success">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <div class="container">
                    <h5 class="text-black">Ten en cuenta</h5>
                    <hr>
                </div>

                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">Políticas y Procedimientos</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">Contenido del Curso</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">Logística</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab" tabindex="0">
                    <p class="text-black">
                        Sección 2: Políticas y Procedimientos:<br>
                        <br>
                        Políticas de Descuentos<br>
                        Condiciones de Finalización y Certificación<br>
                        Fechas de Inicio y Finalización del Curso<br>
                    </p>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                    tabindex="0">
                    <p class="text-black">
                        Contenido del Curso:<br>

                        Temas y Módulos<br>
                        Introducción al Programa<br>
                        Rotación de Contenidos<br>
                        Proceso de Inscripción<br>
                        Facturación<br>
                        Empresarial<br>
                        Natural<br>
                    </p>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                    tabindex="0">
                    <p class="text-black">
                        Logística:<br>
                        Valor de la Inscripción<br>
                        Lugar de Realización<br>
                        Capacidad del Curso<br>
                    </p>
                </div>
            </div>
        </div>

    </main>


    <div class="container my-4">
        <div class="row text-center">
            <!-- Columna del mapa de Google -->
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

    @include('CGV/includes/sliderGrandAliados')

    <!-- Enlace de WhatsApp -->
    <div class="container text-center mt-3">
        <a href="https://wa.me/573147675259?text=Quiero%20mas%20informacion." target="_blank"
            rel="noopener noreferrer">
            <img src="img/whatsl.jpeg" alt="logo watsap" class="btn-wsp">
        </a>
    </div>

    @include('CGV/includes/footer')

</body>

</html>
