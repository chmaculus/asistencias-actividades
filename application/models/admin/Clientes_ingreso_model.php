<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_ingreso_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_All_Users(){

        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            foreach($query->result() as $row) {
                $data[]=$row;
            }
        }
        return $data;
    }

	function insertar_cliente($data){
		$query='insert into clientes_dalvian set 
		codigo_cliente="'.$data["codigo_cliente"].'",
		apellido="'.$data["apellido"].'",
		nombres="'.$data["nombres"].'",
		tipo_documento="'.$data["tipo_documento"].'",
		numero_documento="'.$data["numero_documento"].'",
		manzana="'.$data["manzana"].'",
		casa="'.$data["casa"].'",
		calle="'.$data["calle"].'",
		numero="'.$data["numero"].'",
		piso="'.$data["piso"].'",
		dpto="'.$data["dpto"].'",
		cod_postal="'.$data["cod_postal"].'",
		telefono="'.$data["telefono"].'",
		email="'.$data["email"].'",
		observaciones="'.$data["observaciones"].'",
		imagen_nombre="'.$data["imagen_nombre"].'",
		fecha_creado="'.$data["fecha_creado"].'"
		';
		//echo $query."<br>";

		log_this("logs/save.log",$query."\n");

		$this->db->query($query);
		//echo $this->db->insert_id();
		return $this->db->insert_id();

	}

	function update_clientes($data){
        // update code...
    }




}

