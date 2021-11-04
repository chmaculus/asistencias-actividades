<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Club House</title>
    <link rel="stylesheet" href="login.css">
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <img id="logo-dalvian" src="<?php echo base_url()."assets/images/club_house.png";?>" width="100" height="100">
    <div class="login">
        <input placeholder="DNI" id="input-dni" type="number" maxlength="8">

        <table class="teclado-numerico">
            <tr class="primera-fila">
                <td id="numero-1"><button id="uno">1</button></td>
                <td id="dos"><button>2</button></td>
                <td id="tres"><button>3</button></td>
            </tr>

            <tr class="segunda-fila">
                <td id="cuatro"><button>4</button></td>
                <td id="cinco"><button>5</button></td>
                <td id="seis"><button>6</button></td>
            </tr>

            <tr class="tercera-fila">
                <td id="siete"><button>7</button></td>
                <td id="ocho"><button>8</button></td>
                <td id="nueve"><button>9</button></td>
            </tr>

            <tr class="cuarta-fila">
                <td><button><img id="borrar" src="<?php echo base_url()."assets/images/borrar.png";?>" width="100" height="100"></button></td>
                <td id="cero"><button>0</button></td>
                <td><button><img id="enter" src="<?php echo base_url()."assets/images/enter.png";?>" width="100" height="100"></button></td>
            </tr>
            <tr class="cuarta-fila">
                <th>Borrar</td>
                <th></td>
                <th>Aceptar</td>
            </tr>
        </table>
    </div>
    
</body>
<img id="foca-logo" src="<?php echo base_url()."assets/images/logo-foca.png";?>" width="100" height="100">
</html>

<script>
    $( "#uno" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 1);
        }
    });    

    $( "#dos" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 2);
        }
    });

    $( "#tres" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 3);
        }
    });

    $( "#cuatro" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 4);
        }
    });

    $( "#cinco" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 5);
        }
    });

    $( "#seis" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 6);
        }
    });

    $( "#siete" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 7);
        }
    });

    $( "#ocho" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 8);
        }
    });

    $( "#nueve" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 9);
        }
    });

    $( "#cero" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length < 8){
        $( "#input-dni" ).val(dni + 0);
        }
    });

    $( "#borrar" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        dni = dni.slice(0, -1);
        $( "#input-dni" ).val(dni);
    });

    $( "#enter" ).click(function() {
        var dni =  $( "#input-dni" ).val();
        if(dni.toString().length == 8){
            location.href = "http://10.231.45.108/asistencias-actividades/seleccion1";
        }else{
            alert("El DNI ingresado no es valido");
        }
    });

</script>