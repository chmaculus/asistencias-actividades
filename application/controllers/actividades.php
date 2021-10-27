<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class actividades extends CI_Controller {

	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('actividades_model');
	 }


	public function index()
	{
		$data = $this->actividades_model->getactividades();
		$this->load->view('actividades', array(
		'data' =>$data
		));
		//echo json_encode($data);
		/*$data['page_title'] = 'Asistencia Actividades';
		echo '<table border="1"><tr>';
		foreach($data as $row){
			echo "<td>".$row["Actividad"]."</td>";
		}
		echo '</tr></table>';*/
	}
}

