<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data = $this->Actividades_model->getactividades();
		$aaa['title'] = 'Menu';
		$aaa['css'] = 'menu.css';
		$this->load->view('menu', array(
			'data' =>$data
		));
		//echo json_encode($data);
	}
}

