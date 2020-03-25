<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Easy extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('test_model');
    }
    public function index() {
        $data = array();
        $dosc = $this->test_model->test_easy();
        $temp = explode(" ", $dosc->lessonDesc);
        $list = array();
        foreach ($temp as $value) {          // code...
          $list[] = base64_encode($value);
        }
        $data['id']  = $id;
        $data['modeId']  = $dosc->modeId;
        $data['data']  = json_encode($list);
        $data['lenth']  = count($temp);
        $data['time']  = $dosc->time.":00";
        $this->load->view('port/index', $data);
    }

    public function lesson($id) {
        $data = array();
        $dosc = $this->test_model->test_lesson($id, '1');
        if (!empty($dosc)) {
          $temp = explode(" ", $dosc->lessonDesc);
          $list = array();
          foreach ($temp as $value) {          // code...
            $list[] = $value; //base64_encode($value);
          }
          $data['id']  = $id;
          $data['modeId']  = $dosc->modeId;
          $data['data']  = json_encode($list);
          $data['lenth']  = count($temp);
          $data['time']  = $dosc->time.":00";
          $this->load->view('port/index', $data);
        } else {
          $data = array(
            'msg' => 'The mode of typing test is not available',
            'color' => false
          );
          $this->session->set_flashdata($data);
            // echo print_r($this->session->flashdata($data));exit();
          redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //
    // $data = array();
    // $substr = '"';
    // $dosc = $this->test_model->test_easy();
    // $temp = explode(" ", $dosc->lessonDesc);
    // $last = array_key_last($temp);
    // foreach ($temp as $key => $value) {
    //   if($key == $last) {
    //     $substr .= $value.'"';
    //   }else{
    //     $substr .= str_replace(',', '', $value).'", "';
    //   }
    // }
    // // echo $substr;exit;
    // $data['data']  = $substr;
    // $data['time']  = $dosc->time;
    // $this->load->view('port/index', $data);
}
