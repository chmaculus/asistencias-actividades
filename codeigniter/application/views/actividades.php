
	
	</tr></table>
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
							echo '<td><button class="btn-3d" type="button">'.$str.'</button></td>';
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


