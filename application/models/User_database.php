<?php

Class User_Database extends CI_Model {

    // Read data using username and password
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    static $userStatus=array(
        ACTIVE_USER => 'Active',
        INACTIVE_USER => 'Inactive'
    );

    public function userlist_info($start = NULL, $limit = NULL) {
        $this->db->select('u.*,t.*');
        $this->db->from('users u');
        $this->db->join('types t', 'u.type = t.type_id', 'inner');
        if(isset($start) && isset($limit)){
            $this->db->limit($limit,$start);
        }
        $this->db->order_by("u.created_date", "desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function userlist_info_data($id) {
//echo $id die;
        $condition = "uid =" . "'" . $id . "'";
        $this->db->select('u.*,t.*');
        $this->db->from('users u');
        $this->db->join('types t', 'u.type = t.type_id', 'inner');
        $this->db->where($condition);
        $this->db->order_by("u.created_date", "desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($username) {

        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function add_userlist($data) {
        $currentDate =date('Y-m-d H:i:s');
        $data['created_date']=$currentDate;
        //$condition = "username= '".$data['username']."' and email_id = '".$data['email_id']."'";
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            $this->db->insert('users', $data);
//            $query = "insert into users values('','" . $data['username'] . "','" . $data['password'] . "','" . $data['fname'] . "','" . $data['lname'] . "','" . $data['email_id'] . "','" . $data['photo'] . "','" . $data['type'] . "','" . $data['status'] . "',now())";
//            $this->db->query($query);
        }
    }

    public function edit_userlist($data) {

        //$condition = "username= '".$data['username']."' and email_id = '".$data['email_id']."'";

        $query = "update users set password='" . $data['password'] . "', fname='" . $data['fname'] . "', lname='" . $data['lname'] . "', email_id='" . $data['email_id'] . "',photo = '" . $data['photo'] . "', type='" . $data['type'] . "', status='" . $data['status'] . "' where uid='" . $data['userid'] . "'";
        $this->db->query($query);
        return 2;
    }

    public function delete_user_data($uid) {
        $this->db->where('uid', $uid);
        $result=$this->db->delete('users');
        return $result;
    }
    
    function employee_types() {
        $this->db->select('*');
        $this->db->from('types');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $result = $query->result_array();
        }
    }
}