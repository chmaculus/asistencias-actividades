<?php 
include("index.php");

if($_GET["id_clientes_dalvian"]){
	include("../includes/connect.php");
	$q='select * from clientes_dalvian where id="'.$_GET["id_clientes_dalvian"].'"';
	echo $q."<br>";
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
</script>


<form method="post" action="clientes_update.php" id="form_clientes_dalvian">

<center>
<table class="t1" border="1">

	<tr>
		<th>Codigo Facturacion</th>
		<td><input type="text" name="codigo_facturacion" id="codigo_facturacion" value="<?php if(isset($data["codigo_facturacion"])){echo $data["codigo_facturacion"];}?>" size="8"></td>
	</tr>

	<tr>
		<th>Apellido</th>
		<td><input type="text" name="apellido" id="apellido" value="<?php if(isset($data["apellido"])){echo $data["apellido"];}?>" size="30"></td>
	</tr>
	<tr>
		<th>Nombres</th>
		<td><input type="text" name="nombres" id="nombres" value="<?php if(isset($data["nombres"])){echo $data["nombres"];}?>" size="30"></td>
	</tr>
	<tr>
		<th>Tipo Documento</th>
		<td>
			<select name="tipo_documento">
			<option value="DNI" label="DNI"></option>
			<option value="Extranjero" label="Extranjero"></option>
			<option value="Pasaporte" label="Pasaporte"></option>
			</select>
		</td>
	</tr>
	<tr>
		<th>Numero documento</th>
		<td><input type="text" name="numero_documento" id="numero_documento" value="<?php if(isset($data["numero_documento"])){echo $data["numero_documento"];}?>" size="10">Solo numeros sin puntos</td>
	</tr>
	<tr>
		<th>Manzana</th>
		<td><input type="text" name="manzana" id="manzana" value="<?php if(isset($data["manzana"])){echo $data["manzana"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>Casa</th>
		<td><input type="text" name="casa" id="casa" value="<?php if(isset($data["casa"])){echo $data["casa"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>Calle</th>
		<td><input type="text" name="calle" id="calle" value="<?php if(isset($data["calle"])){echo $data["calle"];}?>" size="25"></td>
	</tr>
	<tr>
		<th>Numero</th>
		<td><input type="text" name="numero" id="numero" value="<?php if(isset($data["numero"])){echo $data["numero"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Piso</th>
		<td><input type="text" name="piso" id="piso" value="<?php if(isset($data["piso"])){echo $data["piso"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Dpto</th>
		<td><input type="text" name="dpto" id="dpto" value="<?php if(isset($data["dpto"])){echo $data["dpto"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>C.P.</th>
		<td><input type="text" name="cod_postal" id="cod_postal" value="<?php if(isset($data["cod_postal"])){echo $data["cod_postal"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Telefono</th>
		<td><input type="text" name="telefono" id="telefono" value="<?php if(isset($data["telefono"])){echo $data["telefono"];}?>" size="20"></td>
	</tr>
	<tr>
		<th>E-Mail</th>
		<td><input type="text" name="email" id="email" value="<?php if(isset($data["email"])){echo $data["email"];}?>" size="30"></td>
	</tr>

<!-- 
	<tr>
		<th>Imagen</th>
		<? /*php if(isset($data["email"])){echo $data["email"];} */?>
		<td><input type="file" name="imagen" id="imagen" value="" size="10"></td>
	</tr>
-->

	<tr>
		<th>Observaciones</th>
			<td><textarea name="observaciones" id="observaciones" rows="10" cols="33"><?php if(isset($data["observaciones"])){echo $data["observaciones"];}?></textarea></td>	
		</tr>

</table>

<br>
<input type="hidden" name="accion" value="ingreso">
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
