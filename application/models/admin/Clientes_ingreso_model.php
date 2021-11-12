<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_ingreso_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}



	function grabar_cliente(){

		$query='insert into temp.clientes_dalvian set 
		id="'.$id.'",
		codigo_cliente="'.$codigo_cliente.'",
		apellido="'.$apellido.'",
		nombres="'.$nombres.'",
		tipo_documento="'.$tipo_documento.'",
		numero_documento="'.$numero_documento.'",
		manzana="'.$manzana.'",
		casa="'.$casa.'",
		calle="'.$calle.'",
		numero="'.$numero.'",
		piso="'.$piso.'",
		dpto="'.$dpto.'",
		cod_postal="'.$cod_postal.'",
		telefono="'.$telefono.'",
		email="'.$email.'",
		observaciones="'.$observaciones.'",
		imagen_nombre="'.$imagen_nombre.'",
		fecha_creado="'.$fecha_creado.'",
		fecha_modificado="'.$fecha_modificado.'"';

		log_this("logs/save.log");

		$this->db->query("YOUR QUERY");

	}






}

