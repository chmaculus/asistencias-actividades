<?php
include("../includes/connect.php");
//include("../includes/connect_mssql.php");
include("../includes/funciones.php");
include("../includes/funciones_clientes.php");

$dni=$_POST["dni"];


$rows=rows_getclientes_mysql($dni);

log_this("logs/los1.log","dni: ".$dni."\n");

log_this("logs/los1.log","rows: ".print_r($rows,true)."\n");

//echo "rows: ".$rows."<br>";


$data=getclientes_mysql_dni($dni);

log_this("logs/los1.log","data: ".print_r($data,true)."\n");

$_SESSION['DNI'] = $data[0];
echo json_encode($data);



?>