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

class Join extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('login_model');

    }


    public function addMember1(){

          if ($_POST) {
                  $user_id =1;
                    $order = array(
                      'order_id' => hash('sha256', microtime() ),
                      'amount' => $user_id,
                      'user_id' => $user_id,
                      'type' => 'student subscription'
                    );
                    $order_id = $this->common_model->insert($order, 'subscription');
                    if($order_id){
                      $payment = array();
                      $payment['ORDER_ID'] = $order['order_id'];
                      $payment['TXN_AMOUNT'] = 100;
                      $payment['CHANNEL_ID'] = 'WEB';
                      $payment['INDUSTRY_TYPE_ID'] = 'Retail';
                      $payment['CUST_ID'] = $user_id;
                      $this->payment->paytmpost($payment);
                    }
                  }
            }
            public function collback(){
              echo "done";
            }

    public function index(){
        $data = array();
        $data['page'] = 'Join Us';
        $data['country'] = $this->common_model->get_all_country();
        // $data['main_content'] = $this->load->view('join/index', $data, TRUE);
        $this->load->view('join/index', $data);
    }
    public function slider(){
        $data = array();
        $data['page'] = 'Join Us';
        $data['country'] = $this->common_model->get_all_country();
        // $data['main_content'] = $this->load->view('join/index', $data, TRUE);
        $this->load->view('join/slider', $data);
    }
    public function member(){
        $data = array();
        $data['page'] = 'Mamber Joining';
        // $data['country'] = $this->common_model->get_all_country();
        $data['main_content'] = $this->load->view('join/index', $data, TRUE);
        $this->load->view('join/index', $data);
    }

    public function addMember(){

          if ($_POST) {

              if (isset($_FILES)) {
                $file = $this->common_model->upload_image(100000);
              }
              if($_POST['join_amount'] == 1){
                $join_amount = 200;
              }else if($_POST['join_amount'] == 2){
                $join_amount = 500;
              }else{
                $this->session->set_flashdata('msg', 'Member Registration Faild, invalid Join Amount');
                redirect(base_url('media/join'));
              }

              $data = array(
                  'first_name' => $_POST['first_name'],
                  'last_name' => $_POST['last_name'],
                  'mobile' => $_POST['mobile'],
                  'images' => isset($file['images']) ? $file['images'] : 'join/images/user.png',
                  'thumb' => isset($file['thumb']) ? $file['images'] : 'join/images/user.png',
                  'email' => $_POST['email'],
                  'country' => $_POST['country'],
                  'city' => $_POST['city'],
                  'postcode' => $_POST['postcode'],
                  'join_amount' => $join_amount,
                  'password' => md5($_POST['password']),
                  'role' => "104",
                  'created_at' => current_datetime()
              );
              $data = $this->security->xss_clean($data);

                if ($data) {
                    $user_id = $this->common_model->insert($data, 'user');
                    $details = array(
                      'user_id' =>  $user_id,
                      'address' =>  $_POST['address'],
                      'apartment' =>  $_POST['apartment'],
                      'college-name' =>  $_POST['college-name'],
                      'enrollment_no' =>  $_POST['enrollment_no'],
                      'edu-session' =>  $_POST['edu-session'],
                      'edu-college-city' =>  $_POST['edu-college-city'],
                    );
                    $details = $this->security->xss_clean($details);
                    $id = $this->common_model->insert($details, 'user_details');
                    $order = array(
                      'order_id' => hash('sha256', microtime() ),
                      'amount' => $user_id,
                      'user_id' => $user_id,
                      'type' => 'student subscription'
                    );
                    $order_id = $this->common_model->insert($order, 'subscription');
                    if($order_id){
                      $payment = array();
                      $payment['ORDER_ID'] = $order['order_id'];
                      $payment['TXN_AMOUNT'] = $order['order_id'];
                      $payment['CHANNEL_ID'] = $order['order_id'];
                      $payment['INDUSTRY_TYPE_ID'] = $order['order_id'];
                      $payment['CUST_ID'] = $order['order_id'];
                    }
                    if ($id) {
                      $this->session->set_flashdata('msg', 'Member Registration Exist, try another Phone');
                      redirect(base_url('media/join/congratulations'));
                    }
                  }
              } else {
                  $this->session->set_flashdata('msg', 'Phone already exist, try another Phone');
                  redirect(base_url('admin/user'));
              }

    }


    public function congratulations(){
      $this->load->view('join/congrat');
    }

    public function phone_confirmation(){
      $data = array();
      $data['page'] = 'OTP Confirmation';
      $data['mobile'] = $this->session->userdata('mobile');
      $data['code'] = $this->session->userdata('code');
      $this->load->view('join/otp', $data);
    }
    public function otp_config(){
      if ($_POST) {
        $output = array();
        if($_POST['code'] == $this->session->userdata('code')){
          $output['config'] = TRUE;
        }else{
          $output['config'] = FALSE;
        }
        echo json_encode($output);
      }else{

      }
    }
    public function getState()
    {
        if ($_POST) {
          $output = '';
          $data = $this->common_model->get_all_states_by_id($_POST['country_id']);
          foreach ($data as $value) {
            $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
          }
          echo json_encode($output);
        }else{

        }

    }
  public function getCite()
  {
      if ($_POST) {
        $output = '';
        $data = $this->common_model->get_all_city_by_id($_POST['state_id']);
        foreach ($data as $value) {
          $output .= '<option value="'.$value["id"].'">'.$value['name'].'</option>';
        }
        echo json_encode($output);
      }else{

      }

  }


}
