<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clases extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('Clases_model');
	 }


	public function index()
	{
		$aaa['title'] = 'CLASES';
		$aaa['css'] = 'clases.css';
		$this->load->view('cabecera',array(
			'data2' =>$aaa
		));

		$data = $this->Clases_model->getclases();
		$this->load->view('clases_view', array(
		'data' =>$data
		));
		//echo json_encode($data);
	}
}
