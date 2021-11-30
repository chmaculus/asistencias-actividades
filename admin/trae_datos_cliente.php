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




log_this("trdata.log","\n".$sql."\n");

//log_this("trdata.log",date("H:i:s")."\n111\n");

$stmt = sqlsrv_query( $conn, $sql );
//log_this("trdata.log",date("H:i:s")."\n222\n");
if( $stmt === false) {
    die( log_this(print_r( sqlsrv_errors(), true)) );
}
//log_this("trdata.log",date("H:i:s")."\n333\n");


while($row=sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
	$array[]=$row;
}

////$array=sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
log_this("trdata.log","array: \n".print_r($array,true)."\n");

echo json_encode($array);


sqlsrv_free_stmt( $stmt);

?>

