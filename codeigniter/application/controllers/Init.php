<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('init_model');
	 }


	public function getmssql()
	{
		$data = $this->init_model->getTableOne();
		echo json_encode($data);
	}

	public function getmysql()
	{
		$data = $this->init_model->getactividades();
		echo json_encode($data);
	}

}

