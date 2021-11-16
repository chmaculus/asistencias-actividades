<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Club House</title>
	<link href="<?php echo base_url(); ?>assets/css/clientes_ingreso.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
</head>


<center>

<form action="<?php echo "";?>" method="post">
	<table border="1">
		<tr>
			<td></td><td><input type="text" name="manzana"></td>
			<td></td><td><input type="text" name="casa"></td>
		</tr>
		</table>
		<input type="submit" name="ACEPTAR" value="ACEPTAR">
	</form>
<?php
if(!$data){
	exit;
}

include("clientes_listado.inc.php");


?>



