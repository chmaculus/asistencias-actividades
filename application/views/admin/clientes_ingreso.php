<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<title>Tablabla articulos By Christian Máculus</title>
</head>

<?php
include("clientes_dalvian_base.php");



if($_GET["id_clientes_dalvian"]){
    include_once("connect.php");
    $query='select * from clientes_dalvian where id="'.$_GET["id_clientes_dalvian"].'"';
    $array_clientes_dalvian=mysql_fetch_array(mysql_query($query));
    if(mysql_error()){echo "<br>".mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}
}
if($_GET["uuid_clientes_dalvian"]){
    include_once("connect.php");
    $query='select * from clientes_dalvian where uuid="'.$_GET["uuid_clientes_dalvian"].'"';
    $array_clientes_dalvian=mysql_fetch_array(mysql_query($query));
}
?>

<form method="post" action="clientes_dalvian_update.php" name="form_clientes_dalvian">

<center>
<table class="t1" border="1">
	<tr>
		<th>id</th>
		<td><input type="text" name="id" id="id" value="<?php if($array_clientes_dalvian["id"]){echo $array_clientes_dalvian["id"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>codigo_cliente</th>
		<td><input type="text" name="codigo_cliente" id="codigo_cliente" value="<?php if($array_clientes_dalvian["codigo_cliente"]){echo $array_clientes_dalvian["codigo_cliente"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>apellido</th>
		<td><input type="text" name="apellido" id="apellido" value="<?php if($array_clientes_dalvian["apellido"]){echo $array_clientes_dalvian["apellido"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>nombres</th>
		<td><input type="text" name="nombres" id="nombres" value="<?php if($array_clientes_dalvian["nombres"]){echo $array_clientes_dalvian["nombres"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>tipo_documento</th>
		<td><input type="text" name="tipo_documento" id="tipo_documento" value="<?php if($array_clientes_dalvian["tipo_documento"]){echo $array_clientes_dalvian["tipo_documento"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>numero_documento</th>
		<td><input type="text" name="numero_documento" id="numero_documento" value="<?php if($array_clientes_dalvian["numero_documento"]){echo $array_clientes_dalvian["numero_documento"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>manzana</th>
		<td><input type="text" name="manzana" id="manzana" value="<?php if($array_clientes_dalvian["manzana"]){echo $array_clientes_dalvian["manzana"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>casa</th>
		<td><input type="text" name="casa" id="casa" value="<?php if($array_clientes_dalvian["casa"]){echo $array_clientes_dalvian["casa"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>calle</th>
		<td><input type="text" name="calle" id="calle" value="<?php if($array_clientes_dalvian["calle"]){echo $array_clientes_dalvian["calle"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>numero</th>
		<td><input type="text" name="numero" id="numero" value="<?php if($array_clientes_dalvian["numero"]){echo $array_clientes_dalvian["numero"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>piso</th>
		<td><input type="text" name="piso" id="piso" value="<?php if($array_clientes_dalvian["piso"]){echo $array_clientes_dalvian["piso"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>dpto</th>
		<td><input type="text" name="dpto" id="dpto" value="<?php if($array_clientes_dalvian["dpto"]){echo $array_clientes_dalvian["dpto"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>cod_postal</th>
		<td><input type="text" name="cod_postal" id="cod_postal" value="<?php if($array_clientes_dalvian["cod_postal"]){echo $array_clientes_dalvian["cod_postal"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>telefono</th>
		<td><input type="text" name="telefono" id="telefono" value="<?php if($array_clientes_dalvian["telefono"]){echo $array_clientes_dalvian["telefono"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>email</th>
		<td><input type="text" name="email" id="email" value="<?php if($array_clientes_dalvian["email"]){echo $array_clientes_dalvian["email"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>observaciones</th>
			<td><textarea name="observaciones" id="observaciones" rows="10" cols="33"><?php if($array_clientes_dalvian["observaciones"]){echo $array_clientes_dalvian["observaciones"];}?></textarea></td>	</tr>
	<tr>
		<th>imagen_nombre</th>
		<td><input type="text" name="imagen_nombre" id="imagen_nombre" value="<?php if($array_clientes_dalvian["imagen_nombre"]){echo $array_clientes_dalvian["imagen_nombre"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>fecha_creado</th>
		<td><input type="text" name="fecha_creado" id="fecha_creado" value="<?php if($array_clientes_dalvian["fecha_creado"]){echo $array_clientes_dalvian["fecha_creado"];}?>" size="10"></td>
	</tr>
	<tr>
		<th>fecha_modificado</th>
		<td><input type="text" name="fecha_modificado" id="fecha_modificado" value="<?php if($array_clientes_dalvian["fecha_modificado"]){echo $array_clientes_dalvian["fecha_modificado"];}?>" size="10"></td>
	</tr>

</table>

<?php
if($_GET["id_clientes_dalvian"] OR $array_clientes_dalvian["id"]){
    echo '<input type="hidden" name="accion" value="modificacion">';
    echo '<input type="hidden" name="id_clientes_dalvian" value="'.$array_clientes_dalvian["id"].'">';
    echo '<input type="hidden" name="uuid_clientes_dalvian" value="'.$array_clientes_dalvian["uuid"].'">';
}else{
    echo '<input type="hidden" name="accion" value="ingreso">';
}
?>
<br>
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
