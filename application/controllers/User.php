<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
      {
        parent::__construct();
          $this->load->Model('Model_user');
      }
	public function index()
	{
    $data['wisata'] = $this->Model_user->get_wisata();
    $this->load->view('top');
    $this->load->view('user', $data);
    $this->load->view('bottom');
	}
  public function tambah_user()
  {
    // code...
    $this->load->view('top');
    $this->load->view('tambah_user');
    $this->load->view('bottom');
  }
  public function add()
  {
    // code...
    $data = array(
        'id_user' => $this->input->post('id_user'),
        'nama_user' => $this->input->post('nama_user'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
     );
     if ($this->db->insert('tb_user', $data)) {
       // code...
       echo "<script>window.location.href='".base_url()."User"."';</script>";
     }
  }
}
