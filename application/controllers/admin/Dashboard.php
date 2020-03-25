<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public $data = array();
	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
    }

    public function index(){
      $this->data['allVisiter'] = count($this->common_model->selectAllData('uservisit'));
      $this->data['courses'] = count($this->common_model->selectAllData('courses'));
      $this->data['lesson'] = count($this->common_model->selectAllData('lesson'));
      $this->data['contact'] = count($this->common_model->selectAllData('contact'));
      $this->data['main_content'] = $this->load->view('admin/home', $this->data, TRUE);
      $this->load->view('admin/index', $this->data);
    }
    public function enquiry(){
      $this->data['enquiry'] = $this->common_model->selectEnquiry('contact');
      // echo "<pre>";
      // print_r($this->data['enquiry']); exit();
      $this->data['main_content'] = $this->load->view('admin/enquiry', $this->data, TRUE);
      $this->load->view('admin/index', $this->data);
    }

}
