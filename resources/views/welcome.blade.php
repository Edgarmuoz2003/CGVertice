<html lang="es">

<head>
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
</head>

<body class="fondo">

    @include('sistema.CGV.includes.navbar')
    @include('sistema.CGV.includes.boton')


    <div class="container-fluid">
        <section class="Above-the-Fold">
            <div class="content">
                <div class="container" style="padding-right:5%;">
                    <div class="textBox" style="margin-left:10%;">
                        <h2>
                            <span style="color:  #b8860b;">Trabajamos</span> por
                            <br>la <span style="color: #b8860b;">tranquilidad</span> de los <span
                                style="color:  #b8860b;">empresarios.</span>
                        </h2>
                        <p>
                            En Vértice, nos dedicamos a salvaguardar la tranquilidad de los empresarios. Nuestro
                            compromiso se centra en brindar soluciones que alivien las preocupaciones diarias de quienes
                            dirigen empresas. Desde asesoramiento estratégico hasta servicios especializados, trabajamos
                            incansablemente para crear un entorno empresarial donde la paz mental y la confianza sean la
                            norma. Tu tranquilidad es nuestra prioridad, porque sabemos que cuando los empresarios se
                            sienten seguros, pueden alcanzar su máximo potencial y hacer crecer sus negocios con
                            confianza y serenidad.
                        </p>
                    </div>
                </div>
                <div class="mt-5 mb-4 zoom-effect">
                    <img src="/img/DD.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="Imagn"
                        width="800px" height="600px" />
                </div>
            </div>
        </section>
    </div>

    @include('sistema.CGV.includes.tabsQuienessomos')

    @include('sistema.CGV.includes.serviciosTeaser')

    <br><br>

    @include('sistema.CGV.includes.sliderProductos')

    <br><br>

    @include('sistema.CGV.includes.noticiasBlogCartasSticky')

    <br><br>

    <div class="container">
        <div class="col-md-4">
            <div class="text-center">
                <div style="position: relative; width: 300%; padding-top: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0860002137592!2d-75.59203859023458!3d6.252398893709935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429091a87d505%3A0xf032d899690661de!2sCra.%2071%20%2346-28%2C%20Laureles%20-%20Estadio%2C%20Medell%C3%ADn%2C%20Laureles%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1693585283630!5m2!1ses-419!2sco"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <br>

    @include('sistema.CGV.includes.sliderGrandAliados')

    @include('sistema.CGV.includes.footer')
</body>

</html>
