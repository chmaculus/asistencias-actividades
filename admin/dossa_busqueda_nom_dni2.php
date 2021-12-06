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

		?>

		<table class="tabla_busqueda2">
			<tr class="cabecera_tabla">
				<th>Codigo residente</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Domicilio</th>
				<th>Calle</th>
				<th>Mzna</th>
				<th>casa</th>
				<th>Piso</th>
				<th>Dpto</th>
				<th>Torre</th>
				<th>Tel</th>
				<th>E-Mail</th>
			</tr>

		<?php

#-------------------------------
#muestra resultados
		$i = 0;
		while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			if($i == 0){
				echo "<tr class='tabla1'>";
				$i++;
			}else{
				echo "<tr class='tabla2'>";
				$i--;
			}
			echo "<td>".$row['COD']."</td>";
			echo "<td>".$row['NOM']."</td>";
			echo "<td>".$row['DNI']."</td>";
			echo "<td>".$row['DOM']."</td>";
			echo "<td>".$row['CALLE']."</td>";
			echo "<td>".$row['MZNA']."</td>";
			echo "<td>".$row['CASA']."</td>";
			echo "<td>".$row['PISO']."</td>";
			echo "<td>".$row['DEPTO']."</td>";
			echo "<td>".$row['TORRE']."</td>";
			echo "<td>".$row['TEL']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo '</tr>';
		}
		echo '</table>';
		sqlsrv_free_stmt( $stmt);



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
