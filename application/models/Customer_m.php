<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model
{

	public function list(){
		return $this->db->get('user');
	}
	public function insert(){
    // user
    // NOTE : buat user_id primary
    $this->db->select_max('user_id');
    $query = $this->db->get('user');
    $val=$query->result();
    $datadb = substr($val[0]->user_id,0,6);
		$tgl    = date('ymd');
    if($datadb == $tgl){
      $q3     = (int) substr($val[0]->user_id,6,4);
      $q3++;
    }else{
      $q3 = '1';
    }
		$user_id = $tgl. sprintf("%04s",$q3);
		$this->db->set('user_id', $user_id);
		$this->db->set('email', $this->input->post('email'));
		$this->db->set('password', SHA1($this->input->post('password')));
		$this->db->set('username', $this->input->post('username'));
		$this->db->set('nama', $this->input->post('nama'));
		$this->db->set('npwp', $this->input->post('npwp'));
		$this->db->set('status', 'aktive');
		$this->db->set('level', $this->input->post('level'));
		$this->db->set('no_hp', $this->input->post('no_hp'));
		$this->db->insert('user');
    $user_insert_id=$this->db->insert_id();

    // alamat
		$this->db->set('user_id', $user_insert_id);
		$this->db->set('provinsi', $this->input->post('provinsi'));
		$this->db->set('kabupaten', $this->input->post('kabupaten'));
		$this->db->set('kecamatan', $this->input->post('kecamatan'));
		$this->db->set('kelurahan', $this->input->post('kelurahan'));
		$this->db->set('kodepos', $this->input->post('kodepos'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('rt_rw', $this->input->post('rt_rw'));
		$this->db->set('alamat_utama', '1');
		$this->db->insert('address');
	}
	public function insert_address(){

    // alamat
		if($this->input->post('checkbox') == '1'){
			// update data yg ada jadi null
			$data = array('alamat_utama' => null);
			$this->db->where('user_id', $this->input->post('user_id'));
			$this->db->update('address', $data);

			$this->db->set('alamat_utama', $this->input->post('checkbox'));
		}
		
		$this->db->set('user_id', $this->input->post('user_id'));
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
	public function update_address ($id){
		$this->db->where('user_id', $id);
		$this->db->order_by('alamat_utama,id_alamat', 'desc');
		return $this->db->get('address');
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
	public function delete_address($id){
    $this->db->where('id_alamat', $id);
		$this->db->delete('address');
	}
}
?>