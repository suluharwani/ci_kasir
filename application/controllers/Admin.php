<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
  public function index()
  {

  }
  function check_adm(){
    echo "check admin";
  }
  public function backup_database(){
  	$this->load->dbutil();
  	$prefs = array(
  		'format'      => 'zip',
  		'filename'    => 'erigrafika.sql',
  	);
  	$backup =& $this->dbutil->backup($prefs);
  	$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
  	$save = 'backup/'.$db_name;
  	$this->load->helper('file');
  	write_file($save, $backup);
  	$this->load->helper('download');
  	force_download($db_name, $backup);
  	return 0;
  }
}
/* End of file ${TM_FILENAME:admin.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Admin/:application/controllers/admin.php} */
