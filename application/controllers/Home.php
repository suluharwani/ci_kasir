<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
  public function index()
  {
    $data['title'] = "Login";
    //check admin level
    $this->load->model('Mdl_user', 'model_user');
    $jumlah_admin = $this->model_user->check_user_level(1);
    if ($jumlah_admin==0) {
      //register view
      $this->load->view('register/register', $data);
    }else{
      //login view if user admin exist
      $this->load->view('login/login', $data);
    }
  }
  function check_new_user(){
    $username = $this->input->post('username');
    $this->load->model('Mdl_user', 'model_user');
    //check nama yang sama(similiar name)
    //TRUE = belum tersedia
    $checking = $this->model_user->check_username($username);
    //show result
    if(!$checking || strlen($username) <5 || strlen($username) >50 ){
      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i> Username telah digunakan atau kurang dari 5 atau lebih dari 50 karakter</span></label>';
    }
    else {
      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username tersedia</span></label>';
    }
  }
}
