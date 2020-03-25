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

class Test extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('login_model');
        $this->load->model('test_model');
    }
    // public function index(){
    //     $data = array();
    //     $this->load->view('port/index', $data);
    // }

    public function index($courseId) {
        $data = array();
        $data['course'] = $courseId;
        $data['duration'] = "2";
        $modeId = "1";
        $dosc = $this->test_model->testByCourse($courseId,$modeId);
        $data['paraId'] = $dosc->id;
        $data['paraByCourse'] = $this->test_model->testByCoursePara($courseId,$modeId);
        // echo "<pre>";
        // print_r($dosc); exit();
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          // $list[] = base64_encode($value);
          $list[] = $value;
        }
        // $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $data['duration'].":00";
        $this->load->view('port/english', $data);
    }

    function paraByCourse($duration,$paraId,$courseId,$modeId)
    {
    	$data = array();
    	$data['duration'] = $duration;
    	$data['paraId'] = $paraId;
    	$data['course'] = $courseId;
    	$data['modeId'] = $modeId;
        $dosc = $this->test_model->testByCourse($courseId,$modeId);
        $data['paraByCourse'] = $this->test_model->testByCoursePara($courseId,$modeId);
        // echo "<pre>";
        // print_r($data['paraByCourse']); exit();
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          // $list[] = base64_encode($value);
          $list[] = $value;
        }
        // $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $duration.":00";
        $this->load->view('port/english', $data);
    }

    public function krutiDev($courseId) {
        $data = array();
        // print_r($courseId); exit();
        $data['course'] = $courseId;
        $data['duration'] = "2";
        $modeId = "1";
        $dosc = $this->test_model->testByCourseHindi($courseId,$modeId);
        $data['paraId'] = $dosc->id;
        $data['paraByCourse'] = $this->test_model->testByCourseParaHindi($courseId,$modeId);
        // echo "<pre>";
        // print_r($dosc); exit();
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          $list[] = base64_encode($value);
          // $list[] = $value;
        }
        // $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $data['duration'].":00";
        $this->load->view('port/kruti_dev', $data);
    }

    function kdParaByCour($duration,$paraId,$courseId,$modeId)
    {
    	$data = array();
    	$data['duration'] = $duration;
    	$data['paraId'] = $paraId;
    	$data['course'] = $courseId;
    	$data['modeId'] = $modeId;
        $dosc = $this->test_model->testByCourseHindi($courseId,$modeId);
        $data['paraByCourse'] = $this->test_model->testByCourseParaHindi($courseId,$modeId);
        // echo "<pre>";
        // print_r($data['paraByCourse']); exit();
        if(!empty($dosc)){
        	$temp = explode(" ", $dosc->lessonDesc);
	        $list = array();
	        foreach ($temp as $value) {          // code...
	          $list[] = base64_encode($value);
	          // $list[] = $value;
	        }
        }else{
        	$list[] = "Data Not Found";
        }
        // $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $duration.":00";
        $this->load->view('port/kruti_dev', $data);
    }

    public function mangal($courseId) {
        $data = array();
        // print_r($courseId); exit();
        $data['course'] = $courseId;
        // print_r($data['course']); exit();
        $dosc = $this->test_model->testByCourseHindi($courseId);
        $data['paraByCourse'] = $this->test_model->testByCourseParaHindi($courseId);
        // echo "<pre>";
        // print_r($data['paraByCourse']); exit();
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          $list[] = base64_encode($value);
          // $list[] = $value;
        }
        // $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = "2".":00";
        $this->load->view('port/index', $data);
    }

    
}
