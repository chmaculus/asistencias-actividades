<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('mssql', TRUE);
	}




	public function getclientes_mssql($dni = 0)
	{
		$this->db2->select('*');
		$this->db2->from('clientes');
		$this->db2->where("DNI like '%".$dni."%'");
		$this->db2->limit(100);
		$query = $this->db2->get();
		return $query->result_array();
	}
}

