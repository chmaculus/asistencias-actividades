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

<table border="1"><tr>

<?php
$count=0;
		foreach($data as $row){
			$count++;
			//echo '<td><button class="btn btn-primary btn-lg" type="button">'.$row["Actividad"].'</button></td>';
			//echo '<td><button class="btn btn-outline-primary btn-lg" type="button">'.$row["Actividad"].'</button></td>';
			echo '<td><button class="btn-3d" type="button">'.$row["Actividad"].'</button></td>';
			if($count==5){
				echo "</tr><tr>";
				$count=0;
			}
		}
echo '<td><button class="btn-3d" type="button"></button></td>';
echo '<td><button class="btn-3d" type="button"></button></td>';
?>

</tr>
</table>
</center>