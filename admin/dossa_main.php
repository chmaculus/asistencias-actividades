<?php
include("index.php");
include("../includes/connect_mssql.php");
?>

<center>
	<br>

<div class="cabecera_dossa">
<label>Buscar en DOSSA </label><br><br>

<!-- primer nivel de seleccion -->
	<button class="table_clientes">Clientes</button>
	<button class="table_residentes">Residentes</button>
<br><br><br>
</div>
<!-- segundo nivel clientes -->
<div class="seccion_clientes" hidden>
	<label>Clientes Dalvian</label>
	<button class="apellido">Apellido / Nombre </button>
	<button class="dni">DNI</button>
	<button class="domicilio">Mzna / Casa</button>
	<br><br>

	<!-- tercer nivel clientes por apellido -->
	<div class="seccion_clientes-apellido" hidden>
			
		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
			<input class="input_busqueda" type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>" placeholder="Apellido/Nombre">
			<input type="submit" name="buscar" value="Buscar"><br><br>
		</form>
		<?php

		// if(!$_POST["busqueda"]){
		// 	echo "Busqueda vacia<br>";
		// 	exit;
		// }

		$sql = 'SELECT top 500 COD, NOM, DNI, DOM, CALLE, MZNA, CASA, PISO, DEPTO, TORRE, TEL, EMAIL FROM clientes where nom like \'%'.$_POST["busqueda"].'%\'  ';
		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}
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

		?>
	</div>
	<!-- tercer nivel clientes por dni -->
	<div class="seccion_clientes-dni" hidden>

		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
		<input class="input_busqueda" type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>" placeholder="DNI">
		<input type="submit" name="buscar" value="Buscar"><br><br>
		</form>

		<?php

		// if(!$_POST["busqueda"]){
		// 	echo "Busqueda vacia<br>";
		// 	exit;
		// }

		$num = number_format($_POST["busqueda"], 0, ',', '.');

		$sql = 'SELECT top 500 COD, NOM, DNI, DOM, CALLE, MZNA, CASA, PISO, DEPTO, TORRE, TEL, EMAIL FROM clientes where dni like \'%'.$_POST["busqueda"].'%\'  or cui like \'%'.$_POST["busqueda"].'%\'  ';
		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}

		?>

		<table border="1" class="tabla_busqueda2">
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
			echo "<td>".$row['DPTO']."</td>";
			echo "<td>".$row['TORRE']."</td>";
			echo "<td>".$row['TEL']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo '</tr>';
		}
		echo '</table>';
		sqlsrv_free_stmt( $stmt);

		?>
	</div>

	<!-- tercer nivel clientes por direccion -->
	<div class="seccion_clientes-direccion" hidden>

		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
		<input class="input_busqueda" placeholder="Manzana" type="text" name="mzna" value="<?php echo $_POST["mzna"]; ?>">
		/<input  class="input_busqueda" placeholder="Casa" type="text" name="casa" value="<?php echo $_POST["casa"]; ?>">
		<input type="submit" name="buscar" value="Buscar"><br>
		</form>
		<br>

		<?php


		// if(!$_POST["mzna"] or !$_POST["casa"]){
		// 	echo "Busqueda vacia<br>";
		// 	exit;
		// }

		$mzna=$_POST["mzna"];
		$casa=$_POST["casa"];

		$sql='select COD, NOM, DOM, CALLE, NUMERO, MZNA, CASA, PISO, DEPTO from clientes where mzna=\''.$mzna.'\' and casa=\''.$casa.'\' or ( dom like \'%M '.$mzna.' %\' and dom like \'%C '.$casa.'%\')';

		//echo $sql."<br>";

		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}

		?>

		<table border="1" class="tabla_busqueda2">
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
			echo "<td>".$row['DPTO']."</td>";
			echo "<td>".$row['TORRE']."</td>";
			echo "<td>".$row['TEL']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo '</tr>';
		}
		echo '</table>';
		sqlsrv_free_stmt( $stmt);

		?>

	</div>
</div>

