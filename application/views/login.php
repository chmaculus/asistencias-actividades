<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Club House</title>
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="login">
        <div class="panel-izquierdo">
            <img id="logo-dalvian" src="<?php echo base_url()."assets/images/club_house.png";?>">
            <input type=text placeholder="DNI" id="input-dni">
            <button id="enter" class="button-36" role="button">Ingresar</button>
        </div>

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
                <td><button><img id="limpiar" src="<?php echo base_url()."assets/images/delete-all.png";?>"></button></td>
                <td id="cero"><button>0</button></td>
                <td><button><img id="borrar" src="<?php echo base_url()."assets/images/borrar.png";?>"></button></td>
            </tr>
            <tr class="cuarta-fila">
                <th>Limpiar</td>
                    <th></td>
                        <th>Borrar</td>
                        </tr>
                    </table>
                </div>
                <img id="foca-logo" src="<?php echo base_url()."assets/images/logo-foca.png";?>">
            </body>
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

                $( "#limpiar" ).click(function() {
                    $( "#input-dni" ).val('');
                });

$( "#enter" ).click(function() {
    var dni =  $( "#input-dni" ).val();
    if(dni.toString().length == 8){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>clientes/consultaDNI",
            dataType: "json",
            data: {
                dni,
            },
            success:function(data){
                if(data != 0){
                    .ajax({
            type: "POST",
            url: "<?php echo base_url();?>clientes/consultaDNI",
            dataType: "json",
            data: {
                dni,
            },
            success:function(data){
                if(data != 0){
                    location.href = "<?php echo base_url();?>menu";
                }else{
                    alert("Documento no encontrado: "+ dni)
                    $( "#input-dni" ).val('');
                }
            },
        });
                    location.href = "<?php echo base_url();?>menu";
                }else{
                    alert("Documento no encontrado: "+ dni)
                    $( "#input-dni" ).val('');
                }
            },
        });
    }else{
        alert("El DNI ingresado no es valido");
    }
});

    //impide el ingreso de letras o caracteres por encima de 8 digitos
    $('#input-dni').keypress(function(event){
        var dni =  $( "#input-dni" ).val();
        if(event.which != 8 && isNaN(String.fromCharCode(event.which)) || dni.toString().length == 8){
            event.preventDefault();
        }
    });
</script>