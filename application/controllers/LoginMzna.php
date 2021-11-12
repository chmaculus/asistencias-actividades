<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginMzna extends CI_Controller {

	public function index()
	{
		log_this("logs/view.log",date("H:i:s")."\n");
		//$this->load->view('loginmzna');
		$this->load->view('temp1');
	}
}
