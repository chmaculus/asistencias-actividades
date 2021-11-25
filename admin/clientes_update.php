<?php
include_once("index.php");



include_once("../includes/connect.php");
$fecha=date("Y-n-d");
$hora=date("H:i:s");



#---------------------------------------------------------------------------------
if($_POST["accion"]=="ingreso"){

	$query='insert into clientes_dalvian set
		codigo_residente="'.$_POST["codigo_residente"].'",
		apellido="'.$_POST["apellido"].'",
		nombres="'.$_POST["nombres"].'",
		tipo_documento="'.$_POST["tipo_documento"].'",
		numero_documento="'.$_POST["numero_documento"].'",
		manzana="'.$_POST["manzana"].'",
		casa="'.$_POST["casa"].'",
		calle="'.$_POST["calle"].'",
		numero="'.$_POST["numero"].'",
		piso="'.$_POST["piso"].'",
		dpto="'.$_POST["dpto"].'",
		cod_postal="'.$_POST["cod_postal"].'",
		telefono="'.$_POST["telefono"].'",
		email="'.$_POST["email"].'",
		observaciones="'.$_POST["observaciones"].'",
		imagen_nombre="'.$_POST["imagen_nombre"].'",
		fecha_creado="'.time().'",
		codigo_facturacion="'.$_POST["codigo_facturacion"].'"';
		//echo $query."<br>";
		//exit;

	mysql_query($query);
	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}
	$id_clientes_dalvian=mysql_insert_id($id_connection);


	#muestra registro ingresado
	$query='select * from clientes_dalvian where id="'.$id_clientes_dalvian.'"';
	$array_clientes_dalvian=mysql_fetch_array(mysql_query($query));
	include("clientes_muestra.inc.php");
}
#---------------------------------------------------------------------------------


#---------------------------------------------------------------------------------
if($_POST["accion"]=="modificacion"){
		$id_clientes_dalvian=$_POST["id_clientes_dalvian"];
		
		$query='update clientes_dalvian set
		codigo_residente="'.$_POST["codigo_residente"].'",
		apellido="'.$_POST["apellido"].'",
		nombres="'.$_POST["nombres"].'",
		tipo_documento="'.$_POST["tipo_documento"].'",
		numero_documento="'.$_POST["numero_documento"].'",
		manzana="'.$_POST["manzana"].'",
		casa="'.$_POST["casa"].'",
		calle="'.$_POST["calle"].'",
		numero="'.$_POST["numero"].'",
		piso="'.$_POST["piso"].'",
		dpto="'.$_POST["dpto"].'",
		cod_postal="'.$_POST["cod_postal"].'",
		telefono="'.$_POST["telefono"].'",
		email="'.$_POST["email"].'",
		observaciones="'.$_POST["observaciones"].'",
		imagen_nombre="'.$_POST["imagen_nombre"].'",
		fecha_modificado="'.time().'",
		codigo_facturacion="'.$_POST["codigo_facturacion"].'"
				where id="'.$id_clientes_dalvian.'"
			';
			echo $query."<br>";
	mysql_query($query);
	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}


	#muestra registro ingresado
	$query='select * from clientes_dalvian where id="'.$id_clientes_dalvian.'"';
	$array_clientes_dalvian=mysql_fetch_array(mysql_query($query));
	include("clientes_muestra.inc.php");
}
#---------------------------------------------------------------------------------



if(!mysql_error()){
	if($_POST["accion"]=="ingreso"){
		echo '<td><font1>Los datos se ingresaron correctamente</font1></td>';
	}
	if($_POST["accion"]=="modificacion"){
		echo '<td><font1>Los datos se actualizaron correctamente</font1></td>';
	}
}
if($_POST["accion"]=="ELIMINAR"){
 	$query='delete from clientes_dalvian where id="'.$id_clientes_dalvian.'"';
 	mysql_query($query);
	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}
 	exit;
}


?>
</center>
</body>
</html>