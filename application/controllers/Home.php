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
    $data['title'] = "title"

  }
}
/* End of file ${TM_FILENAME:} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/controllers/} */
/* End of file ${TM_FILENAME:filename.php} */
/* Location: ./${TM_FILEPATH/.+((?:application|system).+)//:application/*models|controllers*/.php/} */
