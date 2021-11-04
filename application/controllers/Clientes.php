<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
}

