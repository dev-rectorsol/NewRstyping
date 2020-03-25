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

class High extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('test_model');
    }
    public function index() {
        $data = array();
        $dosc = $this->test_model->test_high();
        $temp = explode(" ", $dosc->lessonDesc);
        $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($temp);
        $data['lenth']  = count($temp);
        $data['time']  = $dosc->time.":00";
        $this->load->view('port/index', $data);
    }

    public function lesson($id) {
        $data = array();
        $dosc = $this->test_model->test_lesson($id, '3');
        if(!empty($dosc)){
          $temp = explode(" ", $dosc->lessonDesc);
          $data['id']  = $id;
          $data['modeId']  = $dosc->modeId;
          $data['data']  = json_encode($temp);
          $data['lenth']  = count($temp);
          $data['time']  = $dosc->time.":00";
          $this->load->view('port/index', $data);
        } else {
            $data = array(
              'msg' => 'The mode of typing test is not available :(',
              'color' => false
            );
            $this->session->set_flashdata($data);
            // echo print_r($this->session->flashdata($data));exit();
            redirect($_SERVER['HTTP_REFERER']);
          }
    }
}
