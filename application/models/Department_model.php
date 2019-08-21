<?php
Class Department_model extends CI_Model {

	// Read data using username and password
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
		
    }
    
    public function department_lists() {
        $this->db->select('*');
        $this->db->from(' department');
        $query = $this->db->get();
            if ($query->num_rows() > 0) {
                 return $result=$query->result_array();
            }
    }
	
	
	
}
