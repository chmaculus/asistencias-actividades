<?php
include("./includes/funciones.php");
include("./includes/connect_turnero.php");

session_start();

		//echo "gettt: ".$_GET["data"]."<br>";
		$aaa=base64_decode($_GET["data"]);
		$aaa=explode(":", $aaa);
			$fecha = date('d-m-Y H:i:s');
			$fecha_castellano=fechaCastellano ($fecha);

			$dni = $_SESSION['dni']['numero_documento'];
			$nombre = $_SESSION['dni']['apellido'];
			if($_SESSION['dni']['manzana'] != ''){
				$direccion = "Manzana: ".$_SESSION['dni']['manzana'].", Casa: ". $_SESSION['dni']['casa'];
			}else{
				$direccion = $_SESSION['dni']['DOM'];
			}


			/*
			  `id_cliente` mediumint(8) unsigned,
			  `codigo_residente` int(11) DEFAULT NULL,
			  `codigo_facturacion` int(11) DEFAULT NULL,
			  `apellido` varchar(35) DEFAULT NULL,
			  `nombres` varchar(35) DEFAULT NULL,
			  `numero_documento` int(13) DEFAULT NULL,
		  		fecha_ingreso date,
  				hora_ingreso time,
			*/
			if($aaa[0]=="actividad"){ $tipo=1; }
			if($aaa[0]=="clase"){ $tipo=2; }
			if($aaa[0]=="espacio"){ $tipo=3; }

			$q='insert into clientes_asistencias set 
				id_cliente="'.$_SESSION['dni']['id'].'",
			 codigo_residente="'.$_SESSION['dni']['codigo_residente'].'",
			 codigo_facturacion="'.$_SESSION['dni']['codigo_facturacion'].'", 
			 apellido="'.$_SESSION['dni']['apellido'].'", 
			 nombres="'.$_SESSION['dni']['nombres'].'", 
			 numero_documento="'.$_SESSION['dni']['numero_documento'].'", 
			 tipo="'.$tipo.'", 
			 detalle="'.$aaa[1].'", 
			 fecha_ingreso="'.date("Y-m-d").'", 
			 hora_ingreso="'.date("H:i:s").'"';
			 mysql_query($q);
			 if(mysql_error()){
			 	log_this("sql_error.log",date("H:i:s")."\n".mysql_error()." \n".$q.";\n\n");

			 }

			//log_this("sql.log",date("H:i:s")." \n".$q.";\n\n");

			//mysql_query($q);
			//grabar turno 

			
			imprimir_turno($aaa[0], $aaa[1], NULL, $fecha_castellano, $dni, $nombre,$direccion);
			file_write("session.log",print_r($_SESSION,true));



	function imprimir_turno($tipo, $valor, $array_nombre, $fecha, $dni, $nombre,$direccion){
	  $impresion = chr(27).'t'.chr(3); // ESC t n selecciona tabla de codigos de caracter n=
	  $impresion .= chr(29).'!'.chr(40); // GS ! n cambia tamaño
	  $impresion .= chr(27).'a'.chr(1); // ESC a n 0=izquierda, 1=centrar, 2=derecha
	  $impresion .= "INGRESO\r\n";
	  $impresion .= "\r\n";

	  $impresion .= chr(29).'!'.chr(30); // GS ! n cambia tamaño
	  $impresion .= chr(27).'a'.chr(1); // ESC a n 0=izquierda, 1=centrar, 2=derecha
	  $impresion .= "DALVIAN\r\n";
	  $impresion .= "\r\n";

	  $impresion .= chr(29).'!'.chr(33); // GS ! n cambia tamaño
	  $impresion .= chr(27).'a'.chr(1); // ESC a n 0=izquierda, 1=centrar, 2=derecha
	  $impresion .= "CLUB HOUSE\r\n";
	  $impresion .= "\r\n";
	  $impresion .= chr(29).'!'.chr(0); // GS ! n cambia tamaño
	  $impresion .= chr(27).'a'.chr(0); // ESC a n 0=izquierda, 1=centrar, 2=derecha
	  $impresion .= $fecha." ".date("H:i:s")."\r\n";
	  $impresion .= "\r\n";

	  $impresion .= "DNI: ".$dni."\r\n";
	  $impresion .= "\r\n";

	  $impresion .= "Nombre: ".$nombre."\r\n";
	  $impresion .= "\r\n";

	  $impresion .= "Domicilio: ".$direccion."\r\n";
	  $impresion .= "\r\n";

	  $impresion .= ucfirst($tipo).": ".$valor."\r\n";
	  $impresion .= "\r\n";
	  $impresion .= chr(29).'V'.chr(66).chr(80); // GS V n m n=66 avanza y corta, m=10 añade 10 milimetros
	  $str=utf8_decode($impresion);
	  //file_write("print.prn",$str);
	  imprimir($str);
	}


	function imprimir($datos){
		  //file_put_contents($this->URI, mb_convert_encoding($datos, 'Windows-1252', 'UTF-8'));
		  file_put_contents('\\\\localhost\\printer', $datos);
			//file_put_contents('\\\\127.0.0.1\\impresora', iconv('Windows-1252','UTF-8', $datos));
		  //file_put_contents('prueba2.prn', $datos);
		  file_write("print.prn", $datos);
	}




	function fechaCastellano ($fecha) {
		$fecha = substr($fecha, 0, 10);
		$numeroDia = date('d', strtotime($fecha));
		$dia = date('l', strtotime($fecha));
		$mes = date('F', strtotime($fecha));
		$anio = date('Y', strtotime($fecha));
		$dias_ES = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
		$dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$nombredia = str_replace($dias_EN, $dias_ES, $dia);
		$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		$nombreMes = str_replace($meses_EN, $meses_ES, $mes);
		return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
	}








?>
