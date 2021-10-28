<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espacios_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		$this->db2 = $this->load->database('mssql', TRUE);
	}

	public function getespacios()
	{

		/*
		select * from clases c where mostrar=1 and Activado_clases =1  group by nombre order by nombre;
		*/

		$this->db1->distinct();
		$this->db1->select('Lugar');
		$this->db1->from("lugares");
		$this->db1->where("Activado_lugar =1");

		//$this->db1->group_by("Actividad");
		$this->db1->order_by("lugar");
		$query = $this->db1->get(); 
		//return $query->result();
		return $query->result_array();

		
	}

}

