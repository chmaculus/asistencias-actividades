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
		$this->load->view('header','');
		$this->load->view('actividades', array(
		'data' =>$data
		));
		//echo json_encode($data);
	}
}

