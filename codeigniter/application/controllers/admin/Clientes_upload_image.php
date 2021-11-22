<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Clientes_upload_image extends CI_Controller {

	public function index(){

		// load base_url
		$this->load->helper('url');

		// Check form submit or not
		if($this->input->post('upload') != NULL ){
			$id_cliente=$this->input->post('id_cliente');
			
			$data = array();
			if(!empty($_FILES['file']['name'])){
				
				// Set preference
				$config['upload_path'] = './imagenes/';	
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size']    = '100';	// max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
				
				//Load upload library
				$this->load->library('upload',$config);			
				
				// File upload
				if($this->upload->do_upload('file')){
					// Get data about the file
					$uploadData = $this->upload->data();
					
					$filename = $uploadData['file_name'];
					$aa=explode(".",$filename);
					$filename=$id_cliente.".".strtolower( $aa[1] );
					$data['response'] = 'successfully uploaded '.$filename;
				}else{
					$data['response'] = 'failed';
				}
			}else{
				$data['response'] = 'failed';
			}
			
			// load view
			echo print_r($data,true);
			echo "<br>id_cliente".$id_cliente."<br>";
			echo "file".$filename."<br>";
			//$this->load->view('user_view',$data);
		}else{

			// load view
			$this->load->view('user_view');
		}
		
	}

}
