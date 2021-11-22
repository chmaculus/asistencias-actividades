	<table >
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
				<table>
					<tr>
						<?php
						$count=0;
						foreach($data as $row){
							$count++;
							$str=$row["Actividad"];
							$str=strtoupper($str);
							$base64=base64_encode("actividad:".$str);
							$url=base_url()."imprimir?data=".$base64;
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
	</center>


