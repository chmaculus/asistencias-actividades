	<table >
		<tr>
			<td>
				<img src="<?php echo base_url()."assets/images/back.png";?>" width="100" height="100">
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
				<table style="border:1px solid black;margin-top: 30px;">
					<tr>
						<?php
						$count=0;
						foreach($data as $row){
							$count++;
							$str=$row["Actividad"];
							$str=strtoupper($str);
							echo '<td><button class="btn-3d" type="button">'.$str.'</button></td>'.chr(10);
							if($count==5){
								echo "</tr><tr>";
								$count=0;
							}
						}
						?>
					</tr>
				</table>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>
					<img src="<?php echo base_url()."assets/images/next.png";?>" width="100" height="100">
				</td>
			</tr>
		</table>
	</center>


