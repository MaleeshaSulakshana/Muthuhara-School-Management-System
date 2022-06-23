<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('AuthModel');
	}


	public	function index()
	{
		$this->template->layout_simple('login');
	}

    public function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){
           $this->auth();
        }else{
            $this->index();
        }
    }

    public function auth(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $result = $this->AuthModel->check_user($username,$password);

        if($result -> num_rows()>0){
            $data = $result->row_array();
            $name = $data['username'];
            $email = $data['email'];
            $role_id = $data['role_id'];
            $user_id = $data['users_id'];

            $sesdata = array(
                'user_id' => $user_id,
                'username' => $username,
                'email' => $email,
                'role_id' => $role_id,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sesdata);
            if($role_id==='1'){
                    // $this->template->layout_admin('admin/dashboard');
                    redirect(base_url().'Admin/enter');
            }elseif ($role_id === '2') {
                     redirect(base_url().'Teacher/enter');
            }else{
                     redirect(base_url().'Student/enter');
            }
            
        }else{
                   $this->session->set_flashdata('error','Invalid username and password');
                   $this->template->layout_simple('login');
        }

        
    }

    public function logout(){
            
        $this->session->unset_userdata('username');
        redirect('Auth/index');
    }

}
