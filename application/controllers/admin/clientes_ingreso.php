<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
class Clientes_ingreso extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('admin/clientes_ingreso_model');
	}


	public function index()
	{
		$this->load->view('admin/clientes_ingreso_view');
		//echo json_encode($data);
	}


	public function grabar(){
		$this->load->model('admin/Clientes_ingreso_model.php');

		$mzna = $this->input->post('mzna');
		$casa = $this->input->post('casa');



	}


}

