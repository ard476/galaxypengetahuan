<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menudepan extends CI_Model {

	private $table = 'menudepan';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function menu()
	{	
		$this->db->where('is_active', '1');
		$query = $this->db->get($this->table);
		return $query->result();
	}
	public function kategori()
	{
		$query = $this->db->get('kategori_produk');
		return $query->result();
	}
	public function pengaturan($value='')
	{
		$query = $this->db->get('toko');
		return $query->row();
	}

	public function getSupplier($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}

	

}