<?php
include_once("clientes_dalvian_base.php");



echo "<br><br>";
$query='select * from clientes_dalvian where id="'.$id_clientes_dalvian.'"';
$array_clientes_dalvian=mysql_fetch_array(mysql_query($query));

include("clientes_dalvian_muestra.inc.php");
?>

