<?php
include("clientes_dalvian_base.php");
?>
<body onLoad=document.aa.busqueda.focus()>

<center>
<br>
<titulo>Busqueda clientes_dalvian</titulo>
<?php
$limite=20;
$desde=$_POST["desde"];
$hasta=$_POST["hasta"];


include('connect.php');
?>
</body>
<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
<input type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>">
<input type="submit" name="buscar" value="Buscar"><br>

<?php

#en caso de una nueva busqueda resetear las variables 
if($_POST["buscar"]=="Buscar"){
	$desde="";
	$hasta="";
}
#-------------------

if (!$_POST["busqueda"]) {
	echo '<br><font1>Busqueda vacia</font1>';
	exit;
}


$query='select * from clientes_dalvian where blabla like "%'.$_POST["busqueda"].'%"';
#total de los resultados
$total_rows=mysql_num_rows(mysql_query($query));
if(mysql_error()){
	echo mysql_error()." ".$SCRIPT_NAME;
}
#--------------------------------------------
// control paginas
#primera busqueda cuando no existen las variables
if(!$desde || $desde==0){
	$desde="0";
	$hasta = $limite;
}
#----------------------------------------------
if($_POST["control"]=="anteriores"){
	if($desde >= $limite){ //para que no reste en la primera busqueda
		$desde = $desde - $limite;
		$hasta = $desde + $limite;
	}
}
if($_POST["control"]=="siguientes"){
	if($hasta != $total_rows){ //para que llegado al final no siga sumando
		$desde = $desde + $limite;
		$hasta = $desde + $limite;
	}
	if ($hasta > $total_rows) { $hasta = $total_rows ; }
}

$query .= " limit $desde,$limite";// establece limite al query actual

# limita que hasta no sea mayor que el total de los resultados
if ($hasta > $total_rows) { $hasta = $total_rows ; }
#---------------------------------------------------
// fin control paginas

$result = mysql_query($query);
if(mysql_error()){
	echo mysql_error()." ".$SCRIPT_NAME;
}


#crea cabecera listado
echo '<br><br><font1>Mostrando Resultados desde: '.($desde+1).' Hasta: '.$hasta.' de: '.$total_rows.'</font1><br>';

echo '<table class="t1">';
echo '<tr>';
	echo "<th>id</th>";
	echo "<th>codigo_residente</th>";
	echo "<th>apellido</th>";
	echo "<th>nombres</th>";
	echo "<th>tipo_documento</th>";
	echo "<th>numero_documento</th>";
	echo "<th>manzana</th>";
	echo "<th>casa</th>";
	echo "<th>calle</th>";
	echo "<th>numero</th>";
	echo "<th>piso</th>";
	echo "<th>dpto</th>";
	echo "<th>cod_postal</th>";
	echo "<th>telefono</th>";
	echo "<th>email</th>";
	echo "<th>observaciones</th>";
	echo "<th>imagen_nombre</th>";
	echo "<th>fecha_creado</th>";
	echo "<th>fecha_modificado</th>";
	echo "<th>codigo_facturacion</th>";
	echo "<td></td>";
	echo "<td></td>";
echo '</tr>';
#-------------------------------
#muestra resultados
while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["id"].'</td>';
	echo '<td>'.$row["codigo_residente"].'</td>';
	echo '<td>'.$row["apellido"].'</td>';
	echo '<td>'.$row["nombres"].'</td>';
	echo '<td>'.$row["tipo_documento"].'</td>';
	echo '<td>'.$row["numero_documento"].'</td>';
	echo '<td>'.$row["manzana"].'</td>';
	echo '<td>'.$row["casa"].'</td>';
	echo '<td>'.$row["calle"].'</td>';
	echo '<td>'.$row["numero"].'</td>';
	echo '<td>'.$row["piso"].'</td>';
	echo '<td>'.$row["dpto"].'</td>';
	echo '<td>'.$row["cod_postal"].'</td>';
	echo '<td>'.$row["telefono"].'</td>';
	echo '<td>'.$row["email"].'</td>';
	echo '<td>'.$row["observaciones"].'</td>';
	echo '<td>'.$row["imagen_nombre"].'</td>';
	echo '<td>'.$row["fecha_creado"].'</td>';
	echo '<td>'.$row["fecha_modificado"].'</td>';
	echo '<td>'.$row["codigo_facturacion"].'</td>';
	echo '<td><A HREF="clientes_dalvian_ingreso.php?id_clientes_dalvian='.$row["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A HREF="clientes_dalvian_eliminar.php?id_clientes_dalvian='.$row["id"].'"><button>Eliminar</button></A></td>';
	echo "</tr>".chr(13);
}
echo "</table>";


echo '<br><font1>Mostrando Resultados desde: '.($desde+1).' Hasta: '.$hasta.' de: '.$total_rows.'</font1><br>';

#almacena variables
echo '<input type="hidden" name="desde" value="'.$desde.'">';
echo '<input type="hidden" name="hasta" value="'.$hasta.'">';
#-----------------------

#botones de control de pagina
echo '<input type="submit" name="control" value="anteriores">';
echo '<input type="submit" name="control" value="siguientes">';
#---------------------------

?>

</form>
</center>
</body>
</html>
