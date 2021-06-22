<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	

	private $data = [];
	protected $session;
    public function __construct()
	{
		parent::__construct(); 
		// $this->session = (object)get_userdata(USER);
		
		// if(is_empty_object($this->session)){
		// 	redirect(base_url().'dashboard/authentication', 'refresh');
		// }

		$model_list = [
			'dashboard/Dashboard_model' => 'dModel',
			'dashboard/service/Dashboard_services_model' => 'dsModel'			
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{		
		$this->data['session'] =  $this->session;		        
		$this->data['content'] = 'index';
		$this->load->view('layout',$this->data);
	}	
}
