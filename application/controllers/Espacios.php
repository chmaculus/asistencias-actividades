<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Espacios extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('Espacios_model');
	 }


	public function index()
	{
		$data = $this->Espacios_model->getespacios();
		$this->load->view('espacios_view', array(
		'data' =>$data
		));
		//echo json_encode($data);
	}
}
