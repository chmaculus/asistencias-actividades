<?php
include('clientes_base.php');


echo '<table border="1">';
echo '<tr>';
	echo '<th>codigo_cliente</th>';
	echo '<th>apellido</th>';
	echo '<th>nombres</th>';
	echo '<th>tipo_documento</th>';
	echo '<th>numero_documento</th>';
	echo '<th>manzana</th>';
	echo '<th>casa</th>';
	echo '<th>calle</th>';
	echo '<th>numero</th>';
	echo '<th>piso</th>';
	echo '<th>dpto</th>';
	echo '<th>cod_postal</th>';
	echo '<th>telefono</th>';
	echo '<th>email</th>';
	echo '<th>observaciones</th>';
	echo '<th>imagen_nombre</th>';
	echo '<th>fecha_creado</th>';
	echo '<th>fecha_modificado</th>';
echo '</tr>';


$count=0;
foreach($data as $row){
	echo '<tr>';
	echo '<td>'.$count++.'</td>';
	echo '<td>'.$row["id"].'</td>';
	echo '<td>'.$row["codigo_cliente"].'</td>';
	echo '<td>'.$row["apellido"].'</td>';
	echo '<td>'.$row["nombres"].'</td>';
	echo '<td>'.$row["tipo_documento"].'</td>';
	echo '<td>'.$row["numero_documento"].'</td>';
	echo '<td>'.$row["manzana"].'</td>';
	echo '<td>'.$row["casa"].'</td>';
	echo '<td>'.$row["calle"].'</td>';
	echo '<td>'.$row["numero"].'</td>';
	echo '<td>'.$row["piso"].'</td>';
	echo '<td>'.$row["dpto"].'</td>';
	echo '<td>'.$row["cod_postal"].'</td>';
	echo '<td>'.$row["telefono"].'</td>';
	echo '<td>'.$row["email"].'</td>';
	echo '<td>'.$row["observaciones"].'</td>';
	echo '<td>'.$row["imagen_nombre"].'</td>';
	echo '<td>'.$row["fecha_creado"].'</td>';
	echo '<td>'.$row["fecha_modificado"].'</td>';
	echo '<td><A HREF="clientes_dalvian_ingreso.php?id_clientes_dalvian='.$row["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A HREF="clientes_dalvian_eliminar.php?id_clientes_dalvian='.$row["id"].'"><button>Eliminar</button></A></td>';
	echo '</tr>'.chr(10);
}
?>
</table></center>