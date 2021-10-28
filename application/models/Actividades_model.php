<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class actividades_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		$this->db2 = $this->load->database('mssql', TRUE);
	}

	public function getTableOne()
	{
		#:::work TASAS_NOV_CLUB
		$this->db2->select('*');
		$this->db2->from('TASAS_NOV_CLUB');
		$this->db2->limit(5);
		$query = $this->db2->get();
		return $query->result();
	}

	public function getactividades()
	{
		/*
		$query = $this->db1->get_where("actividades",array('activado'=>1));
		$this->db1->order_by("Actividad");
		//return $query->result();
		//return $query->result_array();
*/
		$this->db1->distinct();
		$this->db1->select('Actividad');
		$this->db1->from("actividades");
		$this->db1->where("activado=1");
		//$this->db1->group_by("Actividad");
		$this->db1->order_by("Actividad");
		$query = $this->db1->get(); 
		//return $query->result();
		return $query->result_array();

		
	}

}

