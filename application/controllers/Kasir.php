<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kasir extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
  public function index()
  {
    echo "string";
  }
}
/* End of file ${TM_FILENAME:kasir.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Kasir/:application/controllers/kasir.php} */
