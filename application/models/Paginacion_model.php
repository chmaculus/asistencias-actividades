    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class paginacion_model extends CI_Model
    {
     public function __construct() {
        $this->db1 = $this->load->database('mysql', TRUE);
         parent::__construct();
     }
     public function record_count() {
         return $this->db->count_all("actividades");
     }
     public function get_actividades($limit, $start) {
           //$this->db->limit($limit, $start);

         //$this->db1->limit(100, 0);

         //$query = $this->db1->get("actividades");
           /*if ($query->num_rows() > 0) {
               foreach ($query->result() as $row) {
                   $data[] = $row;
               }*/
               
           //}

               //$this->db1->distinct();
               $this->db1->select('Actividad');
               $this->db1->from("actividades");
               $this->db1->where("activado=1");
               $this->db1->order_by("Actividad");
               $query = $this->db1->get(); 
                return $query->result();
               //return $query->result_array();
                /*foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;*/


               //return $query;
           //return false;
           }
       }
