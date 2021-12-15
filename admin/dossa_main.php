<?php
include("index.php");
include("../includes/connect_mssql.php");
?>

<center>
	<br>

<div class="cabecera_dossa">
<label>Buscar en DOSSA </label><br><br>

<!-- primer nivel de seleccion -->
	<button class="table_clientes">Clientes</button>
	<button class="table_residentes">Residentes</button>
<br><br>
</div>
<!-- segundo nivel clientes -->
<div class="seccion_clientes" hidden>
	<label>Clientes Dalvian</label>
	<a href="dossa_busqueda_nom.php"><button class="apellido">Apellido / Nombre </button></a>
	<a href="dossa_busqueda_dni.php"><button class="dni">DNI</button></a>
	<a href="dossa_busqueda_mzna.php"><button class="domicilio">Mzna / Casa</button></a>
	<br><br>

	<!-- tercer nivel clientes por apellido -->
	<div class="seccion_clientes-apellido" hidden>
	</div>





	<!-- tercer nivel clientes por dni -->
	<div class="seccion_clientes-dni" hidden>

	</div>

	<!-- tercer nivel clientes por direccion -->
	<div class="seccion_clientes-direccion" hidden>

	</div>
</div>

<!-- segundo nivel residentes -->
<div class="seccion_residentes" hidden>
	<label>Buscar de residentes en DOSSA por:</label>
		<a href="dossa_residentes_nom.php"><button class="nombre">Nombre</button></a>
		<a href="dossa_residentes_dni.php"><button  class="dni-residentes">DNI</button></a><br><br>
	<!-- tercer nivel residentes por nombre -->
	<div class="seccion_residentes-nombre" hidden>

	</div>

	<!-- tercer nivel residentes por nombre -->
	<div class="seccion_residentes-dni" hidden>

	</div>
	<br><br>
</div>


<!-- logica de la pagina -->
<script>
	function buscarCliente(){
		
	}

	$(".table_clientes").click(function(){
		$(".seccion_clientes").show();
		$(".seccion_residentes").hide();
		$(".seccion_clientes-apellido").hide();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".table_residentes").click(function(){
		$(".seccion_residentes").show();
		$(".seccion_clientes").hide();
		$(".seccion_residentes-dni").hide();
		$(".seccion_residentes-nombre").hide();
	});

	$(".apellido").click(function(){
		$(".seccion_clientes-apellido").show();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".dni").click(function(){
		$(".seccion_clientes-dni").show();
		$(".seccion_clientes-apellido").hide();
		$(".seccion_clientes-direccion").hide();
	});

	$(".domicilio").click(function(){
		$(".seccion_clientes-direccion").show();
		$(".seccion_clientes-dni").hide();
		$(".seccion_clientes-apellido").hide();
	});

	$(".nombre").click(function(){
		$(".seccion_residentes-nombre").show();
		$(".seccion_residentes-dni").hide();
	});

	$(".dni-residentes").click(function(){
		$(".seccion_residentes-dni").show();
		$(".seccion_residentes-nombre").hide();
	});

</script>