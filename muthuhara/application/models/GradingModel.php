<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GradingModel extends CI_Model {

    function get_all_grading()
    {
        $this->db->select('*');
        $this->db->from('grading');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_grading_with_students_name()
    {
        $this->db->select('*');
        $this->db->from('grading');
        $this->db->join('users', 'users.users_id = grading.student_id', 'inner');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_grading_by_month($month)
    {
        $this->db->select('*');
        $this->db->from('grading');
        $this->db->join('users', 'users.users_id = grading.student_id', 'inner');
        $this->db->where('month',$month);

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_grading_by_student_id($student_id)
    {
        $this->db->select('*');
        $this->db->from('grading');
        $this->db->join('users', 'users.users_id = grading.student_id', 'inner');
        $this->db->where('users.users_id',$student_id);

        $query = $this->db->get();
        return $query->result_array();
    }

    function create_grading($formData){

        $this->db->insert('grading', $formData);
    }

    // function check_user($username,$password){
    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('email',$username);
    //     // $this->db->where('password',md5($password));
    //     $this->db->where('password',$password);
    //     $query = $this->db->get();
    //     return $query;
    // }
	
}
