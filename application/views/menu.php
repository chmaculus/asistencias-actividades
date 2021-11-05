<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="contendedor-menu">
   <div class="actividades-contenedor"><button id="actividades"><label class="titulo-menu">ACTIVIDADES</label></button></div> 
    <div class="clases-contenedor"><button id="clases"><label class="titulo-menu">CLASES</label></button></div>
    <div class="espacios-contenedor"><button id="espacios"><label class="titulo-menu">ESPACIOS</label></button></div>
</div>
<button id="atras"></button>
<img id="foca-logo" src="<?php echo base_url()."assets/images/logo-foca.png";?>">
</body>
</html>

<script>
    $( "#actividades" ).click(function() {
        location.href = "<?php echo base_url();?>actividades";
    });

    $( "#clases" ).click(function() {
        location.href = "<?php echo base_url();?>clases";
    });

    $( "#espacios" ).click(function() {
        location.href = "<?php echo base_url();?>espacios";
    });

    $( "#atras" ).click(function() {                
        location.href = "<?php echo base_url();?>index.php";
    });

</script>
