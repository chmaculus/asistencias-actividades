<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class actividades_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		//$this->db2 = $this->load->database('mssql', TRUE);
	}



	public function get_rows_actividades()
	{
	}



	public function getactividades()
	{
		$this->db1->distinct();
		$this->db1->select('Actividad');
		$this->db1->from("actividades");
		$this->db1->where("activado=1");
		$this->db1->order_by("Actividad");
		$query = $this->db1->get(); 
		//return $query->result();
		return $query->result_array();

		
	}

}

