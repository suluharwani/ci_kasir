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
}
