<?php
include("dossa_main.php");


?>


		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
			<input class="input_busqueda" type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>" placeholder="Apellido/Nombre">
			<input type="submit" name="buscar" value="Buscar"><br><br>
		</form>
		<?php

		 if(!$_POST["busqueda"]){
		 	echo "Busqueda vacia<br>";
		 	exit;
		 }

		 include("../includes/connect_mssql.php");

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
