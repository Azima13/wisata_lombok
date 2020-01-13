<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function __construct()
      {
        parent::__construct();
          $this->load->Model('Model');
      }
	public function index()
	{
    $data['wisata'] = $this->Model->get_wisata();
    $this->load->view('top');
    $this->load->view('table', $data);
    $this->load->view('bottom');
	}
  public function tambah_data()
  {
    // code...
    $this->load->view('top');
    $this->load->view('tambah_data');
    $this->load->view('bottom');
  }
  public function add()
  {
    // code...
    $data = array(
        'no' => $this->input->post('no'),
        'nama_daerah' => $this->input->post('nama_daerah'),
        'nama_destinasi' => $this->input->post('nama_destinasi'),
        'alamat' => $this->input->post('alamat'),
        'harga' => $this->input->post('harga')
     );
     if ($this->db->insert('tb_destinasi', $data)) {
       // code...
       echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
     }
  }
}
