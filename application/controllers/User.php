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
  public function edit_user($id_user="")
  {
    // code...
    $data['wisata'] = $this->db->get_where('tb_user',array('id_user'=>$id_user),1)->row();
    $this->load->view('top');
    $this->load->view('edit_user', $data);
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
       $this->session->set_flashdata("success","Berhasil Menambahkan Data");
       echo "<script>window.location.href='".base_url()."User"."';</script>";
     }else {
       $this->session->set_flashdata("error","Gagal Menambahkan Data");
       // code...
       echo "<script>window.location.href='".base_url()."User"."';</script>";
     }
  }
  public function update()
  {
    // code...
    $data = array(
      'nama_user' => $this->input->post('nama_user'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password')
     );
     $this->db->where('id_user', $this->input->post('id_user'));
     if ($this->db->update('tb_user', $data)) {
       $this->session->set_flashdata("success","Berhasil Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."User"."';</script>";
     } else {
       $this->session->set_flashdata("error","Gagal Merubah Data");
       // code...
       echo "<script>window.location.href='".base_url()."User"."';</script>";
     }
  }
  public function delete($id_user)
  {
    // code...
    if ($this->db->delete('tb_user', array('id_user' =>$id_user))) {
      // code...
      $this->session->set_flashdata("success","Berhasil Menghapus Data");
      echo "<script>window.location.href='".base_url()."User"."';</script>";
    }
  }
}
