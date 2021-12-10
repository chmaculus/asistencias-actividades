<?php 
include("index.php");

if($_GET["id_clientes_dalvian"]){
include("../includes/connect.php");
	$q='select * from clientes_dalvian where id="'.$_GET["id_clientes_dalvian"].'"';
	//echo $q."<br>";
	$data=mysql_fetch_array(mysql_query($q));

}


?>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form_clientes_dalvian").addEventListener('submit', validarFormulario); 
  });

  function validarFormulario(evento) {
    evento.preventDefault();

    var codigo_facturacion = document.getElementById('codigo_facturacion').value;
    if(codigo_facturacion.length < 2) {
      alert('El campo Codigo de facturacion debe ser valido');
      return;
    }

    var apellido = document.getElementById('apellido').value;
    if (apellido.length < 4) {
      alert('El campo Apellido debe ser valido');
      return;
    }

    var nombres = document.getElementById('nombres').value;
    if (nombres.length < 4) {
      alert('El campo Nombres debe ser valido');
      return;
    }

    var numero_documento = document.getElementById('numero_documento').value;
    if (numero_documento.length < 7) {
      alert('Debe ingresar un numero de documento valido');
      return;
    }

    var telefono = document.getElementById('telefono').value;
    if (telefono.length < 4) {
      alert('El campo Telefono debe ser valido');
      return;
    }

    this.submit();
  }

function trae_datos() {
        var codigo_facturacion = '';
        codigo_facturacion = document.getElementById('codigo_facturacion').value;
        console.log("trae_datos");

        $.ajax({
            type: "POST",
            url: "trae_datos_cliente.php",
            dataType: "json",
            data: {
                codigo_facturacion: codigo_facturacion
            },
            success:function(data){
            	console.log("data: " + JSON.stringify(data));
            	console.log(data.COD);
            	$("#manzana").val(data.MZNA);
            	$("#casa").val(data.CASA);
            	$("#titular").val(data.NOM);
            },
        });

}

</script>

<!--  
<form>
		<label>Código de Residente</label>
		<input type="text" name="codigo_facturacion" id="codigo_facturacion" value="<?php if(isset($data["codigo_facturacion"])){echo $data["codigo_facturacion"];}?>" size="8">
		<button onclick="trae_datos();">Traer datos</button><br>
</form>
-->

<form method="post" action="clientes_update.php" id="form_clientes_dalvian" class="formulario_cliente">

	<div class="datos_persona">

		<label>Código de Residente</label>
		<input type="text" name="codigo_facturacion" id="codigo_facturacion" value="<?php if(isset($data["codigo_facturacion"])){echo $data["codigo_facturacion"];}?>" size="8" onchange="trae_datos();">

		<label>Titular</label>
		<input type="text" name="titular" id="titular" value="<?php if(isset($data["titular"])){echo $data["titular"];}?>" size="30" readonly="readonly"><br>

		<label>Apellido</label>
		<input type="text" name="apellido" id="apellido" value="<?php if(isset($data["apellido"])){echo $data["apellido"];}?>" size="30"><br>

		<label>Nombre Completo</label>
		<input placeholder="Nombres" type="text" name="nombres" id="nombres" value="<?php if(isset($data["nombres"])){echo $data["nombres"];}?>" size="30"><br>

		<label>Tipo Documento</label>
		<select name="tipo_documento">
		<option value="DNI" label="DNI"></option>
		<option value="Extranjero" label="Extranjero"></option>
		<option value="Pasaporte" label="Pasaporte"></option>
		</select>

		<label>Numero documento</label>
		<input type="number" placeholder="Sin puntos" name="numero_documento" id="numero_documento" value="<?php if(isset($data["numero_documento"])){echo $data["numero_documento"];}?>" size="10"><br>

		<label>Teléfono</label>
		<input type="text" name="telefono" id="telefono" value="<?php if(isset($data["telefono"])){echo $data["telefono"];}?>" size="20"><br>

		<label>E-Mail</label>
		<input type="text" name="email" id="email" value="<?php if(isset($data["email"])){echo $data["email"];}?>" size="30"><br>


	</div>

	<div class="datos_direccion">

		<label>Manzana</label>
		<input type="text" name="manzana" id="manzana" value="<?php if(isset($data["manzana"])){echo $data["manzana"];}?>" size="5"><br>

		<label>Casa</label>
		<input type="text" name="casa" id="casa" value="<?php if(isset($data["casa"])){echo $data["casa"];}?>" size="5"><br>

		<label>Calle</label>
		<input type="text" name="calle" id="calle" value="<?php if(isset($data["calle"])){echo $data["calle"];}?>" size="25"><br>

		<label>Número</label>
		<input type="text" name="numero" id="numero" value="<?php if(isset($data["numero"])){echo $data["numero"];}?>" size="10"><br>

		<label>Piso</label>
		<input type="text" name="piso" id="piso" value="<?php if(isset($data["piso"])){echo $data["piso"];}?>" size="10"><br>

		<label>Dpto</label>
		<input type="text" name="dpto" id="dpto" value="<?php if(isset($data["dpto"])){echo $data["dpto"];}?>" size="10"><br>

		<label>Código Postal</label>
		<input type="text" name="cod_postal" id="cod_postal" value="<?php if(isset($data["cod_postal"])){echo $data["cod_postal"];}?>" size="10"><br>


	</div>

	

	<div class="pie">
		<fieldset>
			<legend>Observaciones</legend>
		<textarea name="observaciones" id="observaciones" rows="10" cols="33"><?php if(isset($data["observaciones"])){echo $data["observaciones"];}?></textarea><br>
		</fieldset>

		<input type="hidden" name="accion" value="ingreso"><br>
		<input id="button_aceptar" type="submit" name="ACEPTAR" value="ACEPTAR">

	</div>
		
</form>