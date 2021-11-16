<?php 
include("clientes_dossa_main_view.php");
?>

<center>

	<form action="<?php echo base_url();?>admin/clientes/busqueda_dossa_mzna" method="post">
		<table border="1">
			<tr>
				<td>Manzana</td><td><input type="text" name="manzana"></td>
			</tr>
			<tr>
				<td>Casa</td><td><input type="text" name="casa"></td>
			</tr>
		</table>
		<input type="submit" name="ACEPTAR" value="ACEPTAR">
	</form>
	<?php
	if(!isset($data)){
		exit;
	}

	include("clientes_listado.inc.php");


	?>



