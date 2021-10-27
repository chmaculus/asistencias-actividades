<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init_model extends CI_Model {

	function __construct(){
    parent::__construct();
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

}

