<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model_berita extends CI_MODEL {
  public function get_wisata(){
    $q = $this->db->get("berita");
    return $q;
  }

}
