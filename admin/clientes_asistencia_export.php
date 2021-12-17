<?php
include("../includes/connect.php");
include("../includes/funciones.php");

date_default_timezone_set("America/Argentina/Buenos_Aires");

$query=base64_decode($_POST["query"]);


$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}


$linea='<table class="t1">';
$linea.="<tr>";
	$linea.="<th>Codigo Cliente</th>";
	$linea.="<th>Codigo Residente</th>";
	$linea.="<th>Apellido</th>";
	$linea.="<th>Nombres</th>";
	$linea.="<th>Detalle</th>";
	$linea.="<th>Fecha ingreso</th>";
	$linea.="<th>Hora ingreso</th>";
$linea.="</tr>".chr(10);

$data=$linea;



while($row=mysql_fetch_array($result)){
	$linea="<tr>";
	$linea.='<td>'.$row["id_cliente"].'</td>';
	$linea.='<td>'.$row["codigo_facturacion"].'</td>';
	$linea.='<td>'.strtoupper($row["apellido"]).'</td>';
	$linea.='<td>'.strtoupper($row["nombres"]).'</td>';
	$linea.='<td>'.$row["detalle"].'</td>';
	$linea.='<td>'.fecha_conv("-",$row["fecha_ingreso"]).'</td>';
	$linea.='<td>'.$row["hora_ingreso"].'</td>';
	$linea.="</tr>".chr(10);
	$data.=$linea;
}



$linea.='</table>';

$fecha=date("Y-m-d");

//print $data Set the automatic download section
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=asistencias_".$fecha."_".date("H-i-s").".xls");
header("Pragma: no-cache");
header("Expires: 0");
print $data;










?>
