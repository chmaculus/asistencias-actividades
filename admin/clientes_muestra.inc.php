<center>
	<style>
		.tabla_modificar{
			margin-left: 0px; 
			margin-top: 60px; 
			background: white;
			border: 1px solid #ccc;
			margin-bottom: 10px;
		}

		.fila_tabla{
			border-bottom: 1px solid #ccc;
		}

		.fila_header{
			border-right: 1px solid #ccc;
			background: #46b5d1;
			color: white;
		}
	</style>

<table border="1" class="tabla_modificar">
<tr class="fila_tabla">
	<th class="fila_header">Codigo residente</th>	<td><?php echo $array_clientes_dalvian["id"]; ?></td>
<tr class="fila_tabla">
	<th class="fila_header">Codigo facturacion</th>	<td><?php echo $array_clientes_dalvian["codigo_facturacion"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Apellido</th>	<td><?php echo $array_clientes_dalvian["apellido"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Nombres</th>	<td><?php echo $array_clientes_dalvian["nombres"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Tipo documento</th>	<td><?php echo $array_clientes_dalvian["tipo_documento"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Numero</th>	<td><?php echo $array_clientes_dalvian["numero_documento"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Mzna</th>	<td><?php echo $array_clientes_dalvian["manzana"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Casa</th>	<td><?php echo $array_clientes_dalvian["casa"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Calle</th>	<td><?php echo $array_clientes_dalvian["calle"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Numero</th>	<td><?php echo $array_clientes_dalvian["numero"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Piso</th>	<td><?php echo $array_clientes_dalvian["piso"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Dpto</th>	<td><?php echo $array_clientes_dalvian["dpto"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">C.P.</th>	<td><?php echo $array_clientes_dalvian["cod_postal"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Telefono</th>	<td><?php echo $array_clientes_dalvian["telefono"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">E-Mail</th>	<td><?php echo $array_clientes_dalvian["email"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Observaciones</th>	<td><?php echo $array_clientes_dalvian["observaciones"]; ?></td>
</tr>
<tr class="fila_tabla">
	<th class="fila_header">Fecha creado</th>	<td><?php echo date("d/m/Y H:i:s",$array_clientes_dalvian["fecha_creado"]); ?></td>
</tr>
</table>