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
    
    public function departments() {
        $this->db->select('*');
        $this->db->from('department');
        $query = $this->db->get();
        $dep_arry=array();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row =>$value){
               $dep_arry[$value['department_id']]=$value['department_name'];
            }
        }
        return $dep_arry;
    }
	
	
	
}
