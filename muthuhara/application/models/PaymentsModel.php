<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentsModel extends CI_Model {

    function get_all_payments()
    {
        $this->db->select('*');
        $this->db->from('payments');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_payments_with_students_name()
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->join('users', 'users.users_id = payments.student_id', 'inner');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_payments_by_month($month)
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->join('users', 'users.users_id = payments.student_id', 'inner');
        $this->db->where('date',$month);

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_payments_by_date($date)
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->where('date',$date);

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_payments_by_student_id($student_id)
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->join('users', 'users.users_id = payments.student_id', 'inner');
        $this->db->where('users.users_id',$student_id);

        $query = $this->db->get();
        return $query->result_array();
    }

    function create_payment($formData){

        $this->db->insert('payments', $formData);
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
