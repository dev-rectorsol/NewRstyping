<?php

class Course_model extends CI_Model {



    //-- insert function

    public function insert($data,$table){

        $this->db->insert($table,$data);

        return true;

    }

    public function select($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('created', 'desc');
        $rec = $this->db->get();
        if ($rec->num_rows()> 0) {
            return $rec->result_array();
        } else {
           return false;
        }
        
    }

    public function check_id($courseId){

        $this->db->select('*');

        $this->db->from('courses');

        $this->db->where('courseId', $courseId);

        $query = $this->db->get();

        if($query->num_rows() == 1) {

            return true;

        }else{

            return false;

        }

    }



    public function edit_option_md5($action, $id, $table){

        $this->db->where('md5(id)',$id);

        $this->db->update($table,$action);

        return;

    }



    //-- check post email

    public function check_email($email){

        $this->db->select('*');

        $this->db->from('user');

        $this->db->where('email', $email);

        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1) {

            return $query->result();

        }else{

            return false;

        }

    }





    // check valid user by id

    public function validate_id($id){

        $this->db->select('*');

        $this->db->from('user');

        $this->db->where('md5(id)', $id);

        $this->db->limit(1);

        $query = $this->db->get();

        if($query -> num_rows() == 1){

            return $query->result();

        }

        else{

            return false;

        }

    }







    //-- check valid user

    function validate_user(){



        $this->db->select('*');

        $this->db->from('user');

        $this->db->where('email', $this->input->post('user_name'));

        $this->db->where('password', md5($this->input->post('password')));

        $this->db->limit(1);

        $query = $this->db->get();



        if($query->num_rows() == 1){

           return $query->result();

        }

        else{

            return false;

        }

    }







}

