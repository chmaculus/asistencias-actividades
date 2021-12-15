<?php
include("dossa_main.php");


?>


		<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
			Nombre / Apellido<input type="text" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
			<input type="submit" name="buscar" value="Buscar"><br><br>
		</form>

		<?php

		 if(!$_POST["nombre"]){
		 	echo "Busqueda vacia<br>";
		 	exit;
		 }

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

