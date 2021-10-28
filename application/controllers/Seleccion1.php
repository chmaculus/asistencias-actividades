<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleccion1 extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
	 }


	public function index()
	{
		$this->load->view('Seleccion1_view','');
	}
}

