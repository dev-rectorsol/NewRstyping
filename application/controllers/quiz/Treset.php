<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Treset extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('test_model');
    }
    public function index($id, $mode, $time) {
      $data = array();
      $dosc = $this->test_model->test_lesson($id, $mode);
      if (!empty($dosc)) {
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          $list[] = base64_encode($value);
        }
        $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $time.":00";
        $this->load->view('port/index', $data);
      } else {
          $data = array(
            'msg' => 'The mode of typing test is not available :(',
            'color' => FALSE
          );

          $this->session->set_flashdata($data);
          // echo print_r($this->session->flashdata($data));exit();
          redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
