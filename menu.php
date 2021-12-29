<?php 
include("includes/cabecera.inc.php");
?>
<body>
<div class="contendedor-menu">
   <div class="actividades-contenedor"><button id="actividades"><label class="titulo-menu">ACTIVIDADES</label></button></div> 
    <div class="clases-contenedor"><button id="clases"><label class="titulo-menu">CLASES</label></button></div>
    <div class="espacios-contenedor"><button id="espacios"><label class="titulo-menu">ESPACIOS</label></button></div>
</div>
<button id="atras"></button>
<img id="foca-logo" src="./assets/images/logo-foca.png">
</body>
</html>

<script>
    $( "#actividades" ).click(function() {
        location.href = "./actividades.php";
    });
/*
    $( "#clases" ).click(function() {
        location.href = "./clases.php";
    });

    $( "#espacios" ).click(function() {
        location.href = "./espacios.php";
    });
*/
    $( "#atras" ).click(function() {                
        location.href = "./index.php";
    });

</script>
