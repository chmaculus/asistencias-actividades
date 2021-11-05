<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Clientes_model');
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

  	public function consultaDNI()
	{
		
		$dni = $this->input->post('dni');
		log_this("logs/funciones.log","contr/clientes.php/consultaDNI ".$dni."\n");
		$data = $this->Clientes_model->getclientes_mssql($dni);
		echo json_encode($data);
	}
}

