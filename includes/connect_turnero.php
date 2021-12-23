<?php
$server="140.191.48.235";
$user="user";
$passwd="user";
$base="agenda";
$id_connection=mysql_connect($server,$user,$passwd);

if(mysql_error()){
	echo "no se pudo conectar con el Servidor";
}

mysql_select_db($base,$id_connection);

if(mysql_error()){
	echo "No se pudo Abrir la Base de Datos";
}

?>