<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Actividades_model');
	}


	public function index()
	{
		$data = $this->Actividades_model->getactividades();
		$aaa['title'] = 'ACTIVIDADES';
		$aaa['css'] = 'actividades.css';
		$this->load->view('cabecera',array(
			'data2' =>$aaa
		));

		$this->load->view('actividades_view', array(
			'data' =>$data
		));
		//echo json_encode($data);
	}
}

