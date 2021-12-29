				Ordernar por:
				<table border="1">
					<tr>
						<td>Apellido</td><td><input type="radio" name="ordenar" value="apellido"  <?php if($_POST["ordenar"]=="apellido" OR !$_POST["ordernar"]){echo "checked";} ?>></td>
					</tr><tr>
						<td>Fecha/hora</td><td><input type="radio" name="ordenar" value="fecha" <?php if($_POST["ordenar"]=="fecha"){echo "checked";} ?>></td>
					</tr><tr>
						<td>Detalle</td><td><input type="radio" name="ordenar" value="detalle" <?php if($_POST["ordenar"]=="detalle"){echo "checked";} ?>></td>
					</tr>
				</table>


