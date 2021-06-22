<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_m extends CI_Model
{

	public function list(){
		return $this->db->get('produk');
	}
	public function insert(){
		$this->db->set('jenis_jasa', $this->input->post('jenis_jasa'));
		$this->db->set('fee', $this->input->post('fee'));
		$this->db->insert('produk');
	}
	public function update ($id){
		$this->db->where('id_produk', $id);
		return $this->db->get('produk');
	}
	public function edit_data()
	{
		$this->db->set('jenis_jasa', $this->input->post('jenis_jasa'));
		$this->db->set('fee', $this->input->post('fee'));
		$this->db->where('id_produk', $this->input->post('id_produk'));
		$this->db->update('produk');
	}
	public function delete($id){
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}
?>