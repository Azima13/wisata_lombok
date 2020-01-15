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
  public function edit_data($no="")
  {
    // code...
    $data['wisata'] = $this->db->get_where('tb_destinasi',array('no'=>$no),1)->row();
    $this->load->view('top');
    $this->load->view('edit_data', $data);
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
       $this->session->set_flashdata("success","Berhasil Menambahkan Data");
       // code...
       echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
     } else {
       $this->session->set_flashdata("error","Gagal Menambahkan Data");
       // code...
       echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
     }
  }
  public function update()
  {
    // code...
    $data = array(
        'nama_daerah' => $this->input->post('nama_daerah'),
        'nama_destinasi' => $this->input->post('nama_destinasi'),
        'alamat' => $this->input->post('alamat'),
        'harga' => $this->input->post('harga')
     );
     $this->db->where('no', $this->input->post('no'));
     if ($this->db->update('tb_destinasi', $data)) {
       $this->session->set_flashdata("success","Berhasil Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
     } else {
       $this->session->set_flashdata("error","Gagal Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
     }
  }
  public function delete($no)
  {
    // code...
    if ($this->db->delete('tb_destinasi', array('no' =>$no))) {
      // code...
      $this->session->set_flashdata("success","Berhasil Menghapus Data");
      echo "<script>window.location.href='".base_url()."Wisata"."';</script>";
    }
  }
  public function rekomendasi()
  {
    // code...
    $this->load->view('top');
    $this->load->view('rekomendasi_wisata');
    $this->load->view('bottom');
  }
}
