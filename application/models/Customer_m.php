<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model
{

	public function list(){
		return $this->db->get('user');
	}
	public function insert(){
    // user
		$this->db->set('email', $this->input->post('email'));
		$this->db->set('password', SHA1($this->input->post('password')));
		$this->db->set('username', $this->input->post('username'));
		$this->db->set('nama', $this->input->post('nama'));
		$this->db->set('npwp', $this->input->post('npwp'));
		$this->db->set('status', 'aktive');
		$this->db->set('level', $this->input->post('level'));
		$this->db->set('no_hp', $this->input->post('no_hp'));
		$this->db->insert('user');
    $user_id=$this->db->insert_id();

    // alamar
		$this->db->set('user_id', $user_id);
		$this->db->set('provinsi', $this->input->post('provinsi'));
		$this->db->set('kabupaten', $this->input->post('kabupaten'));
		$this->db->set('kecamatan', $this->input->post('kecamatan'));
		$this->db->set('kelurahan', $this->input->post('kelurahan'));
		$this->db->set('kodepos', $this->input->post('kodepos'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('rt_rw', $this->input->post('rt_rw'));
		$this->db->insert('address');
	}
	public function update ($id){
		$this->db->where('user_id', $id);
		return $this->db->get('user');
	}
	public function edit_data()
	{
		$this->db->set('merchant', $this->input->post('merchant'));
		$this->db->set('norek', $this->input->post('norek'));
		$this->db->set('nama', $this->input->post('nama'));
		$this->db->where('user_id', $this->input->post('user_id'));
		$this->db->update('user');
	}
	public function delete($id){
		$this->db->where('user_id', $id);
		$this->db->delete('user');

    $this->db->where('user_id', $id);
		$this->db->delete('address');
	}
}
?>