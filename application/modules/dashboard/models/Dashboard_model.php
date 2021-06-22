<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard_model extends CI_Model
    {
        private $table = array(                      
        );                

        public function __construct()
        {
            parent::__construct(); 
			// $this->session = (object)get_userdata(USER);
			
			// if(is_empty_object($this->session)){
			// 	redirect(base_url().'dashboard/authentication', 'refresh');
			// }
			$model_list = [               
            ];
            $this->load->model($model_list);
        }                           
    }
?>