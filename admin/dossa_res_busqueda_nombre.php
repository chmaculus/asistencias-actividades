<?php
include("dossa_main.php");
include("../includes/connect_mssql.php");
?>

<titulo>Busqueda de residente por nombre</titulo><br>
<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
<table>
<tr>
<td>Nombre / Apellido</td><td><input type="text" name="nombre" value="<?php echo $_POST["mzna"]; ?>"></td>
</tr>
</table>
<input type="submit" name="buscar" value="Buscar"><br>
</form>

<?php


if(!$_POST["nombre"]){
//	echo "Busqueda vacia<br>";
//	exit;
}


$sql='select top 500 COD_HAB, COD_RES, NOM, NUM_DOC, DIR TEL, EMAIL from residentes where nom like \'%'.$_POST["nombre"].'%\' ';

echo $sql."<br>";


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}


/*
COD_HAB|COD_RES|TIPO_RE|NOM                                     |TIP_DOC|NUM_DOC        |FECHA_NAC          |DIR                                               |TEL                                         |EMAIL          |TRANSB|TRANSA|RIVA|CUIT         |
*/

?>

<table border="1">
	<tr>
		<th>Codigo residente</th>
		<th>Nombre</th>
		<th>DNI</th>
		<th>Domicilio</th>
		<th>Calle</th>
		<th>Mzna</th>
		<th>casa</th>
		<th>Piso</th>
		<th>Dpto</th>
		<th>Torre</th>
		<th>Tel</th>
		<th>E-Mail</th>
	</tr>

<?php

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	echo '<tr>';
      echo "<td>".$row['COD']."</td>";
      echo "<td>".$row['NOM']."</td>";
      echo "<td>".$row['DNI']."</td>";
      echo "<td>".$row['DOM']."</td>";
      echo "<td>".$row['CALLE']."</td>";
      echo "<td>".$row['MZNA']."</td>";
      echo "<td>".$row['CASA']."</td>";
      echo "<td>".$row['PISO']."</td>";
      echo "<td>".$row['DPTO']."</td>";
      echo "<td>".$row['TORRE']."</td>";
      echo "<td>".$row['TEL']."</td>";
      echo "<td>".$row['EMAIL']."</td>";
	echo '</tr>';
}
echo '</table>';
sqlsrv_free_stmt( $stmt);

?>

