<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

  public $data = array();
	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('course_model');
    }

    public function index(){
      $this->data['allCourses'] = $this->course_model->select('courses');
      $this->data['main_content'] = $this->load->view('admin/course/index', $this->data, TRUE);
      $this->load->view('admin/index', $this->data);
    }

    public function addNew(){
      if ($_POST) {
          $config['upload_path']          = './upload/images/course';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 1024;
          $config['max_width']            = 1024;
          $config['max_height']           = 1024;

          $this->load->library('upload', $config);
          $this->upload->do_upload('categoryImg');
          $img=$this->upload->data();
                  // echo "<pre>";
                  // print_r($img);
                  // exit();
          $pic=$img['file_name'];
          $courseId = preg_replace("/[^a-zA-Z]+/", "", strtolower($_POST['courseName']));
          $cId = $this->check_id($courseId);
          $data = array(
            'courseId' => $cId,
            'courseName' => $_POST['courseName'],
            // 'courseType' => $_POST['courseType'],
            'courseStatus' => $_POST['courseStatus'],
            'images' => $pic,
            'courseDescription' => $_POST['courseDescription']
          );
        // echo "<pre>";
        // print_r($data); exit();
          $status = $this->course_model->insert($data,'courses');
          if ($status == true) {
            $this->session->set_flashdata('success','Course Added Successfully...');
            redirect(base_url('admin/course'));
          } else {
            $this->session->set_flashdata('error','Sorry Try Again');
            redirect(base_url('admin/course'));
          }
      }
    }

    // function check_id($courseId){
    //   $info = $this->course_model->check_id($courseId);
    //   $counter = 1;
    //     if ($info == true) {
    //       $courseId = $courseId.$counter;
    //       $counter++;
    //       return check_id($courseId);
    //     } else {
    //           return $courseId; 
    //     }         
    // }

    function check_id($courseId){

      $info = $this->course_model->check_id($courseId);
      
        if ($info == true) {
        $numbers = (int)preg_replace('/[^0-9]/', '', $courseId);
        $letters = preg_replace('/[^a-zA-Z]/', '', $courseId);   
        $numbers = isset($numbers) ? $numbers + 1 : '';                               
            $courseId = $letters.$numbers;
            return $this->check_id($courseId);
        } else {
              return $courseId; 
        }         
    }

}
