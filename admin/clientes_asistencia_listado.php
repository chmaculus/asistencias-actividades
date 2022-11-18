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
include("../includes/funciones_clientes.php");


normalize1();

	$num_dias_mes = date("t");

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
							<td>Código residente</td>
						</tr>

							<tr>
								<td><input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){echo $_POST["fecha_desde"]; }else{ echo date("1/m/Y");}?>" size="10"></td>
								<td><input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){echo $_POST["fecha_hasta"]; }else{ echo date("t/m/Y");}?>" size="10"></td>
								<td>
									<select name="actividades">
										<?php
										$q='select * from actividades where activado=1 and mostrar_asistencias=1 group by actividad order by actividad';
										$res=mysql_query($q);
										echo '<option value="" label="Todas"></option>'.chr(10);
										while($row=mysql_fetch_array($res)){
											if($_POST["actividades"]==quitar_tildes($row["Actividad"])){
												echo '<option value="'.quitar_tildes($row["Actividad"]).'" label="'.utf8_encode($row["Actividad"]).'" selected></option>'.chr(10);
											}else{
												echo '<option value="'.quitar_tildes($row["Actividad"]).'" label="'.utf8_encode($row["Actividad"]).'"></option>'.chr(10);
											}
										}
										?>
									</select>
								</td>
								<td><input type="text" name="residente" placeholder="TODOS" value="<?php if($_POST["residente"]){echo $_POST["residente"];}?>" size="10"></td>
							</tr>
					</table>
				<td>
					Ordenar por:
					<table border="1">
						<tr>
							<td>Apellido</td><td><input type="radio" name="ordenar" value="apellido"  <?php if($_POST["ordenar"]=="apellido" OR !$_POST["ordernar"]){echo "checked";} ?>></td>
						</tr><tr>
							<td>Fecha/Hora</td><td><input type="radio" name="ordenar" value="fecha" <?php if($_POST["ordenar"]=="fecha"){echo "checked";} ?>></td>
						</tr><tr>
							<td>Detalle</td><td><input type="radio" name="ordenar" value="detalle" <?php if($_POST["ordenar"]=="detalle"){echo "checked";} ?>></td>
						</tr>
					</table>
				</td>

</tr>
</table>
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

if($_POST["actividades"]){
	$where=$where.' and detalle ="'.$_POST["actividades"].'" ';
}


if($_POST["residente"]){
	$where=$where.' and codigo_facturacion="'.$_POST["residente"].'" ';
}
	

//echo "ordenar: ".$_POST["ordenar"]."<br>";

if($_POST["ordenar"]=="apellido"){
	$order=' order by apellido, nombres ';
}

if($_POST["ordenar"]=="fecha"){
	$order=' order by fecha_ingreso desc, hora_ingreso desc ';
}

if($_POST["ordenar"]=="detalle"){
	$order=' order by tipo, detalle ';
}


$query=$query.$where.$order;


//$query='select * from clientes_asistencias where fecha>=';



echo "<br><br><br>".$query.";<br><br><br>";
/*
#:::::: 1s=1m 1h=1d
select * from clientes_asistencias where fecha_ingreso>="2021-12-01" and fecha_ingreso<="2021-12-31" and codigo_facturacion="a" order by apellido, nombres ;
#:::::1s=dm 1m=1h 
select * from clientes_asistencias where fecha_ingreso>="2021-12-01" and fecha_ingreso<="2021-12-31" and detalle ="TAEKWONDO" order by apellido, nombres ;
select * from clientes_asistencias where fecha_ingreso>="2021-12-01" and fecha_ingreso<="2021-12-31" and codigo_facturacion="1" order by apellido, nombres ;
*/

$result=mysql_query($query);
$rows=mysql_num_rows($result);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}

//echo $query."<br>";

log_this("logs/query_consulta_".date("Y-m").".log",date("H:i:s")." - ".$query."\n\n");

echo "<br>Cantidad de resultados: ".$rows."";

echo '<form action="clientes_asistencia_export.php" method="post">';
echo '<input type="hidden" name="query" value="'.base64_encode($query).'">';
echo '<input type="submit" name="EXPORTAR RESULTADOS" value="EXPORTAR RESULTADOS">';
echo '</form><br>';





echo '<table class="tabla_busqueda"; border="1">';
echo '<tr class="cabecera_tabla">';
//echo '<table border="1">';
//echo "<tr>";
	echo "<th>Código cliente</th>";
	echo "<th>M / C</th>";
	echo "<th>Apellido</th>";
	echo "<th>Nombres</th>";
//	echo "<th>Numero_documento</th>";
	//echo "<th>Tipo</th>";
	echo "<th>Detalle</th>";
	echo "<th>Fecha ingreso</th>";
	echo "<th>Hora ingreso</th>";
echo "</tr>";

while($row=mysql_fetch_array($result)){

	if($i == 0){ echo "<tr class='tabla1'>"; $i++; 
	}else{ echo "<tr class='tabla2'>"; $i--; }

	$array1=trae_cliente_by_id($row["id_cliente"]);

	echo '<td>'.$row["id_cliente"].'</td>';
	echo '<td>'.$array1["manzana"].' / '.$array1["casa"].'</td>';
	//echo '<td>'.$row["codigo_facturacion"].'</td>';
	echo '<td>'.strtoupper($row["apellido"]).'</td>';
	echo '<td>'.strtoupper($row["nombres"]).'</td>';
//	echo '<td>'.$row["numero_documento"].'</td>';
	//echo '<td>'.$row["tipo"].'</td>';
	echo '<td>'.utf8_encode($row["detalle"]).'</td>';
	echo '<td>'.fecha_conv("-",$row["fecha_ingreso"]).'</td>';
	echo '<td>'.$row["hora_ingreso"].'</td>';
	echo "</tr>".chr(10);
}
?>
</table>


</center>
