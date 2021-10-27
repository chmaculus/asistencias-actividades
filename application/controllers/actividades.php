<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class actividades extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 //$this->load->model('actividades_model');
			 $this->load->model('init_model');
	 }


	public function index()
	{
		$data = $this->init_model->getactividades();
		echo json_encode($data);
	}

}

