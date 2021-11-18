<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Clientes_model');
		//$this->load->library('session');
	}


	public function index()
	{
		$data = $this->Clientes_model->getclientes_mssql();
		$aaa['title'] = 'ACTIVIDADES';
		$aaa['css'] = 'actividades.css';
		$this->load->view('cabecera',array(
			'data2' =>$aaa
		));

		$this->load->view('clientes_view', array(
			'data' =>$data
		));
		//echo json_encode($data);
	}

	public function consultaDNI(){	
		$dni = $this->input->post('dni');
		/*
		rows mysql
		if>0 devuelve datos
		else consultar mssql
		
		*/
		$data = $this->Clientes_model->getclientes_mysql($dni);
		$_SESSION['DNI'] = $data[0];
		echo json_encode($data);
	}


	public function consultaMznaCasa()
	{	
		$mzna = $this->input->post('mzna');
		$casa = $this->input->post('casa');
		$query = $this->Clientes_model->getclientesByMznaCasa($mzna, $casa);
		$_SESSION['DOM'] = $query[0];
		log_this("logs/mzacasa.log","POST: ".$mzna." casa".$casa."\n");
		log_this("logs/mzacasa.log",print_r($query,true));
		echo json_encode($query[0]);
	}

public function trae_cliente_by_id()
	{	
		$id = $this->input->post('id');
		$query = $this->Clientes_model->getclientesByID($id);
		$_SESSION['DOM'] = $query[0];
		log_this("logs/mzacasa.log","POST: ".$mzna." casa".$casa."\n");
		log_this("logs/mzacasa.log",print_r($query,true));
		echo json_encode($query[0]);
	}






}

