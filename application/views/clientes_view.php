<table><tr>



<?php


//echo print_r($data,true);

/*
mz/casa CPO
dni/cuit CUI, TEL, DNI
calle/numero OPE_CAT


*/



		foreach($data as $row){
			echo "<tr>";
			//echo '<td>'.$row["COD"].'</td>';
			echo '<td>'.$row["NOM"].'</td>';
			echo '<td>'.$row["DOM"].'</td>';
			echo '<td>'.$row["CPO"].'</td>';
			echo '<td>'.$row["CALLE"].'</td>';
			echo '<td>'.$row["NUMERO"].'</td>';
			echo "</tr>";
			
		}












//echo print_r($data,true);

/*
COD|NOM|DOM|CPO|PVC|LOC|CUI|TEL|FPA|TIP|ZON|ACT|MCC|MCH|CTA|NLG|TLI|IVA|TCO|CLC|CPV|OBS|DIC|GRP|BLO|PAH|PER|RAN|REC|VEN|NMB|E_HD|
C_HD|REGGPR|EMG|PDA_A|CMBS|TIPORC|CALLE|NUMERO|OPE_CAT|ESTADO|TASAM2|CVTA|FVTA|TASA_POR|MAG|CLO|RTA_TOA|ORD_TOA|RTA_ENF|ORD_ENF|
CAG|MZNA|CASA|PISO|DEPTO|ID|DNI|TIPO_DNI|TIPO_CONS|M2T|M2C|ANEXO_MC|TORRE|IMP_ALQ|INC_TAS|DESC_ALQ|CBU|EMAIL|CONTRASENA|ACTIVACION|
CODIGO_ACTIVACION|modCBU|RIESGO_FISCAL|BLO_CTA_PROPIA|NotaDescuento|
*/


/*
id|cod_dossa|apellido|nombres|cpo|tipo_documento|numero_documento|provincia|localidad|manzana|casa|numero|piso|dpto|cod_postal|
telefono|email|observaciones|imagen_path|imagen_nombre|fecha_creado|fecha_modificado|
*/







?>

</tr>
</table>
</center>