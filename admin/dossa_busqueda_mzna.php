<?php
include("dossa_main.php");


?>

		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
		<input class="input_busqueda" placeholder="Manzana" type="text" name="mzna" value="<?php echo $_POST["mzna"]; ?>">
		/<input  class="input_busqueda" placeholder="Casa" type="text" name="casa" value="<?php echo $_POST["casa"]; ?>">
		<input type="submit" name="buscar" value="Buscar"><br>
		</form>
		<br>

		<?php


		 if(!$_POST["mzna"] or !$_POST["casa"]){
		 	echo "Busqueda vacia<br>";
		 	exit;
		 }

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

