<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('model');
    }
	
	public function index(){
		$data = array();
        
        $data['data'] = $this->model->select();
		
        // Refresh page
        $this->load->view('blocks/header');
        $this->load->view('view', $data);
        $this->load->view('blocks/footer');
    }
    
    // Insert
    public function insert(){

		redirect('controller/index', 'refresh');
    }
    
    // Update
    public function update($id){
		redirect('controller/index', 'refresh');
    }
    
    // Delete
    public function delete($id){
		$this->model->delete($id);
		redirect('controller/index', 'refresh');
    }
}
