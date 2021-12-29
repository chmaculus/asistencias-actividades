include_once("clientes_dalvian_base.php");




<form method="post" action="clientes_dalvian_update.php" name="form_clientes_dalvian">

<center><br>
<table class="t1" border="1">
	<tr>
		<th>id</th>
		<td><input type="text" name="id" id="id" value="" size="10"></td>
	</tr>
	<tr>
		<th>codigo_residente</th>
		<td><input type="text" name="codigo_residente" id="codigo_residente" value="" size="10"></td>
	</tr>
	<tr>
		<th>apellido</th>
		<td><input type="text" name="apellido" id="apellido" value="" size="10"></td>
	</tr>
	<tr>
		<th>nombres</th>
		<td><input type="text" name="nombres" id="nombres" value="" size="10"></td>
	</tr>
	<tr>
		<th>tipo_documento</th>
		<td><input type="text" name="tipo_documento" id="tipo_documento" value="" size="10"></td>
	</tr>
	<tr>
		<th>numero_documento</th>
		<td><input type="text" name="numero_documento" id="numero_documento" value="" size="10"></td>
	</tr>
	<tr>
		<th>manzana</th>
		<td><input type="text" name="manzana" id="manzana" value="" size="10"></td>
	</tr>
	<tr>
		<th>casa</th>
		<td><input type="text" name="casa" id="casa" value="" size="10"></td>
	</tr>
	<tr>
		<th>calle</th>
		<td><input type="text" name="calle" id="calle" value="" size="10"></td>
	</tr>
	<tr>
		<th>numero</th>
		<td><input type="text" name="numero" id="numero" value="" size="10"></td>
	</tr>
	<tr>
		<th>piso</th>
		<td><input type="text" name="piso" id="piso" value="" size="10"></td>
	</tr>
	<tr>
		<th>dpto</th>
		<td><input type="text" name="dpto" id="dpto" value="" size="10"></td>
	</tr>
	<tr>
		<th>cod_postal</th>
		<td><input type="text" name="cod_postal" id="cod_postal" value="" size="10"></td>
	</tr>
	<tr>
		<th>telefono</th>
		<td><input type="text" name="telefono" id="telefono" value="" size="10"></td>
	</tr>
	<tr>
		<th>email</th>
		<td><input type="text" name="email" id="email" value="" size="10"></td>
	</tr>
	<tr>
		<th>observaciones</th>
			<td><textarea name="observaciones" id="observaciones" rows="10" cols="33"></textarea></td>	</tr>
	<tr>
		<th>imagen_nombre</th>
		<td><input type="text" name="imagen_nombre" id="imagen_nombre" value="" size="10"></td>
	</tr>
	<tr>
		<th>fecha_creado</th>
		<td><input type="text" name="fecha_creado" id="fecha_creado" value="" size="10"></td>
	</tr>
	<tr>
		<th>fecha_modificado</th>
		<td><input type="text" name="fecha_modificado" id="fecha_modificado" value="" size="10"></td>
	</tr>
	<tr>
		<th>codigo_facturacion</th>
		<td><input type="text" name="codigo_facturacion" id="codigo_facturacion" value="" size="10"></td>
	</tr>
</table>
<input type="hidden" name="accion" value="ingreso" />
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>