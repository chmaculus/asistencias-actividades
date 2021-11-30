<?php
include("includes/connect.php");
include("includes/cabecera_categorias.php");
?>

	<table >
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
				<table>
					<tr>
						<?php
						$q='select * from actividades where activado=1 order by actividad';
						$res=mysql_query($q);
						$count=0;
						while($row=mysql_fetch_array($res)){
							$count++;
							$str=$row["Actividad"];
							$str=strtoupper($str);
							$base64=base64_encode("actividad:".$str);
							$url="imprimir.php?data=".$base64;
							echo '<td><button class="btn-3d" type="button" onclick=\'imprimir("'.$url.'");\'>'.$str.'</button></td>'.chr(10);
							if($count==5){
								echo "</tr><tr>";
								$count=0;
							}
						}
						?>
					</tr>
				</table>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>

		<!-- The actual snackbar -->
<div id="snackbar">Se envio a imprimir</div> 
	</center>
