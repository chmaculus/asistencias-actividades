<?php
include("index.php");
?>




<center>
<?php
include("../includes/connect.php");
$query="select * from clientes_dalvian order by apellido limit 0,1000";
$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}


echo '<table border="1">';
echo "<tr>";
	echo "<th>codigo facturacion</th>";
	echo "<th>codigo residente</th>";
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

while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["codigo_facturacion"].'</td>';
	echo '<td>'.$row["codigo_residente"].'</td>';
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
	echo '<td><A HREF="clientes_ingreso.php?id_clientes_dalvian='.$row["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A HREF="clientes_eliminar.php?id_clientes_dalvian='.$row["id"].'"><button>Eliminar</button></A></td>';
	echo "</tr>".chr(10);
}
?>
</table></center>