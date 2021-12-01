<?php
include("dossa_cli_base.php");
include("../includes/connect_mssql.php");
?>

<titulo>Buscar cliente por Manzana / Casa en DOSSA</titulo><br>
<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">
<table>
<tr>
<td>Manzana</td><td><input type="text" name="mzna" value="<?php echo $_POST["mzna"]; ?>"></td>
</tr>
<tr>
<td>Casa</td><td><input type="text" name="casa" value="<?php echo $_POST["casa"]; ?>"></td>
</tr></table>
<input type="submit" name="buscar" value="Buscar"><br>
</form>

<?php


if(!$_POST["mzna"] or !$_POST["casa"]){
	echo "Busqueda vacia<br>";
	exit;
}

$mzna=$_POST["mzna"];
$casa=$_POST["casa"];

$sql='select COD, NOM, DOM, CALLE, NUMERO, MZNA, CASA, PISO, DEPTO from clientes where mzna=\''.$mzna.'\' and casa=\''.$casa.'\' or ( dom like \'%M '.$mzna.' %\' and dom like \'%C '.$casa.'%\')';

echo $sql."<br>";


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}



/*
COD|NOM                                     |DOM                                            |CPO     |PVC    |LOC        |CUI          |TEL                                         |FPA|TIP|ZON  |ACT|MCC        |MCH   |CTA|NLG       |TLI|IVA|TCO|CLC|CPV|OBS                                                                                                                 |DIC|GRP|BLO|PAH|PER|RAN|REC|VEN|NMB|E_HD|C_HD|REGGPR|EMG|PDA_A|CMBS|TIPORC|CALLE                         |NUMERO|OPE_CAT|ESTADO|TASAM2|CVTA|FVTA               |TASA_POR|MAG|CLO|RTA_TOA|ORD_TOA|RTA_ENF|ORD_ENF|CAG|MZNA|CASA|PISO|DEPTO|ID  |DNI            |TIPO_DNI|TIPO_CONS|M2T      |M2C     |ANEXO_MC|TORRE|IMP_ALQ    |INC_TAS|DESC_ALQ       |CBU                   |EMAIL                                  |CONTRASENA                      |ACTIVACION|CODIGO_ACTIVACION               |modCBU|RIESGO_FISCAL|BLO_CTA_PROPIA|NotaDescuento|
*/


?>

<table border="1">
	<tr>
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

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	echo '<tr>';
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
