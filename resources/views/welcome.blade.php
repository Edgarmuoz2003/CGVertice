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

    @include('sistema.CGV.includes.mapa')

    <br>

    @include('sistema.CGV.includes.sliderGrandAliados')

    @include('sistema.CGV.includes.footer')
</body>

</html>
