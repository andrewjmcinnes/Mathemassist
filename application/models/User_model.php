<?php
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    //register user
    public function register($enc_password, $userRole, $classId){
        $email = $this->input->post('email');
        //user data array
        $data = array(
            'userName' => $this->input->post('name'),
            'email' => $email,
            'password' => $enc_password,
            'role' => $userRole,
            'classId' => $classId
            );

        //insert user
        $this->db->insert('users', $data);


        return;
    }

    //log user in
    public function login($email, $password){
        //validate
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        //if there is a match return id, otherwise return false
        if($result->num_rows() == 1){
            return $result->row(0)->userId;
        } else{
            return false;
        }
    }
    
    //check email exists
    public function check_email_exists($email){
        $query = $this->db->get_where('users', array('email' => $email));
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

    //check class exists
    public function check_class_exists($class){
        $query = $this->db->get_where('class', array('classId' => $class));
        if(!empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

    //create a class with a teacher
    public function create_class(){
        $teacherName = $this->input->post('name');
        $data = array('teacherName' => $teacherName);

        //insert class
        $this->db->insert('class',$data);
        $query = $this->db->get_where('class', array('teacherName' => $teacherName));
        
        //return most recent entry
        return $query->last_row()->classId;
    }

    //get user data
    public function get_users($user_id = FALSE){
        if($user_id === FALSE){
            $classid = $this->session->userdata('class_id');
            $query = $this->db->get_where('users', array('classId' => $classid, 'role' => "P"));
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('userId' => $user_id));
        return $query->row_array();
    }
}