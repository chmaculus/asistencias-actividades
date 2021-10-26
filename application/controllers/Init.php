<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('init_model');
	 }


	public function getMssql()
	{
		$data = $this->init_model->getTableOne();
		echo json_encode($data);
	}

	public function getMysql()
	{
		$data = $this->init_model->getTableOne();
		echo json_encode($data);
	}

}

