<table><tr>

<?php
$count=0;
		foreach($data as $row){
			$count++;
			$str=$row["Lugar"];
			//$str=str_replace(chr(63), "Ñ", $str);
			$str=strtoupper($str);
			echo '<td><button class="btn-3d" type="button" onclick=\'imprimir("'.$url.'");\'>'.$str.'</button></td>'.chr(10);
			if($count==5){
				echo "</tr><tr>";
				$count=0;
			}
		}
?>

</tr>
</table>
</center>