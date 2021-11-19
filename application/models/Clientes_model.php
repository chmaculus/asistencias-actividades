<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		$this->db2 = $this->load->database('mssql', TRUE);
	}

	#---------------------------------------------------
	public function rows_getclientes_mysql($dni = 0){
		log_this("logs/rows.log",date("H:i:s")."rows: 11\n");
		if($dni==0){
			return 0;
		}
		$this->db1->select('*');
		$this->db1->from('clientes_dalvian');
		$this->db1->where('numero_documento ="'.$dni.'"');
		$this->db1->limit(1);
		$query = $this->db1->get();
		$rows = $query->num_rows();
		return $rows;
	}
	#---------------------------------------------------


	#---------------------------------------------------
	public function getclientes_mysql($dni = 0){
		if($dni==0){
			//return 0;
		}
		$q='select * from clientes dalvian where numero_documento="'.$dni.'"';
		//$this->db1->select('*');
		//$this->db1->from('clientes_dalvian');
		//$this->db1->where('numero_documento ="'.$dni.'"');
		//$this->db1->limit(1);
		//$query = $this->db1->get();
		$query = $this->db1->query($q);
		log_this("logs/get_clientes.log","dni:".$q."\n");
		log_this("logs/get_clientes.log","\n".print_r($query,true));
		return $query->result_array();
		return $query;

	}
	#---------------------------------------------------



	#---------------------------------------------------
	public function getclientes_mssql($dni = 0)
	{
		$this->db2->select('*');
		$this->db2->from('clientes');
		$this->db2->where("DNI like '%".$dni."%'");
		$this->db2->limit(1);
		$query = $this->db2->get();
		return $query->result_array();
	}


	#---------------------------------------------------
public function getclientesByMznaCasa($mzna, $casa)
	{
		/*
		consultar manzana y casa en tabla mysql en caso de no encontrar nada consultar tabla mssql
		*/
		$q='select COD, NOM, DOM, CALLE, NUMERO, MZNA, CASA, PISO, DEPTO from clientes where mzna=\''.$mzna.'\' and casa=\''.$casa.'\' or ( dom like \'%M '.$mzna.' %\' and dom like \'%C '.$casa.'%\') limit 1';

		$query = $this->db2->query($q);
		log_this("logs/mzacasa.log",print_r(date("H:i:s")." ".$q,true)."\n");
		//log_this("logs/mzacasa.log",print_r($query,true)."\n");
		return $query->result_array();
	}
	#---------------------------------------------------


	#---------------------------------------------------
	public function trae_cliente_by_id($id){
		if($id==0){
			return 0;
		}
		$this->db1->select('*');
		$this->db1->from('clientes_dalvian');
		$this->db1->where('id ="'.$id.'"');
		//$this->db1->limit(1);
		$query = $this->db1->get();
		return $query->result_array();
	}
	#---------------------------------------------------




}

