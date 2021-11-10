<table><tr>

<?php

//echo print_r($data,true);




$count=0;
		foreach($data as $row){
			$count++;
			$str=$row["nombre"];
			//$str=str_replace(chr(63), "Ñ", $str);
			$str=strtoupper($str);
			$base64=base64_encode("clase:".$str);
			$url=base_url()."imprimir?data=".$base64;
			echo '<td><button class="btn-3d" type="button" onclick=\'imprimir("'.$url.'");\'>'.$str.'</button></td>'.chr(10);
			if($count==5){
				echo "</tr><tr>";
				$count=0;
			}
		}
//echo '<td><button class="btn-3d" type="button"></button></td>';
//echo '<td><button class="btn-3d" type="button"></button></td>';
?>

</tr>
</table>
</center>