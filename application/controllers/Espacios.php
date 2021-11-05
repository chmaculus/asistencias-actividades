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
<<<<<<< HEAD
		$aaa['title'] = 'ESPACIOS';
		$aaa['css'] = 'espacios.css';
		$this->load->view('cabecera',array(
			'data2' =>$aaa
		));

=======
		$data2['title'] = 'ESPACIOS';
		$this->load->view('header',array("data2"=>$data2));
>>>>>>> 3e07d1c8983e615c74ee2b85617dc12ecdf71cbd
		$this->load->view('espacios_view', array(
		'data' =>$data
		));
		//echo json_encode($data);
	}
}

