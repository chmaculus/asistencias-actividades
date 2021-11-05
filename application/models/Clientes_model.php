<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('mssql', TRUE);
	}




	public function getclientes_mssql($dni = 0)
	{
		//$dni=$_POST["dni"];
		//log_message('debug',"|".$dni."|");
		log_this("logs/dni.log","|".$dni."|");
		
		#:::work TASAS_NOV_CLUB
		$this->db2->select('*');
		$this->db2->from('clientes');
		$this->db2->where("DNI like '%".$dni."%'");
		//$this->db2->or_where("CUI like '%".$dni."%'");
		//$this->db2->or_where("TEL like '%".$dni."%'");
		//$this->db2->or_where("TIPO_DNI like '%".$dni."%'");
		$this->db2->limit(100);
		$query = $this->db2->get();
		return $query->result_array();
		//return $query->result();
	}





}

