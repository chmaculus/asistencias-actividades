<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Club House</title>
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
</head>

<form method="post" action="<?php echo base_url(); ?>admin/clientes_ingreso/grabar" name="form_clientes_dalvian">

<center>
<table class="t1" border="1">
	<tr>
		<th>codigo_cliente</th>
		<td><input type="text" name="codigo_cliente" id="codigo_cliente" value="<?php if(isset($data["codigo_cliente"])){echo $data["codigo_cliente"];}?>" size="8"></td>
	</tr>
	<tr>
		<th>apellido</th>
		<td><input type="text" name="apellido" id="apellido" value="<?php if(isset($data["apellido"])){echo $data["apellido"];}?>" size="30"></td>
	</tr>
	<tr>
		<th>nombres</th>
		<td><input type="text" name="nombres" id="nombres" value="<?php if(isset($data["nombres"])){echo $data["nombres"];}?>" size="30"></td>
	</tr>
	<tr>
		<th>tipo_documento</th>
		<td><input type="text" name="tipo_documento" id="tipo_documento" value="<?php if(isset($data["tipo_documento"])){echo $data["tipo_documento"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>numero_documento</th>
		<td><input type="text" name="numero_documento" id="numero_documento" value="<?php if(isset($data["numero_documento"])){echo $data["numero_documento"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>manzana</th>
		<td><input type="text" name="manzana" id="manzana" value="<?php if(isset($data["manzana"])){echo $data["manzana"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>casa</th>
		<td><input type="text" name="casa" id="casa" value="<?php if(isset($data["casa"])){echo $data["casa"];}?>" size="5"></td>
	</tr>
	<tr>
		<th>calle</th>
		<td><input type="text" name="calle" id="calle" value="<?php if(isset($data["calle"])){echo $data["calle"];}?>" size="25"></td>
	</tr>
	<tr>
		<th>numero</th>
		<td><input type="text" name="numero" id="numero" value="<?php if(isset($data["numero"])){echo $data["numero"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>piso</th>
		<td><input type="text" name="piso" id="piso" value="<?php if(isset($data["piso"])){echo $data["piso"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>dpto</th>
		<td><input type="text" name="dpto" id="dpto" value="<?php if(isset($data["dpto"])){echo $data["dpto"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>cod_postal</th>
		<td><input type="text" name="cod_postal" id="cod_postal" value="<?php if(isset($data["cod_postal"])){echo $data["cod_postal"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>telefono</th>
		<td><input type="text" name="telefono" id="telefono" value="<?php if(isset($data["telefono"])){echo $data["telefono"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>email</th>
		<td><input type="text" name="email" id="email" value="<?php if(isset($data["email"])){echo $data["email"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>observaciones</th>
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
