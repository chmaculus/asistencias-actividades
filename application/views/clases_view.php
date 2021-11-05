<<<<<<< HEAD
=======

>>>>>>> 3e07d1c8983e615c74ee2b85617dc12ecdf71cbd
<table style="border:1px solid black;margin-top: 30px;"><tr>

<?php

//echo print_r($data,true);




$count=0;
		foreach($data as $row){
			$count++;
			$str=$row["nombre"];
			//$str=str_replace(chr(63), "Ñ", $str);
			$str=strtoupper($str);
			echo '<td><button class="btn-3d" type="button">'.$str.'</button></td>';
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