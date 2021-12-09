<?php
include("index.php");
?>
<body onLoad=document.aa.busqueda.focus()>

<center>
<br>
<?php
$limite=20;
$desde=$_POST["desde"];
$hasta=$_POST["hasta"];


include('../includes/connect.php');
?>
</body>
<div class="busqueda_cliente">
<label id="label_busqueda">Busqueda de Clientes</label>
<form class="formulario_busqueda" name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
<input type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>">&nbsp;&nbsp;&nbsp;
<input id="button_busqueda" type="submit" name="buscar" value="Buscar"><br>
</form>
</div>
<?php

#en caso de una nueva busqueda resetear las variables 
if($_POST["buscar"]=="Buscar"){
	$desde="";
	$hasta="";
}
#-------------------

if (!$_POST["busqueda"]) {
	echo '<br><font1></font1>';
	exit;
}


$query='select * from clientes_dalvian where apellido like "%'.$_POST["busqueda"].'%" or nombres like "%'.$_POST["busqueda"].'%" ';
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
echo '<br><br><font1 class="font1">Mostrando Resultados desde: '.($desde+1).' Hasta: '.$hasta.' de '.$total_rows.'</font1><br>';

echo '<table class="tabla_busqueda"; border="1">';
echo '<tr class="cabecera_tabla">';
	echo "<th>Código facturación</th>";
	echo "<th>Código residente</th>";
	echo "<th>Apellido</th>";
	echo "<th>Nombres</th>";
	echo "<th>Documento</th>";
	echo "<th>Manzana</th>";
	echo "<th>Casa</th>";
	echo "<th>Calle</th>";
	echo "<th>Número</th>";
	echo "<th>Piso</th>";
	echo "<th>Dpto</th>";
	echo "<th>Teléfono</th>";
	echo "<td></td>";
	echo "<td></td>";
echo '</tr>';
#-------------------------------
#muestra resultados
$i = 0;
while($row=mysql_fetch_array($result)){
	if($i == 0){
		echo "<tr class='tabla1'>";
		$i++;
	}else{
		echo "<tr class='tabla2'>";
		$i--;
	}
	echo '<td>'.$row["codigo_facturacion"].'</td>';
	echo '<td>'.$row["codigo_residente"].'</td>';
	echo '<td>'.$row["apellido"].'</td>';
	echo '<td>'.$row["nombres"].'</td>';
	echo '<td>'.$row["numero_documento"].'</td>';
	echo '<td>'.$row["manzana"].'</td>';
	echo '<td>'.$row["casa"].'</td>';
	echo '<td>'.$row["calle"].'</td>';
	echo '<td>'.$row["numero"].'</td>';
	echo '<td>'.$row["piso"].'</td>';
	echo '<td>'.$row["dpto"].'</td>';
	echo '<td>'.$row["telefono"].'</td>';
	echo '<td><a HREF="clientes_ingreso.php?id_clientes_dalvian='.$row["id"].'"><button class="table_buttons" >Modificar</button></a></td>';
	echo '<td><a HREF="clientes_eliminar.php?id_clientes_dalvian='.$row["id"].'"><button class="table_buttons" >Eliminar</button></a></td>';
	echo "</tr>".chr(13);
}
echo "</table>";
$i = 1;

echo '<br><font1 class="font2">Mostrando Resultados desde: '.($desde+1).' Hasta: '.$hasta.' de: '.$total_rows.'</font1><br>';


echo '<form class="formulario_busqueda" name="aa" action="'.$_SERVER["SCRIPT_NAME"].'" method="post">';

#botones de control de pagina
echo '<input type="hidden" name="busqueda" value="'.$_POST["busqueda"].'">';
echo '<input class="footer_botones" type="submit" name="control" value="anteriores">&nbsp;&nbsp;&nbsp;';
echo '<input class="footer_botones" type="submit" name="control" value="siguientes">';
#---------------------------

#almacena variables
echo '<input type="hidden" name="desde" value="'.$desde.'">';
echo '<input type="hidden" name="hasta" value="'.$hasta.'">';
#-----------------------

echo '</form>';




?>


</center>
</body>
</html>
