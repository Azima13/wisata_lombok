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
}
