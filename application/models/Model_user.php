<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model_user extends CI_MODEL {
  public function get_wisata(){
    $q = $this->db->get("tb_user");
    return $q;
  }

}
