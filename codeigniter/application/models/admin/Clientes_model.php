<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->db1 = $this->load->database('mysql', TRUE);
		$this->db2 = $this->load->database('mssql', TRUE);
		//$this->load=>Clientes_model;
	}




	public function getclientes_mysql($dni = 0)
	{
		$this->db1->select('*');
		$this->db1->from('clientes');
		$this->db1->where("DNI like '%".$dni."%'");
		$this->db1->limit(1);
		$query = $this->db1->get();
		//return $query->result_array();
	}

public function getclientes_mssql($dni = 0)
	{
		$this->db2->select('*');
		$this->db2->from('clientes');
		//$this->db2->from('clientes_dalvian');
		$this->db2->where("DNI like '%".$dni."%'");
		$this->db2->limit(0,1);
		$query = $this->db2->get();
		//return $query->result_array();
	}


	public function listadoclientes_mysql()
	{
		$this->db1->select('*');
		$this->db1->from('clientes_dalvian');
		$this->db1->limit(100);
		$query = $this->db1->get();
		//log_this("logs/query.log",print_r($query,true));
		return $query->result_array();
	}



public function getclientesByMznaCasa($mzna, $casa){
	//trae de tabla mssql
		/*
		consultar manzana y casa en tabla mysql en caso de no encontrar nada consultar tabla mssql
		*/
		$q='select COD, NOM, DOM, CALLE, NUMERO, MZNA, CASA, PISO, DEPTO from clientes where mzna=\''.$mzna.'\' and casa=\''.$casa.'\' or ( dom like \'%M '.$mzna.' %\' and dom like \'%C '.$casa.'%\')';

		$query = $this->db2->query($q);
		log_this("logs/mzacasa.log",print_r(date("H:i:s")." ".$q,true)."\n");
		//log_this("logs/mzacasa.log",print_r($query,true)."\n");
		return $query->result_array();
	}

	function insertar_cliente($data){
		$query='insert into clientes_dalvian set 
		codigo_residente="'.$data["codigo_residente"].'",
		codigo_facturacion="'.$data["codigo_facturacion"].'",
		apellido="'.$data["apellido"].'",
		nombres="'.$data["nombres"].'",
		tipo_documento="'.$data["tipo_documento"].'",
		numero_documento="'.$data["numero_documento"].'",
		manzana="'.$data["manzana"].'",
		casa="'.$data["casa"].'",
		calle="'.$data["calle"].'",
		numero="'.$data["numero"].'",
		piso="'.$data["piso"].'",
		dpto="'.$data["dpto"].'",
		cod_postal="'.$data["cod_postal"].'",
		telefono="'.$data["telefono"].'",
		email="'.$data["email"].'",
		observaciones="'.$data["observaciones"].'",
		imagen_nombre="'.$data["imagen_nombre"].'",
		fecha_creado="'.$data["fecha_creado"].'"
		';
		//echo $query."<br>";

		log_this("logs/save.log",$query."\n");

		$this->db->query($query);
		return $this->db->insert_id();

	}

	function update_clientes($data){
        // update code...
    }

	function get_cliente_by_id($id){
		$q='select * from clientes_dalvian where id="'.$id.'"';
		$query = $this->db1->query($q);
		return $query->result_array();
	}



	public function upload_image(){

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

