<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			if($this->session->userdata('logged_in')!== true){
                $this->template->layout_simple('login');
            }
	}

    function index(){
        if($this->session->userdata('role_id')==='1'){
            $this->template->layout_admin('admin/dashboard');
        }else{
            echo "Access Denied!";
        }
    }

    function enter(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){
            $this->template->layout_admin('admin/dashboard');    
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // View admins
    function view_admins(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_by_type(1);
            $this->template->layout_admin('admin/view_admins', $data);
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // View teachers
    function view_teachers(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_by_type(2);
            $this->template->layout_admin('admin/view_teachers', $data);
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // View students
    function view_students(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_by_type(3);
            $this->template->layout_admin('admin/view_students', $data);
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // Add new admin route
    function add_admin(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->template->layout_admin('admin/add_new_admin');
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // Add new student route
    function add_student(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->template->layout_admin('admin/add_new_student');
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // Add new teacher route
    function add_teacher(){
        if($this->session->userdata('username')!= ''
        && $this->session->userdata('role_id')==='1'){

            $this->template->layout_admin('admin/add_new_teacher');
        
        }else{
            redirect(base_url().'Auth/index');
        }
    }

    // Registration route for admin
    function admin_registration_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){
           $this->create_user(1);
        }
        else{
            $this->add_admin();
        }
    }

    // Registration route for teachers
    function teacher_registration_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){
           $this->create_user(2);
        }
        else{
            $this->add_teacher();
        }
    }

    // Registration route for students
    function student_registration_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){
           $this->create_user(3);
        }
        else{
            $this->add_student();
        }
    }

    // Route for create user
    function create_user($role_id)
    {
        $active = 1;

        $formArray = array();
        
        $formArray['email'] = $this->input->post('email');
        $formArray['username'] = $this->input->post('username');
        $formArray['password'] = md5($this->input->post('password'));
        $formArray['role_id'] = $role_id;
        $formArray['active'] = $active;
        
        $this->load->model('AuthModel');
        $this->AuthModel->create_new_user($formArray);

        $this->session->set_flashdata('success','Recode added successfully!');

        if ($role_id == 1)
        {
            redirect(base_url().'admin/view_admins' );            
        }
        else if ($role_id == 2)
        {
            redirect(base_url().'admin/view_teachers' );            
        }
        else if ($role_id == 3)
        {
            redirect(base_url().'admin/view_students' );            
        }
    }
    

    // Function for update user details
    function edit_user_details($email, $role_id)
    {

        $formArray = array();
        $formArray['username'] = $this->input->post('username');

        // $formEmail = (string)$this->input->post('users_email');

        $this->load->model('AuthModel');
        $this->AuthModel->edit_user($email, $formArray);

        $this->session->set_flashdata('success','Recode update successfully!');

        if ($role_id == '1')
        {
            redirect(base_url().'admin/view_admins' );            
        }
        else if ($role_id == '2')
        {
            redirect(base_url().'admin/view_teachers' );            
        }
        else if ($role_id == '3')
        {
            redirect(base_url().'admin/view_students' );            
        }
    }

    // Function for edit admin details
    function edit_admin_details($id)
    {
        $this->edit_user_details($id,'1');
    }

    // Function for edit teacher details
    function edit_teacher_details($id)
    {
        $this->edit_user_details($id,'2');
    }

    // Function for edit student details
    function edit_student_details($id)
    {
        $this->edit_user_details($id,'3');
    }

    // Function for view admin details
    function view_admin_details($user_id)
    {

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_details_by_id($user_id);
            $this->template->layout_admin('admin/view_admin_details_by_id', $data);

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // Function for delete user details
    function delete_user_details($user_id, $type)
    {

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $this->AuthModel->delete_user((int)$user_id);

            if ($type==='1')
            {
                redirect(base_url().'admin/view_admins');
            }
            else if ($type==='2')
            {
                redirect(base_url().'admin/view_teachers');
            }
            else if ($type==='3')
            {
                redirect(base_url().'admin/view_students');
            }

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // View teacher details
    function view_teacher_details($user_id){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_details_by_id($user_id);
            $this->template->layout_admin('admin/view_teacher_details_by_id', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // View student details
    function view_student_details($user_id){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $this->load->model('AuthModel');
            $data['users'] =  $this->AuthModel->get_users_details_by_id($user_id);
            $this->template->layout_admin('admin/view_student_details_by_id', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // View payments
    function view_payments($month=''){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $this->load->model('PaymentsModel');
            $data['payments'] =  $this->PaymentsModel->get_all_payments();
            $this->template->layout_admin('admin/view_payments', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

        // View grading
        function view_students_grading(){

            if($this->session->userdata('username')!= ''
                && $this->session->userdata('role_id')==='1'){
    
                $month = date("Y-m");
    
                $data = [];
    
                $this->load->model('AuthModel');
                $data['students'] =  $this->AuthModel->get_users_by_type(3);
    
                $this->load->model('GradingModel');
                $data['gradings'] =  $this->GradingModel->get_all_grading_by_month($month);
                $this->template->layout_admin('admin/view_students_grading', $data);
            
    
            }else{
                redirect(base_url().'Auth/index');
            }
    
        }
    
        function view_students_grading_by_month(){
    
            if($this->session->userdata('username')!= ''
                && $this->session->userdata('role_id')==='1'){
    
                $month = $this->input->post('view_month');
    
                $data = [];
    
                $this->load->model('AuthModel');
                $data['students'] =  $this->AuthModel->get_users_by_type(3);
    
                $this->load->model('GradingModel');
                $data['gradings'] =  $this->GradingModel->get_all_grading_by_month($month);
                $this->template->layout_admin('admin/view_students_grading', $data);
            
    
            }else{
                redirect(base_url().'Auth/index');
            }
    
        }
    
    
        function insert_grading(){
    
            if($this->session->userdata('username')!= ''
                && $this->session->userdata('role_id')==='1'){
    
                $formInfo = $this->input->post();
                $month = $this->input->post('month');
                $sname   = $formInfo['sname'];
                $garde   = $formInfo['grade'];
    
                // $date = date("Y-m-d");
    
                $formArray = array();
                
                $formArray['student_id'] = $sname;
                $formArray['grade'] = $garde;
                $formArray['month'] = $month;
                
                $this->load->model('GradingModel');
                $this->GradingModel->create_grading($formArray);
    
                redirect(base_url().'admin/view_students_grading');
    
            }else{
                redirect(base_url().'Auth/index');
            }
    
        }

    // Attendance
    function view_students_attendance(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $date = date("Y-m-d");

            $data = [];

            $this->load->model('AuthModel');
            $data['students'] =  $this->AuthModel->get_users_by_type(3);

            $this->load->model('AttendanceModel');
            $data['attendances'] =  $this->AttendanceModel->select_attendance_by_date($date);
            $this->template->layout_admin('admin/view_students_attendance', $data);

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    function view_students_attendance_by_date(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $date = $this->input->post('view_date');

            $data = [];

            $this->load->model('AuthModel');
            $data['students'] =  $this->AuthModel->get_users_by_type(3);

            $this->load->model('AttendanceModel');
            $data['attendances'] =  $this->AttendanceModel->select_attendance_by_date($date);
            $this->template->layout_admin('admin/view_students_attendance', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }


    function insert_attendance(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='1'){

            $date = $this->input->post('date');

            $formInfo = $this->input->post();
            $sname   = $formInfo['sname'];

            // $date = date("Y-m-d");

            $formArray = array();
            
            $formArray['student_id'] = $sname;
            $formArray['is_available'] = "yes";
            $formArray['date'] = $date;
            
            $this->load->model('AttendanceModel');
            $this->AttendanceModel->create_attendance($formArray);

            redirect(base_url().'admin/view_students_attendance');

        }else{
            redirect(base_url().'Auth/index');
        }

    }

}