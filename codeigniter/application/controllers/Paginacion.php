    <?php
    class Paginacion extends CI_Controller
    {
       public function __construct() {
           parent:: __construct();
           $this->load->library("pagination");
           $this->load->helper("url");
           $this->load->model("Paginacion_model");
           //$this->load->model("Actividades_model");
       }
       public function index() {
           $config = array();
           $config["base_url"] = base_url() . "paginacion/";
           $config["total_rows"] = $this->Paginacion_model->record_count();
           //$config['total_rows'] = 200;
           $config["per_page"] = 5;
           $config["uri_segment"] = 3;
           $this->pagination->initialize($config);

           //$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           $page=20;
           //$data["results"] = $this->Actividades_model->getactividades();
           $data["results"] = $this->Paginacion_model->get_actividades($config["per_page"], $page);
           //$data["results"] = $this->fetch_departments($config["per_page"], $page);
           $data["links"] = $this->pagination->create_links();
           //$this->load->view("paginacion_view", $page);
           $this->load->view("paginacion_view", array("data"=>$data));
           //$this->load->view("paginacion_view", $data);
       }
    }
