<?php
include("index.php");

include_once("../includes/connect.php");


echo "<center>";

//echo "je:".$_GET["id_clientes_dalvian"];


if($_GET["id_clientes_dalvian"]){
	$id_clientes_dalvian=$_GET["id_clientes_dalvian"];
}

if($_POST["id_clientes_dalvian"]){
	$id_clientes_dalvian=$_POST["id_clientes_dalvian"];
}
if($_POST["decision"]=="ELIMINAR"){
	include("clientes_update.php");
	echo "<center>";
	echo '<font1>Los datos se eliminaron correctamente</font1>';
	exit;
}

if($_POST["decision"]=="CANCELAR"){
	include("clientes_muestra.inc.php");
	echo '<font1>Los datos no se han eliminado</font1>';
	exit;
}


$query='select * from clientes_dalvian where id="'.$id_clientes_dalvian.'"';

//echo "query:".$query."<br>";
$res=mysql_query($query);
if(mysql_error()){echo mysql_error();}
$array_clientes_dalvian=mysql_fetch_array($res);

include("clientes_muestra.inc.php");

echo '
<form action="clientes_eliminar.php" method="post">
<input type="hidden" name="id_clientes_dalvian" value="'.$id_clientes_dalvian.'">
<input type="hidden" name="accion" value="ELIMINAR">
<input type="submit" name="decision" value="ELIMINAR">
<input type="submit" name="decision" value="CANCELAR">
</form>';
?>
</center>


