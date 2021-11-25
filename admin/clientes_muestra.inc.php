<center>

<table border="1">
<tr>
	<th>Codigo residente</th>	<td><?php echo $array_clientes_dalvian["id"]; ?></td>
<tr>
	<th>Codigo facturacion</th>	<td><?php echo $array_clientes_dalvian["codigo_facturacion"]; ?></td>
</tr>
</tr>
<tr>
	<th>Apellido</th>	<td><?php echo $array_clientes_dalvian["apellido"]; ?></td>
</tr>
<tr>
	<th>Nombres</th>	<td><?php echo $array_clientes_dalvian["nombres"]; ?></td>
</tr>
<tr>
	<th>Tipo documento</th>	<td><?php echo $array_clientes_dalvian["tipo_documento"]; ?></td>
</tr>
<tr>
	<th>Numero</th>	<td><?php echo $array_clientes_dalvian["numero_documento"]; ?></td>
</tr>
<tr>
	<th>Mzna</th>	<td><?php echo $array_clientes_dalvian["manzana"]; ?></td>
</tr>
<tr>
	<th>Casa</th>	<td><?php echo $array_clientes_dalvian["casa"]; ?></td>
</tr>
<tr>
	<th>Calle</th>	<td><?php echo $array_clientes_dalvian["calle"]; ?></td>
</tr>
<tr>
	<th>Numero</th>	<td><?php echo $array_clientes_dalvian["numero"]; ?></td>
</tr>
<tr>
	<th>Piso</th>	<td><?php echo $array_clientes_dalvian["piso"]; ?></td>
</tr>
<tr>
	<th>Dpto</th>	<td><?php echo $array_clientes_dalvian["dpto"]; ?></td>
</tr>
<tr>
	<th>C.P.</th>	<td><?php echo $array_clientes_dalvian["cod_postal"]; ?></td>
</tr>
<tr>
	<th>Telefono</th>	<td><?php echo $array_clientes_dalvian["telefono"]; ?></td>
</tr>
<tr>
	<th>E-Mail</th>	<td><?php echo $array_clientes_dalvian["email"]; ?></td>
</tr>
<tr>
	<th>Observaciones</th>	<td><?php echo $array_clientes_dalvian["observaciones"]; ?></td>
</tr>
<tr>
	<th>Fecha creado</th>	<td><?php echo date("d/m/Y H:i:s",$array_clientes_dalvian["fecha_creado"]); ?></td>
</tr>
</table>