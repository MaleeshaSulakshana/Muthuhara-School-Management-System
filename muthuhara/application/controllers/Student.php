<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			if($this->session->userdata('logged_in')!== true){
                $this->template->layout_simple('login');
            }

            $this->load->library('paypal_lib');
	}

    function index(){
        if($this->session->userdata('role_id')==='3'){
            $this->template->layout_student('student/dashboard');
        }else{
            echo "Access Denied!";
        }
    }

    function enter(){
        if($this->session->userdata('username')!= ''){
            $this->template->layout_student('student/dashboard');    
        }else{
            redirect(base_url().'Auth/index');
        }
    }


    // View payments
    function view_students_payments(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='3'){

            $student_id = $this->session->userdata('user_id');

            $this->load->model('PaymentsModel');
            $data['payments'] =  $this->PaymentsModel->get_all_payments_by_student_id($student_id);
            $this->template->layout_student('student/view_students_payments', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // View attendance
    function view_students_attendance(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='3'){

            $date = date("Y-m");
            $student_id = $this->session->userdata('user_id');

            $data = [];

            $this->load->model('AttendanceModel');
            $data['attendances'] =  $this->AttendanceModel->select_attendance_by_month($date, $student_id);
            $this->template->layout_student('student/view_students_attendance', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    function view_students_attendance_by_date(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='3'){

            $date = $this->input->post('view_date');
            $student_id = $this->session->userdata('user_id');

            $data = [];

            $this->load->model('AttendanceModel');
            $data['attendances'] =  $this->AttendanceModel->select_attendance_by_month($date, $student_id);
            $this->template->layout_student('student/view_students_attendance', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    
    // View grading
    function view_student_grading(){

        if($this->session->userdata('username')!= ''
            && $this->session->userdata('role_id')==='3'){

            $student_id = $this->session->userdata('user_id');

            $data = [];

            $this->load->model('GradingModel');
            $data['gradings'] =  $this->GradingModel->get_all_grading_by_student_id($student_id);
            $this->template->layout_student('student/view_students_grading', $data);
        

        }else{
            redirect(base_url().'Auth/index');
        }

    }

    // Paypal
    function student_pay_fees(){

        $form = $this->input->post();
        $payment = $form['payment'];

        //Set variables for paypal form
        $returnURL = base_url().'Student/success/'.$payment; //payment success url
        $cancelURL = base_url().'Student/cancel'; //payment cancel url
        $notifyURL = base_url().'Student/ipn'; //ipn url
        //get particular product data
        // $product = $this->product->getRows($id);

        $userID = 1; //current user id
        $logo = base_url().'assets/images/logo.png';

        $userID = '';

        $product = [];
        $product['name'] = "";
        $product['id'] = "";
        $product['amount'] = $payment;
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);

        $this->paypal_lib->add_field('item_name', $product['name']);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['id']);
        $this->paypal_lib->add_field('amount',  $product['amount']);  

        $this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
    }


    function success($amount) {

        $payment = $amount;
        $date = date("Y-m");
        $student_id = $this->session->userdata('user_id');

        $formArray = array();
        $formArray['student_id'] = $student_id;
        $formArray['payment_amount'] = $payment;
        $formArray['date'] = $date;
            
        $this->load->model('PaymentsModel');
        $this->PaymentsModel->create_payment($formArray);

        //get the transaction data
        $paypalInfo = $this->input->get();

        // $data['item_number'] = $paypalInfo['item_number'];
        // $data['txn_id'] = $paypalInfo["tx"];
        // $data['payment_amt'] = $paypalInfo["amt"];
        // $data['currency_code'] = $paypalInfo["cc"];
        // $data['status'] = $paypalInfo["st"];

        //pass the transaction data to view
        // $this->load->view('paypal/success', $data);

        redirect(base_url().'Student/enter');
    }

    function cancel() {
        // $this->load->view('paypal/cancel');

        redirect(base_url().'Student/enter');
    }

    function ipn() {
        //paypal return transaction details array
        $paypalInfo = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id'] = $paypalInfo["item_number"];
        $data['txn_id'] = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["payment_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status'] = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;
        $result = $this->paypal_lib->curlPost($paypalURL, $paypalInfo);

        //check whether the payment is verified
        if (preg_match("/VERIFIED/i", $result)) {
            //insert the transaction data into the database
            $this->product->insertTransaction($data);
        }
    }

}