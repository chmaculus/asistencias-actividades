<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=iso-8859-1" http-equiv="content-type" />
</head>

<!-- Core CSS de Bootstrap-->
<link href="<?php  echo base_url().bootstrap_path;?>css/bootstrap.css" rel="stylesheet">

<link href="<?php  echo base_url();?>assets/css/actividades.css" rel="stylesheet">

<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
</style>

<center>

	<br><table><tr>
		<td>
			<a href="seleccion1">
				<img src="<?php echo base_url()."assets/images/back2.png";?>" width="100" height="100">
			</a>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</td>
		<td><img src="<?php echo base_url()."assets/images/club_house.png";?>"></td>

		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

		<td><label class="label1">ACTIVIDADES</label></td>




		

	</tr></table>
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
				<td>
					<img src="<?php echo base_url()."assets/images/next.png";?>" width="100" height="100">
				</td>
			</tr>
		</table>
	</center>


