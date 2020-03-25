<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Lesson extends CI_Controller {



  public $data = array();

	public function __construct(){

        parent::__construct();

        check_login_user();

       $this->load->model('common_model');

       $this->load->model('lesson_model');

    }



    public function index(){

      $this->data['allCourses'] = $this->common_model->select('courses');

      // echo "<pre>";

      // print_r($this->data['allCourses']); exit();

      $this->data['mode'] = $this->common_model->select('mode');
      // echo "<pre>";

      // print_r($this->data['mode']); exit();

      $this->data['lesson'] = $this->lesson_model->lessonList();

      // echo "<pre>";

      // print_r($this->data['lesson']); exit();

      $this->data['main_content'] = $this->load->view('admin/lesson/index', $this->data, TRUE);

      $this->load->view('admin/index', $this->data);

    }



    public function addNew(){

      if ($_POST) {

        $data = array(

          'lessonName' => $_POST['lessonName'],

          'type' => $_POST['type'],

          'courseId' => $_POST['courseId']

        );

        // echo "<pre>";

        // print_r($data); exit();



        $lessonId = $this->common_model->insert($data,'lesson');



        if (is_array($_POST)) {

        $count = 0;

          for($i = 0; $i < count($_POST['modeId']); $i++){

            $modedata = array(

              'modeId' => $_POST['modeId'][$i],

              'time' => $_POST['time'][$i],

              'lessonDesc' => $_POST['lessonDesc'][$i],

              'lessonId' => $lessonId

            );

            // echo "<pre>";

            // print_r($modedata); 

            $status = $this->common_model->insert($modedata,'lessonmode');

          }

          // exit();

          if ($status == true) {

            $this->session->set_flashdata('success','Lesson Added Successfully...');

            redirect(base_url('admin/lesson'));

          } else {

            $this->session->set_flashdata('error','Sorry Try Again');

            redirect(base_url('admin/lesson'));

          }

        }

      }

    }

    public function delete($id){
      
      $status=$this->lesson_model->lessonDelete($id);
      if ($status== true) {
        $this->session->set_flashdata('success','Record Deleted Successfully...',2);
        redirect(base_url('admin/lesson'));
      } 
      else {
        $this->session->set_flashdata('error','Sorry Try Again',2);
        redirect(base_url('admin/lesson'));
      }
      
    }

    public function lessonEdit($id){

      $this->data['allCourses'] = $this->common_model->select('courses');

      // echo "<pre>";

      // print_r($this->data['allCourses']); exit();

      $this->data['mode'] = $this->common_model->select('mode');

      $this->data['lessonData'] = $this->common_model->select_row($id,'lesson');
      $this->data['lessonModeData'] = $this->lesson_model->LessonModeData($id,'lessonmode');
      // echo "<pre>";

      // print_r($this->data['lessonModeData']); exit();
      if ($_POST) {
        $data = array(
          'lessonName' => $_POST['lessonName'],
          'type' => $_POST['type'],
          'courseId' => $_POST['courseId']
        );
        $this->common_model->update($data,$id,'lesson');

        if (is_array($_POST)) {

          $count = 0;

          for($i = 0; $i < count($_POST['modeId']); $i++){
            $lessonModeId = $_POST['lessonModeId'][$i];
            $modedata = array(

              'modeId' => $_POST['modeId'][$i],

              'time' => $_POST['time'][$i],

              'lessonDesc' => $_POST['lessonDesc'][$i],

            );
            // echo "<pre>";
            // echo $lessonModeId;
            // print_r($modedata); 
            $status = $this->common_model->update($modedata,$lessonModeId,'lessonmode');
          }
          // exit();
          if ($status == true) {

            $this->session->set_flashdata('success','Lesson Update Successfully...');

            redirect(current_url());

          } else {

            $this->session->set_flashdata('error','Sorry Try Again');

            redirect(current_url());

          }
        }
        
      }
      
      $this->data['main_content'] = $this->load->view('admin/lesson/editLesson', $this->data, TRUE);

      $this->load->view('admin/index', $this->data);

    }

    public function addMoreLessonMode(){
      if (is_array($_POST)) {

          $count = 0;
          $lessonID = $_POST['lessonID'];
          for($i = 0; $i < count($_POST['modeId']); $i++){
            
            $modedata = array(

              'modeId' => $_POST['modeId'][$i],

              'time' => $_POST['time'][$i],

              'lessonDesc' => $_POST['lessonDesc'][$i],
              'lessonID' => $lessonID,

            );
            // echo "<pre>";
            // print_r($modedata); 
            $status = $this->lesson_model->insert($modedata,'lessonmode');
          }
          if ($status == true) {

            $this->session->set_flashdata('success','Data Added Successfully...');

            redirect(base_url('admin/lesson/lessonEdit/').$lessonID);

          } else {

            $this->session->set_flashdata('error','Sorry Try Again');

            redirect(base_url('admin/lesson/lessonEdit/').$lessonID);

          }
        }
      
    }
    public function deleteMode($id,$lessonID){
      $status = $this->common_model->delete($id,'lessonmode');
      if ($status == true) {
            redirect(base_url('admin/lesson/lessonEdit/').$lessonID);

          }
    }
}
