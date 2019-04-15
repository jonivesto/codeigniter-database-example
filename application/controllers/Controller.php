<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->model('model');
		$this->load->library('form_validation');
    }
	
	public function index(){
		$data = array();
        $data['data'] = $this->model->select();
		
        $this->load->view('blocks/header');
        $this->load->view('view', $data);
        $this->load->view('blocks/footer');
    }
    
    // Insert
    public function insert(){

		$this->form_validation->set_rules('value', 'post value', 'required');         
		$post = array(
			'value' => $this->input->post('value')
		);

		if($this->form_validation->run() == true){
			$this->model->insert($post);
		}
        	
		redirect('controller/index', 'refresh');
    }
    
    // Update
    public function update($id){

		$this->form_validation->set_rules('value', 'post value', 'required');  

		$post = array(
			'value' => $this->input->post('value')
		);
		
		if($this->form_validation->run() == true){ 
			$this->model->update($post, $id);
		}
        
		redirect('controller/index', 'refresh');
    }
    
    // Delete
    public function delete($id){
		$this->model->delete($id);
		redirect('controller/index', 'refresh');
    }
}
