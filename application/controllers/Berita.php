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
  public function edit_berita($id_berita="")
  {
    // code...
    $data['wisata'] = $this->db->get_where('berita',array('id_berita'=>$id_berita),1)->row();
    $this->load->view('top');
    $this->load->view('edit_berita', $data);
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
       $this->session->set_flashdata("success","Berhasil Menambahkan Data");
       echo "<script>window.location.href='".base_url()."Berita"."';</script>";
     }else {
       $this->session->set_flashdata("error","Gagal Menambahkan Data");
       // code...
       echo "<script>window.location.href='".base_url()."Berita"."';</script>";
     }
  }
  public function update()
  {
    // code...
    $data = array(
      'username' => $this->input->post('username'),
      'judul' => $this->input->post('judul'),
      'deskripsi_berita' => $this->input->post('deskripsi_berita')
     );
     $this->db->where('id_berita', $this->input->post('id_berita'));
     if ($this->db->update('berita', $data)) {
       $this->session->set_flashdata("success","Berhasil Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."Berita"."';</script>";
     } else {
       $this->session->set_flashdata("error","Gagal Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."Berita"."';</script>";
     }
  }
  public function delete($id_berita)
  {
    // code...
    if ($this->db->delete('berita', array('id_berita' =>$id_berita))) {
      // code...
      $this->session->set_flashdata("success","Berhasil Menghapus Data");
      echo "<script>window.location.href='".base_url()."Berita"."';</script>";
    }
  }
}
