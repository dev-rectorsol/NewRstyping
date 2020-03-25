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



class Auth extends CI_Controller {



    public function __construct(){

        parent::__construct();

        $this->load->model('login_model');
        // if ($this->session->userdata($data)) {
        //   redirect(base_url('admin/dashboard'));
        // } else {
        //   redirect(base_url() . 'auth', 'refresh');
        // }

    }

    public function index(){

        $data = array();

        $data['page'] = 'Auth';
        
        

        $this->load->view('admin/login', $data);

    }

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

    function logout(){

        $this->session->sess_destroy();

        $data = array();

        $data['page'] = 'logout';

        $this->load->view('admin/login', $data);

    }



}

