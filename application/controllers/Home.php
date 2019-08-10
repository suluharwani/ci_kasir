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
    $this->load->view('login/login', $data);
  }
}
