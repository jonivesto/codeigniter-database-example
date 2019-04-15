<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index(){

        // Refresh page
        $this->load->view('blocks/header');
        $this->load->view('view');
        $this->load->view('blocks/footer');
    }
    
    // Insert
    public function insert(){

		
    }
    
    // Update
    public function update($id){
		
		
    }
    
    // Delete
    public function delete($id){
		
		
    }
}
