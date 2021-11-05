<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class actividades_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		//$this->db2 = $this->load->database('mssql', TRUE);
	}

	public function getTabletwo()
	{
		#:::work TASAS_NOV_CLUB
		$this->db2->select('*');
		$this->db2->from('clientes');
		$this->db2->limit(100);
		$query = $this->db2->get();
		return $query->result();
	}




}

