<?php
include("dossa_cli_base.php");
include("../includes/connect_mssql.php");
?>

<titulo>Busqueda de residentes DOSSA por DNI</titulo><br>
<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
<table>
<tr>
<td>DNI</td><td><input type="text" name="dni" value="<?php echo $_POST["dni"]; ?>"></td>
</tr>
</tr></table>
<input type="submit" name="buscar" value="Buscar"><br>
</form>

<?php


if(!$_POST["nombre"]){
	echo "Busqueda vacia<br>";
	exit;
}

$sql='select top 500 COD_HAB, COD_RES, NOM, NUM_DOC, DIR TEL, EMAIL from residentes where dni like \''.$_POST["dni"].'\'  order by nom';

echo $sql."<br>";


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}



?>

<table border="1">
	<tr>
		<th>Codigo hab</th>
		<th>Codigo Residente</th>
		<th>Nombre</th>
		<th>DNI</th>
		<th>Domicilio</th>
		<th>Tel</th>
		<th>E-Mail</th>
	</tr>

<?php

$sql='select top 500 COD_HAB, COD_RES, NOM, NUM_DOC, DIR TEL, EMAIL from residentes';
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	echo '<tr>';
      echo "<td>".$row['COD_HAB']."</td>";
      echo "<td>".$row['COD_RES']."</td>";
      echo "<td>".$row['NOM']."</td>";
      echo "<td>".$row['NUM_DOC']."</td>";
      echo "<td>".$row['DIR']."</td>";
      echo "<td>".$row['TEL']."</td>";
      echo "<td>".$row['EMAIL']."</td>";
	echo '</tr>';
}
echo '</table>';
sqlsrv_free_stmt( $stmt);

?>

