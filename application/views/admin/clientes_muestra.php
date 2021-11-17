<?php 
include("clientes_base.php");
log_this("logs/array.log",date("H:i:s")."\n".print_r($data,true));
?>



<center>

<form method='post' action='<?php echo base_url();?>admin/clientes_upload_image' enctype='multipart/form-data'>
	<input type='file' name='file' > <br/><br/>
	<input type='submit' value='Upload' name='upload' />
</form>

	<table border="1">
		<tr>
			<th>Codigo Residente</th>	
			<td>
				<?php echo $data[0]["codigo_residente"]; ?>
			</td>
		</tr>
		<tr>
			<th>Codigo facturacion</th>	
			<td>
				<?php echo $data[0]["codigo_facturacion"]; ?>
			</td>
		</tr>
		<tr>
			<th>Apellido</th>	
			<td>
				<?php echo $data[0]["apellido"]; ?>
			</td>

		</tr>
		<tr>
			<th>Nombres</th>	
			<td>
				<?php echo $data[0]["nombres"]; ?>
			</td>

		</tr>
		<tr>
			<th>Tipo documento</th>	
			<td>
				<?php echo $data[0]["tipo_documento"]; ?>
			</td>

		</tr>
		<tr>
			<th>Numero documento</th>	
			<td>
				<?php echo $data[0]["numero_documento"]; ?>
			</td>

		</tr>
		<tr>
			<th>Manzana</th>	
			<td>
				<?php echo $data[0]["manzana"]; ?>
			</td>

		</tr>
		<tr>
			<th>Casa</th>	
			<td>
				<?php echo $data[0]["casa"]; ?>
			</td>

		</tr>
		<tr>
			<th>Calle</th>	
			<td>
				<?php echo $data[0]["calle"]; ?>
			</td>

		</tr>
		<tr>
			<th>Numero</th>	
			<td>
				<?php echo $data[0]["numero"]; ?>
			</td>

		</tr>
		<tr>
			<th>Piso</th>	
			<td>
				<?php echo $data[0]["piso"]; ?>
			</td>

		</tr>
		<tr>
			<th>Dpto</th>	
			<td>
				<?php echo $data[0]["dpto"]; ?>
			</td>

		</tr>
		<tr>
			<th>Cod postal</th>	
			<td>
				<?php echo $data[0]["cod_postal"]; ?>
			</td>

		</tr>
		<tr>
			<th>Telefono</th>	
			<td>
				<?php echo $data[0]["telefono"]; ?>
			</td>

		</tr>
		<tr>
			<th>E-Mail</th>	
			<td>
				<?php echo $data[0]["email"]; ?>
			</td>

		</tr>
		<tr>
			<th>Observaciones</th>	
			<td>
				<?php echo $data[0]["observaciones"]; ?>
			</td>

		</tr>
		<tr>
			<th>Fecha creado</th>	
			<td>
				<?php echo $data[0]["fecha_creado"]; ?>
			</td>

		</tr>
		<tr>
			<th>Fecha modificado</th>	
			<td>
				<?php echo $data[0]["fecha_modificado"]; ?>
			</td>

		</tr>
	</table>