<!-- segundo nivel residentes -->
<div class="seccion_residentes" hidden>
	<label>Buscar de residentes en DOSSA por:</label><br><br>
		<button class="nombre">Nombre</button>
		<button  class="dni-residentes">DNI</button>
	<!-- tercer nivel residentes por nombre -->
	<div class="seccion_residentes-nombre" hidden>

		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
					Nombre / Apellido<input type="text" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
			<input type="submit" name="buscar" value="Buscar"><br>
		</form>

		<?php

		// if(!$_POST["nombre"]){
		// 	echo "Busqueda vacia<br>";
		// 	exit;
		// }

		$sql='select top 500 COD_HAB, COD_RES, NOM, NUM_DOC, DIR, TEL, EMAIL from residentes where nom like \'%'.$_POST["nombre"].'%\' ';

		//echo $sql."<br>";

		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}

		?>

		<table border="1" class="tabla_busqueda2">
			<tr class="cabecera_tabla">
				<th>Codigo hAB</th>
				<th>Codigo residente</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Domicilio</th>
				<th>Tel</th>
				<th>E-Mail</th>
			</tr>

		<?php
		$i = 0;
		while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			if($i == 0){
				echo "<tr class='tabla1'>";
				$i++;
			}else{
				echo "<tr class='tabla2'>";
				$i--;
			}
			echo "<td>".$row['COD_HAB']."</td>";
			echo "<td>".$row['COD_RES']."</td>";
			echo "<td>".$row['NOM']."</td>";
			echo "<td>".$row['NUM_DOC']."</td>";
			echo "<td>".$row['DIR']."</td>";
			echo "<td>".$row['TEL']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo '</tr>';
		}
		echo '</table>';
		sqlsrv_free_stmt( $stmt);

		?>

	</div>

	<!-- tercer nivel residentes por nombre -->
	<div class="seccion_residentes-dni" hidden>

		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
		<input class="input_busqueda" placeholder="DNI" type="text" name="dni" value="<?php echo $_POST["dni"]; ?>">
		<input type="submit" name="buscar" value="Buscar"><br>
		</form>

		<?php

		// if(!$_POST["dni"]){
		// 	echo "Busqueda vacia<br>";
		// 	exit;
		// }

		$sql='select top 500 COD_HAB, COD_RES, NOM, NUM_DOC, DIR, TEL, EMAIL from residentes where num_doc like \''.$_POST["dni"].'\'  order by nom';

		echo "<br>";


		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
			die( print_r( sqlsrv_errors(), true) );
		}

		?>

		<table border="1" class="tabla_busqueda2">
			<tr class="cabecera_tabla">
				<th>Codigo hAB</th>
				<th>Codigo residente</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Domicilio</th>
				<th>Tel</th>
				<th>E-Mail</th>
			</tr>

		<?php
	$i = 0;
		while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			
			if($i == 0){
				echo "<tr class='tabla1'>";
				$i++;
			}else{
				echo "<tr class='tabla2'>";
				$i--;
			}
			echo "<td>".$row['COD_HAB']."</td>";
			echo "<td>".$row['COD_RES']."</td>";
			echo "<td>".$row['NOM']."</td>";
			echo "<td>".$row['NUM_DOC']."</td>";
			echo "<td>".$row['DIR']."</td>";
			echo "<td>".$row['TEL']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo '</tr>';
		}
		echo '</table>';
		sqlsrv_free_stmt( $stmt);

		?>

	</div>
	<br><br>
</div>


<!-- logica de la pagina -->
<script>
	function buscarCliente(){
		
	}

	$(".table_clientes").click(function(){
		$(".seccion_clientes").show();
		$(".seccion_residentes").hide();
		$(".seccion_clientes-apellido").hide();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".table_residentes").click(function(){
		$(".seccion_residentes").show();
		$(".seccion_clientes").hide();
		$(".seccion_residentes-dni").hide();
		$(".seccion_residentes-nombre").hide();
	});

	$(".apellido").click(function(){
		$(".seccion_clientes-apellido").show();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".dni").click(function(){
		$(".seccion_clientes-dni").show();
		$(".seccion_clientes-apellido").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".domicilio").click(function(){
		$(".seccion_clientes-direccion").show();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-apellido").hide();
	});

	$(".nombre").click(function(){
		$(".seccion_residentes-nombre").show();
		$(".seccion_residentes-dni").hide();
	});

	$(".dni-residentes").click(function(){
		$(".seccion_residentes-dni").show();
		$(".seccion_residentes-nombre").hide();
	});

</script>