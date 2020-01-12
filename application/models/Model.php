<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model extends CI_MODEL {
  public function get_wisata(){
    $q = $this->db->get("tb_destinasi");
    return $q;
  }
}
