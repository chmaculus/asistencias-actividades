<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clases_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		$this->db2 = $this->load->database('mssql', TRUE);
	}

	public function getclases()
	{

		/*
		select * from clases c where mostrar=1 and Activado_clases =1  group by nombre order by nombre;
		*/

		$this->db1->distinct();
		$this->db1->select('nombre');
		$this->db1->from("clases");
		$this->db1->where("mostrar=1");
		$this->db1->where("Activado_clases=1");

		//$this->db1->group_by("Actividad");
		$this->db1->order_by("nombre");
		$query = $this->db1->get(); 
		//return $query->result();
		return $query->result_array();

		
	}

}

