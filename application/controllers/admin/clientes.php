<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");


class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Clientes_model');
		//$this->load->model('admin/clientes_ingreso_model');
	}


	public function index(){
		$this->load->view('admin/clientes_ingreso_view');
		//echo json_encode($data);
	}

	public function ingreso(){
		$this->load->view('admin/clientes_ingreso_view');
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function listado(){
		$data=$this->Clientes_model->listadoclientes_mysql();
		$this->load->view('admin/Clientes_listado_view',array(
			'data' =>$data
		));
		log_this("logs/listado.log",date("H:i:s")."\n".print_r($data,true));
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function busqueda(){
		$this->load->view('admin/clientes_ingreso_view');
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function busqueda_dossa_main(){
		$this->load->view('admin/clientes_dossa_main_view');
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function busqueda_dossa_nombre(){
		$this->load->view('admin/clientes_dossa_main_view');
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function busqueda_dossa_dni(){
		$this->load->view('admin/clientes_dossa_main_view');
		//echo json_encode($data);
	}
	#--------------------------------------------


	#--------------------------------------------
	public function busqueda_dossa_mzna(){
		$mzna=$this->input->post('mzna');
		$casa=$this->input->post('casa');
		if($this->input->post('mzna') and $this->input->post('casa')){
			$data=$this->Clientes_model->getclientesByMznaCasa($mzna, $casa);
			log_this("logs/data2.log",date("H:i:s")."\n".print_r($data,true)."\n");
		}else{
			$data=0;
		}
		
		$this->load->view('admin/clientes_dossa_mzna',$data);
		//echo json_encode($data);
	}
	#--------------------------------------------



	#--------------------------------------------
	public function modificacion(){
		$this->load->view('admin/clientes_ingreso_view');
		//echo json_encode($data);
	}
	#--------------------------------------------



	#--------------------------------------------
	public function grabar(){

		$data=array(
			'codigo_cliente' => $this->input->post('codigo_cliente'),
			'apellido' => $this->input->post('apellido'),
			'nombres' => $this->input->post('nombres'),
			'tipo_documento' => $this->input->post('tipo_documento'),
			'numero_documento' => $this->input->post('numero_documento'),
			'manzana' => $this->input->post('manzana'),
			'casa' => $this->input->post('casa'),
			'calle' => $this->input->post('calle'),
			'numero' => $this->input->post('numero'),
			'piso' => $this->input->post('piso'),
			'dpto' => $this->input->post('dpto'),
			'cod_postal' => $this->input->post('cod_postal'),
			'telefono' => $this->input->post('telefono'),
			'email' => $this->input->post('email'),
			'observaciones' => $this->input->post('observaciones'),
			'imagen_nombre' => $this->input->post('imagen_nombre'),
			'fecha_creado' => time()
		);
		
		log_this("logs/array.log",print_r($data,true));
//		$this->Clientes_ingreso_model->insertar_cliente(array(
//			'data' =>$data
//		));
		echo $this->Clientes_model->insertar_cliente($data);

/*
		$this->load->view('actividades_view',array(
			'data' =>$data
		));
*/
        //$this->load->view('users_view');
        //redirect('users', 'refresh');


	}
	#--------------------------------------------


}

