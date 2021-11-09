<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('menu');
		//echo json_encode($data);
		$obj = json_decode($this->input->post('array'));
		echo print_r($obj,true);

		log_this("cam.txt",date("H:i:s")."\n");


	}
}

