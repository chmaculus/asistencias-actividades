<?php
include("../includes/connect_mssql.php");
include("../includes/funciones.php");




if(!$_POST["codigo_facturacion"]){
	//exit;
}

$sql='SELECT
	COD,
	NOM,
	DOM,
	CALLE,
	NUMERO,
	MZNA,
	CASA,
	PISO,
	DEPTO
FROM
	CLIENTES
	where cod like \''.$_POST["codigo_facturacion"].'\'';




//log_this("trdata.log","\n".$sql."\n");

$stmt = sqlsrv_query( $conn, $sql );
//log_this("trdata.log",date("H:i:s")."\n222\n");
if( $stmt === false) {
    die( log_this("mssql_error.log",print_r( sqlsrv_errors(), true)) );
}


while($row=sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
	$array[]=$row;
}
$array = $array[0];

//log_this("trdata.log",print_r($array,true)."\n");

echo json_encode($array);

sqlsrv_free_stmt( $stmt);

?>

