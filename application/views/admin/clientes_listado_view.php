<?php
include("clientes_base.php");
?>

echo '<table>';
echo "<tr>";
	echo "<th>codigo_cliente</th>";
	echo "<th>apellido</th>";
	echo "<th>nombres</th>";
	echo "<th>tipo_documento</th>";
	echo "<th>numero_documento</th>";
	echo "<th>manzana</th>";
	echo "<th>casa</th>";
	echo "<th>calle</th>";
	echo "<th>numero</th>";
	echo "<th>piso</th>";
	echo "<th>dpto</th>";
	echo "<th>cod_postal</th>";
	echo "<th>telefono</th>";
	echo "<th>email</th>";
	echo "<th>observaciones</th>";
	echo "<th>imagen_nombre</th>";
	echo "<th>fecha_creado</th>";
	echo "<th>fecha_modificado</th>";
echo "</tr>";

while($data=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$data["id"].'</td>';
	echo '<td>'.$data["codigo_cliente"].'</td>';
	echo '<td>'.$data["apellido"].'</td>';
	echo '<td>'.$data["nombres"].'</td>';
	echo '<td>'.$data["tipo_documento"].'</td>';
	echo '<td>'.$data["numero_documento"].'</td>';
	echo '<td>'.$data["manzana"].'</td>';
	echo '<td>'.$data["casa"].'</td>';
	echo '<td>'.$data["calle"].'</td>';
	echo '<td>'.$data["numero"].'</td>';
	echo '<td>'.$data["piso"].'</td>';
	echo '<td>'.$data["dpto"].'</td>';
	echo '<td>'.$data["cod_postal"].'</td>';
	echo '<td>'.$data["telefono"].'</td>';
	echo '<td>'.$data["email"].'</td>';
	echo '<td>'.$data["observaciones"].'</td>';
	echo '<td>'.$data["imagen_nombre"].'</td>';
	echo '<td>'.$data["fecha_creado"].'</td>';
	echo '<td>'.$data["fecha_modificado"].'</td>';
	echo '<td><A HREF="clientes_dalvian_ingreso.php?id_clientes_dalvian='.$data["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A HREF="clientes_dalvian_eliminar.php?id_clientes_dalvian='.$data["id"].'"><button>Eliminar</button></A></td>';
	echo "</tr>".chr(10);
}
?>
</table></center>