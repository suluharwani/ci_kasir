<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_user extends CI_Model {
  public function check_user_level($level){
    $this->db->select('user.id as user_id');
    $this->db->from('user');
    $this->db->join('user_level', 'user.id = user_level.id_user', 'left');
    $this->db->where('level', $level);
    $query = $this->db->get()->num_rows();
    return $query;
  }
  public function check_username($username){
    $this->db->select('user.id as user_id');
    $this->db->from('user');
    $this->db->join('user_pass', 'user.id = user_pass.id_user', 'left');
    $this->db->where('username', $username);
    $query = $this->db->get()->num_rows();
    if ($query <1) {
      return TRUE;
    }else{
      return FALSE;
    }

  }
}
/* End of file ${TM_FILENAME:mdl_user.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_user/:application/models/mdl_user.php} */
