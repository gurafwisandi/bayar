<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uang_m extends CI_Model
{

	public function list(){
		return $this->db->get('mata_uang');
	}
	public function insert(){
		$this->db->set('desk', $this->input->post('desk'));
		$this->db->insert('mata_uang');
	}
	public function update ($id){
		$this->db->where('id_mata_uang', $id);
		return $this->db->get('mata_uang');
	}
	public function edit_data()
	{
		$this->db->set('desk', $this->input->post('desk'));
		$this->db->where('id_mata_uang', $this->input->post('id_mata_uang'));
		$this->db->update('mata_uang');
	}
	public function delete($id){
		$this->db->where('id_mata_uang', $id);
		$this->db->delete('mata_uang');
	}
}
?>