<?php 
include("clientes_base.php");
?>

<form method="post" action="<?php echo base_url(); ?>admin/clientes/grabar" name="form_clientes_dalvian">

<center>
<table class="t1" border="1">
	<tr>
		<th>Codigo Residente</th>
		<td><input type="text" name="codigo_residente" id="codigo_residente" value="<?php if(isset($data[0]["codigo_cliente"])){echo $data[0]["codigo_cliente"];}?>" size="8"></td>
	</tr>
	<tr>
		<th>Codigo Facturacion</th>
		<td><input type="text" name="codigo_facturacion" id="codigo_facturacion" value="<?php if(isset($data[0]["codigo_cliente"])){echo $data[0]["codigo_cliente"];}?>" size="8"></td>
	</tr>
	<tr>
		<th>Apellido</th>
		<td><input type="text" name="apellido" id="apellido" value="<?php if(isset($data[0]["apellido"])){echo $data[0]["apellido"];}?>" size="30"></td>
	</tr>
	<tr>
		<th>Nombres</th>
		<td><input type="text" name="nombres" id="nombres" value="<?php if(isset($data[0]["nombres"])){echo $data[0]["nombres"];}?>" size="30"></td>
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
		<td><input type="text" name="numero_documento" id="numero_documento" value="<?php if(isset($data[0]["numero_documento"])){echo $data[0]["numero_documento"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Manzana</th>
		<td><input type="text" name="manzana" id="manzana" value="<?php if(isset($data[0]["manzana"])){echo $data[0]["manzana"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>Casa</th>
		<td><input type="text" name="casa" id="casa" value="<?php if(isset($data[0]["casa"])){echo $data[0]["casa"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>Calle</th>
		<td><input type="text" name="calle" id="calle" value="<?php if(isset($data[0]["calle"])){echo $data[0]["calle"];}?>" size="25"></td>
	</tr>
	<tr>
		<th>Numero</th>
		<td><input type="text" name="numero" id="numero" value="<?php if(isset($data[0]["numero"])){echo $data[0]["numero"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Piso</th>
		<td><input type="text" name="piso" id="piso" value="<?php if(isset($data[0]["piso"])){echo $data[0]["piso"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Dpto</th>
		<td><input type="text" name="dpto" id="dpto" value="<?php if(isset($data[0]["dpto"])){echo $data[0]["dpto"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>C.P.</th>
		<td><input type="text" name="cod_postal" id="cod_postal" value="<?php if(isset($data[0]["cod_postal"])){echo $data[0]["cod_postal"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Telefono</th>
		<td><input type="text" name="telefono" id="telefono" value="<?php if(isset($data[0]["telefono"])){echo $data[0]["telefono"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>E-Mail</th>
		<td><input type="text" name="email" id="email" value="<?php if(isset($data[0]["email"])){echo $data[0]["email"];}?>" size="10"></td>
	</tr>

<!-- 
	<tr>
		<th>Imagen</th>
		<? /*php if(isset($data[0]["email"])){echo $data[0]["email"];} */?>
		<td><input type="file" name="imagen" id="imagen" value="" size="10"></td>
	</tr>
-->

	<tr>
		<th>Observaciones</th>
			<td><textarea name="observaciones" id="observaciones" rows="10" cols="33"><?php if(isset($data[0]["observaciones"])){echo $data[0]["observaciones"];}?></textarea></td>	
		</tr>

</table>

<br>
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
