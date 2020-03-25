<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// *************************************************************************
// *                                                                       *
// * Optimum LinkupComputers                              *
// * Copyright (c) Optimum LinkupComputers. All Rights Reserved                     *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: info@optimumlinkupsoftware.com                                 *
// * Website: https://optimumlinkup.com.ng								   *
// * 		  https://optimumlinkupsoftware.com							   *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// *                                                                       *
// *************************************************************************

//LOCATION : application - controller - Auth.php

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('web_model');
    }


    public function index(){
        $data = array();
        $data['page'] = 'Home';
        $ip = $_SERVER['REMOTE_ADDR'];
        // print_r($ip); exit();
        $status = $this->web_model->insert(array('ipAddress' => $ip),'uservisit');
        if ($_POST) {
           $data = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'message' => $_POST['message']
           );
           $userEmail = $_POST['email'];
           $status = $this->web_model->insert($data,'contact');
           if ($status == true) {
                $to = $userEmail;
                $subject = "Enquiry";
                $txt = "Our Team will contact with you soon...";
                $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";

                $success = mail($to,$subject,$txt,$headers);
                if ($success == true) {
                    $this->session->set_flashdata('success','Thank you for contact with me!...');
                    redirect(current_url());
                } 
                else {
                    $this->session->set_flashdata('error','Sorry Try Again');
                    redirect(current_url());
                }   
            } else {
                $this->session->set_flashdata('error','Sorry Try Again');
                redirect(current_url());
            }
         }
        $data['main_content'] = $this->load->view('web/home', $data, TRUE);
        $this->load->view('web/index', $data);
    }
    public function course($type){
        $data = array();
        $data['type'] = $type;
        $data['page'] = 'Course';
        $data['courses'] = $this->web_model->allCourses('courses');
        // echo "<pre>";
        // print_r($data['courses']); exit();
        $data['main_content'] = $this->load->view('web/course', $data, TRUE);
        $this->load->view('web/index', $data);
    }
    public function lessonByType($courseId,$type){
        $data = array();
        $data['page'] = 'Lesson';
        $data['type'] = $type;
        $data['lesson'] = $this->web_model->lessonByCourseAndType($courseId,$type);
        // echo "<pre>";
        //    print_r($data['lesson']); exit();
        $data['main_content'] = $this->load->view('web/lesson', $data, TRUE);
        $this->load->view('web/index', $data);
    }
    public function lesson($courseId){
        $data = array();
        $data['page'] = 'Lesson';
        $data['lesson'] = $this->web_model->lessonByCourse($courseId);
        $data['main_content'] = $this->load->view('web/lesson', $data, TRUE);
        $this->load->view('web/index', $data);
    }
    public function faq(){
        $data = array();
        $data['page'] = 'FAQ';
        $data['main_content'] = $this->load->view('web/faq', $data, TRUE);
        $this->load->view('web/index', $data);
    }
    public function contact(){
        $data = array();
        $data['page'] = 'Contact';
        if ($_POST) {
           $data = array(
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'message' => $_POST['message']
           );
           $userEmail = $_POST['email'];
           // echo "<pre>";
           // print_r($data);
           // echo $userEmail; exit();
           
           // chamanjaiswal96@gmail.com
           $status = $this->web_model->insert($data,'contact');
           if ($status == true) {
                $to = $userEmail;
                $subject = "Enquiry";
                $txt = "Our Team will contact with you soon...";
                $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";

                $success = mail($to,$subject,$txt,$headers);
                if ($success == true) {
                    $this->session->set_flashdata('success','Thank You !...');
                    redirect(current_url());
                } 
                else {
                    $this->session->set_flashdata('error','Sorry Try Again');
                    redirect(current_url());
                }   
            } else {
                $this->session->set_flashdata('error','Sorry Try Again');
                redirect(current_url());
            }
        } else {
            $data['main_content'] = $this->load->view('web/contact', $data, TRUE);
        }
        
        
        $this->load->view('web/index', $data);
    }




 /****************Function login**********************************
     * @type            : Function
     * @function name   : log
     * @description     : Authenticatte when uset try lo login.
     *                    if autheticated redirected to logged in user dashboard.
     *                    Also set some session date for logged in user.
     * @param           : null
     * @return          : null
     * ********************************************************** */
    public function log(){

        if($_POST){
            $query = $this->login_model->validate_user();

            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->first_name,
                        'email' =>$row->email,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $url = base_url('admin/dashboard');
                }
				redirect(base_url() . 'admin/dashboard', 'refresh');
            }else{
               redirect(base_url() . 'auth', 'refresh');
            }

        }else{
            $this->load->view('auth',$data);
        }
    }

 /*     * ***************Function logout**********************************
     * @type            : Function
     * @function name   : logout
     * @description     : Log Out the logged in user and redirected to Login page
     * @param           : null
     * @return          : null
     * ********************************************************** */

    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('admin/login', $data);
    }

}
