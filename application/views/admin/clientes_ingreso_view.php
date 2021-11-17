<?php 
include("clientes_base.php");
?>

<form method="post" action="<?php echo base_url(); ?>admin/clientes/grabar" name="form_clientes_dalvian">

<center>
<table class="t1" border="1">
	<tr>
		<th>Codigo Residente</th>
		<td><input type="text" name="codigo_residente" id="codigo_residente" value="<?php if(isset($data["codigo_cliente"])){echo $data["codigo_cliente"];}?>" size="8"></td>
	</tr>
	<tr>
		<th>Codigo Facturacion</th>
		<td><input type="text" name="codigo_facturacion" id="codigo_facturacion" value="<?php if(isset($data["codigo_cliente"])){echo $data["codigo_cliente"];}?>" size="8"></td>
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
		<td><input type="text" name="numero_documento" id="numero_documento" value="<?php if(isset($data["numero_documento"])){echo $data["numero_documento"];}?>" size="10"></td>
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
		<td><input type="text" name="telefono" id="telefono" value="<?php if(isset($data["telefono"])){echo $data["telefono"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>E-Mail</th>
		<td><input type="text" name="email" id="email" value="<?php if(isset($data["email"])){echo $data["email"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>Observaciones</th>
			<td><textarea name="observaciones" id="observaciones" rows="10" cols="33"><?php if(isset($data["observaciones"])){echo $data["observaciones"];}?></textarea></td>	
		</tr>

</table>

<?php
/*
if($_GET["id_clientes_dalvian"] OR $data["id"]){
    echo '<input type="hidden" name="accion" value="modificacion">';
    echo '<input type="hidden" name="id_clientes_dalvian" value="'.$data["id"].'">';
    echo '<input type="hidden" name="uuid_clientes_dalvian" value="'.$data["uuid"].'">';
}else{
    echo '<input type="hidden" name="accion" value="ingreso">';
}
*/
?>
<br>
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
