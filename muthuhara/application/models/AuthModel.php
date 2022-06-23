<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    function check_user($username,$password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$username);
        $this->db->where('password',md5($password));
        // $this->db->where('password',$password);
        $query = $this->db->get();
        return $query;
    }


    function create_new_user($formData){

        $this->db->insert('users', $formData);
    }

    function edit_user($user_id, $formData){

        $this->db->where('users_id', $user_id);
        $this->db->update('users', $formData);
    }

    function get_users_by_type($type){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_id',$type);

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_users_details_by_id($type){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('users_id',$type);

        $query = $this->db->get();
        return $query->result_array();
    }

    function delete_user($users_id){

        $this->db->where('users_id',$users_id);
        $this->db->delete('users');
    }
	
}
