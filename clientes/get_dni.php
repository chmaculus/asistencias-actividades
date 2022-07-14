<?php
include("../includes/connect.php");
//include("../includes/connect_mssql.php");
include("../includes/funciones.php");
include("../includes/funciones_clientes.php");

$dni=$_POST["dni"];


$rows=rows_getclientes_mysql($dni);

//log_this("session.log","dni: ".$dni."\n");
//log_this("session.log","rows: ".print_r($rows,true)."\n");

$data=getclientes_mysql_dni($dni);

//log_this("session.log","data: ".print_r($data,true)."\n");
session_start();
$_SESSION["dni"] = $data;

//log_this("session.log","data: ".print_r($_SESSION['DNI'],true)."\n");
echo json_encode($data);

?>