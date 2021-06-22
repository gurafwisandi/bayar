<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_m extends CI_Model
{

	public function list(){
		return $this->db->get('payment');
	}
	public function insert(){
		$this->db->set('merchant', $this->input->post('merchant'));
		$this->db->set('norek', $this->input->post('norek'));
		$this->db->set('nama', $this->input->post('nama'));
		$this->db->insert('payment');
	}
	public function update ($id){
		$this->db->where('id_payment', $id);
		return $this->db->get('payment');
	}
	public function edit_data()
	{
		$this->db->set('merchant', $this->input->post('merchant'));
		$this->db->set('norek', $this->input->post('norek'));
		$this->db->set('nama', $this->input->post('nama'));
		$this->db->where('id_payment', $this->input->post('id_payment'));
		$this->db->update('payment');
	}
	public function delete($id){
		$this->db->where('id_payment', $id);
		$this->db->delete('payment');
	}
}
?>