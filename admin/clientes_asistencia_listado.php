<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Club House</title>
    <link href="../assets/css/prueba1.css" rel="stylesheet">
    <script src="../assets/js/jquery.min.js"></script>
</head>
<?php

include("header.inc.php");

//include("index.php");
include("../includes/connect.php");
include("../includes/funciones.php");



	$num_dias_mes = date("t",mktime(0,0,0,$mes,1,$year));

	?>
	<br><br><br><br><br><br>
<center>
	<div class="busqueda_cliente">

	<form class="formulario_busqueda" action="<?php echo $SCRIPT_NAME; ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>




		<table border="1">
				<tr>
					<td>Fecha desde</td>
					<td>Fecha hasta</td>
					<td>Actividad</td>
					<td>Codigo residente</td>
				</tr>

				<tr>
					<td><input type="text" name="fecha_desde" value="<?php echo date("01/m/Y");?>" size="10"></td>
					<td><input type="text" name="fecha_hasta" value="<?php echo $num_dias_mes.date("/m/Y");?>" size="10"></td>
					<td>
						<select name="actividades">
							<?php
							$q='select * from actividades where activado=1 and mostrar_asistencias=1 group by actividad order by actividad';
							$res=mysql_query($q);
							echo '<option value="" label="Todas"></option>'.chr(10);
							while($row=mysql_fetch_array($res)){
								if($_POST["actividades"]==$row["Actividad"]){
									echo '<option value="'.$row["Actividad"].'" label="'.$row["Actividad"].'" selected></option>'.chr(10);
								}else{
									echo '<option value="'.$row["Actividad"].'" label="'.$row["Actividad"].'"></option>'.chr(10);
								}
							}
							?>
						</select>
					</td>
					<td><input type="text" name="residente" value="<?php if($_POST["residente"]){echo $_POST["residente"];}?>" size="10"></td>
				</tr>
		</table>




<td>
				Ordenar por:
				<table border="1">
					<tr>
						<td>Apellido</td><td><input type="radio" name="ordenar" value="apellido"  <?php if($_POST["ordenar"]=="apellido" OR !$_POST["ordernar"]){echo "checked";} ?>></td>
					</tr><tr>
						<td>Fecha/hora</td><td><input type="radio" name="ordenar" value="fecha" <?php if($_POST["ordenar"]=="fecha"){echo "checked";} ?>></td>
					</tr><tr>
						<td>Detalle</td><td><input type="radio" name="ordenar" value="detalle" <?php if($_POST["ordenar"]=="detalle"){echo "checked";} ?>></td>
					</tr>
				</table>

</td>

</tr></table>
			<input type="submit" name="ACEPTAR" value="ACEPTAR">

</td>
</tr>
</table>
</form>
</div>


<?php

if(!$_POST["fecha_desde"]){
	exit;
}

$query='select * from clientes_asistencias ';

$where='where fecha_ingreso>="'.fecha_conv("/",$_POST["fecha_desde"]).'" 
	and  fecha_ingreso<="'.fecha_conv("/",$_POST["fecha_hasta"]).'" 
	';

if($_POST["residente"]){
	$where=$where.' and codigo_facturacion="'.$_POST["residente"].'" ';
}
	

echo "ordenar: ".$_POST["ordenar"]."<br>";

if($_POST["ordenar"]=="apellido"){
	$order=' order by apellido, nombres ';
}

if($_POST["ordenar"]=="fecha"){
	$order=' order by fecha_ingreso, hora_ingreso ';
}

if($_POST["ordenar"]=="detalle"){
	$order=' order by tipo, detalle ';
}


$query=$query.$where.$order;


//$query='select * from clientes_asistencias where fecha>=';



echo "<br><br><br>".$query.";<br><br><br>";

$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}

echo '<table class="tabla_busqueda"; border="1">';
echo '<tr class="cabecera_tabla">';
//echo '<table border="1">';
//echo "<tr>";
	echo "<th>Codigo residente</th>";
	echo "<th>codigo facturacion</th>";
	echo "<th>Apellido</th>";
	echo "<th>Nombres</th>";
	echo "<th>Numero_documento</th>";
	echo "<th>Tipo</th>";
	echo "<th>Detalle</th>";
	echo "<th>Fecha ingreso</th>";
	echo "<th>Hora ingreso</th>";
echo "</tr>";

while($row=mysql_fetch_array($result)){
		if($i == 0){
		echo "<tr class='tabla1'>";
		$i++;
	}else{
		echo "<tr class='tabla2'>";
		$i--;
	}
	echo '<td>'.$row["id_cliente"].'</td>';
	echo '<td>'.$row["codigo_facturacion"].'</td>';
	echo '<td>'.$row["apellido"].'</td>';
	echo '<td>'.$row["nombres"].'</td>';
	echo '<td>'.$row["numero_documento"].'</td>';
	echo '<td>'.$row["tipo"].'</td>';
	echo '<td>'.$row["detalle"].'</td>';
	echo '<td>'.fecha_conv("-",$row["fecha_ingreso"]).'</td>';
	echo '<td>'.$row["hora_ingreso"].'</td>';
	echo "</tr>".chr(10);
}
?>
</table>


</center>
