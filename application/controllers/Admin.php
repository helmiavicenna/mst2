<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}

	public function index()
	{
		$this->load->view('admin_page');
	}
	public function form_control(){
		$this->load->view('form-controls');
	}
	public function button(){
		$this->load->view('buttons');
	}
	public function typography(){
		$this->load->view('typography');
	}
	public function chart(){
		$this->load->view('charts');
	}
	public function table_tmp(){
		$this->load->view('table');
	}
	public function gallery_img(){
		$this->load->view('gallery');
	}
	public function gallery_fil(){
		$this->load->view('gallery_filter');	
	}
	public function notification(){
		$this->load->view('notifications');
	}
	public function migaluh_output($output = null){
		$this->load->view('bank.php',$output);
		}
	public function bank(){
		
		
			try{
				$crud = new grocery_CRUD();
	
				$crud->set_theme('datatables');
				$crud->set_table('bank');
				$crud->set_subject('Bank');
				$crud->required_fields('id');
				$crud->columns('account','money','categori');
				
				$output = $crud->render();
				
				$this->migaluh_output($output);
				
			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}
		
		
		$this->load->view('bank');
	}

}
