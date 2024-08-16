<!-- resources/views/includes/back-to-top.blade.php -->
<button onclick="topFunction()" id="backToTopBtn" class="btn btn-warning">
    <i class="fas fa-arrow-up"></i>
</button>

<style>
    #backToTopBtn {
        position: fixed;
        bottom: 20px;
        left: 20px; /* Cambiado a la izquierda */
        display: none; /* Inicialmente oculto */
        z-index: 99; /* Para que esté sobre otros elementos */
        border: none;
        outline: none;
        cursor: pointer;
        padding: 15px;
        border-radius: 50%;
        font-size: 24px;
        height: 50px;
    }

    #backToTopBtn:hover {
        background-color: #555; /* Cambiar el color al pasar el mouse */
        
    }

    #backToTopBtn i {
        color: white; /* Color del icono */
    }

    #backToTopBtn i {
        color: white; /* Color del icono */
    }
</style>

<script>
    // Mostrar el botón cuando el usuario hace scroll hacia abajo 20px desde la parte superior
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        const btn = document.getElementById("backToTopBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    }

    // Cuando el usuario haga clic en el botón, desplazarse hasta la parte superior de la página
    function topFunction() {
        document.body.scrollTop = 0; // Para Safari
        document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }
</script>
