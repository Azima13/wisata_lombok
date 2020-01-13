<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
      {
        parent::__construct();
          $this->load->Model('Model_berita');
      }
	public function index()
	{
    $data['wisata'] = $this->Model_berita->get_wisata();
    $this->load->view('top');
    $this->load->view('berita', $data);
    $this->load->view('bottom');
	}
  public function tambah_berita()
  {
    // code...
    $this->load->view('top');
    $this->load->view('tambah_berita');
    $this->load->view('bottom');
  }
  public function add()
  {
    // code...
    $data = array(
        'id_berita' => $this->input->post('id_berita'),
        'username' => $this->input->post('username'),
        'judul' => $this->input->post('judul'),
        'deskripsi_berita' => $this->input->post('deskripsi_berita')
     );
     if ($this->db->insert('berita', $data)) {
       // code...
       echo "<script>window.location.href='".base_url()."Berita"."';</script>";
     }
  }
}
