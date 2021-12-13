				Buscar por:
				<table border="1">
					<tr>
						<td>Codigo residente</td><td><input type="radio" name="ordenar" value="apellido"  <?php if($_POST["ordenar"]=="apellido" OR !$_POST["ordernar"]){echo "checked";} ?>></td>
					</tr><tr>
						<td>Apellido / Nombre</td><td><input type="radio" name="ordenar" value="fecha" <?php if($_POST["ordenar"]=="fecha"){echo "checked";} ?>></td>
				</table>


