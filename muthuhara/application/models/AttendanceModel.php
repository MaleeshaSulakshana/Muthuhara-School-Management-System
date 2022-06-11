<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttendanceModel extends CI_Model {

    function select_attendance()
    {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->join('users', 'users.users_id = attendance.student_id', 'inner');

        $query = $this->db->get();
        return $query->result_array();
    }

    function select_attendance_by_date($date)
    {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->join('users', 'users.users_id = attendance.student_id', 'inner');
        $this->db->where('date',$date);

        $query = $this->db->get();
        return $query->result_array();
    }

    function select_attendance_by_month($month, $student_id)
    {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->join('users', 'users.users_id = attendance.student_id', 'inner');
        $this->db->where('users.users_id', $student_id);
        $this->db->like('attendance.date', $month);

        $query = $this->db->get();
        return $query->result_array();
    }

    function create_attendance($formData){

        $this->db->insert('attendance', $formData);
    }

    // function check_user($username,$password){
    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('email',$username);
    //     $this->db->where('password',$password);
    //     $query = $this->db->get();
    //     return $query;
    // }


    // function create_new_user($formData){

    //     $this->db->insert('users', $formData);
    // }

    // function edit_user($user_id, $formData){

    //     $this->db->where('email', (string)$user_id);
    //     $this->db->update('users', $formData);
    // }

    // function get_users_by_type($type){

    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('role_id',$type);

    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // function get_users_details_by_id($type){

    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('users_id',$type);

    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
	
}
