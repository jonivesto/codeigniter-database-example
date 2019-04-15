<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {
	
    // Select
    function select($id = NULL) {
        if(!is_null($id)){
            $query = $this->db->get_where("example_table", array('id'=>$id));
            return $query->row_array();
        }else{
            $query = $this->db->get("example_table");
            return $query->result_array();
        }
    }
    
    // Update
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update("example_table", $data, array('id'=>$id));
            return $update ? true : false;
        }else{
            return false;
        }
    }
	
	// Delete
    public function delete($id) {
        $delete = $this->db->delete("example_table", array('id'=>$id));
        return $delete ? true : false;
    }
	
	// Insert
    public function insert($data = array()) {
        $insert = $this->db->insert("example_table", $data);
		return $insert ? $this->db->insert_id() : false;
    }
}