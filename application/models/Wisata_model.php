<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {

	private $_table = "destinasi";

	public $id;
	public $nama_destinasi;
	public $daerah;
	public $alamat;

	public function rules()
		{
			# code...
			return [ 
			['field' =>'name'
			 'label' => 'Name'
			 'rules' => 'required'],

			['field' =>'daerah'
			 'label' => 'Daerah'
			 'rules' => 'required'
			],
			['field' =>'alamat'
			 'label' => 'Alamat'
			 'rules' => 'required']
		];
	}	
	public function getAll()
	{
		# code...
		return $this->db->get($this,_table)->result();
	}
	public function getById($id)
	{
		# code...
		return $this->db->get_where($this->_table,["id"	=> $id])->row();
	}

}
