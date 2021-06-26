<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_m extends CI_Model
{
	public function list(){
    $this->db->select('id_transaksi, tanggal_transaksi, user.nama as nama, item, desk as mata_uang, transaksi.status, total_rupiah, file_pembayaran')
            ->from('transaksi')
            ->join('user', 'user.user_id=transaksi.id_customer')
            ->join('kurs', 'kurs.id_kurs=transaksi.id_kurs')
            ->join('mata_uang', 'mata_uang.id_mata_uang=kurs.id_mata_uang');
    return $this->db->get();
	}
	public function insert(){
    // NOTE : cari kurs modalnya
    $this->db->select('nilai')->from('kurs')->where('id_kurs', $this->input->post('id_kurs'));
    $query = $this->db->get();
    foreach ($query->result() as $row)
    {
      $kurs_modal = $row->nilai;
    }

    // NOTE : buat user_id primary
    $this->db->select_max('id_transaksi');
    $query = $this->db->get('transaksi');
    $val=$query->result();
    $datadb = substr($val[0]->id_transaksi,0,6);
		$tgl    = date('ymd');
    if($datadb == $tgl){
      $q3     = (int) substr($val[0]->id_transaksi,6,4);
      $q3++;
    }else{
      $q3 = '1';
    }
		$id_transaksi = $tgl. sprintf("%04s",$q3);
    
		$this->db->set('id_transaksi', $id_transaksi);
		$this->db->set('id_customer', $this->input->post('user_id'));
		$this->db->set('tanggal_transaksi', $this->input->post('tanggal_transaksi'));
		$this->db->set('website', $this->input->post('website'));
		$this->db->set('item', $this->input->post('item'));
		$this->db->set('id_kurs', $this->input->post('id_kurs'));
		$this->db->set('harga', $this->input->post('harga'));
		$this->db->set('shipping', $this->input->post('shipping'));
		$this->db->set('tax', $this->input->post('tax'));
    $this->db->set('total', $this->input->post('harga')+$this->input->post('shipping')+$this->input->post('tax'));
    $this->db->set('kurs_modal', $kurs_modal);
    $this->db->set('status', '1');
		$this->db->insert('transaksi');
	}
	public function update ($id){
		$this->db->where('id_transaksi', $id);
		return $this->db->get('transaksi');
	}
	public function edit_data()
	{
    // NOTE : cari kurs modalnya
    $this->db->select('nilai')->from('kurs')->where('id_kurs', $this->input->post('id_kurs'));
    $query = $this->db->get();
    foreach ($query->result() as $row)
    {
      $kurs_modal = $row->nilai;
    }
		$this->db->set('website', $this->input->post('website'));
		$this->db->set('item', $this->input->post('item'));
		$this->db->set('id_kurs', $this->input->post('id_kurs'));
		$this->db->set('harga', $this->input->post('harga'));
		$this->db->set('shipping', $this->input->post('shipping'));
		$this->db->set('tax', $this->input->post('tax'));
    $this->db->set('total', $this->input->post('harga')+$this->input->post('shipping')+$this->input->post('tax'));
    $this->db->set('kurs_modal', $kurs_modal);
    $this->db->set('status', '1');
		$this->db->where('id_transaksi', $this->input->post('id_transaksi'));
		$this->db->update('transaksi');
	}
  public function proses_data()
  {
		$this->db->set('kurs_transaksi', $this->input->post('kurs_transaksi'));
		$this->db->set('id_payment', $this->input->post('id_payment'));
		$this->db->set('id_produk', $this->input->post('id_produk'));
		$this->db->set('extra_fee', $this->input->post('extra_fee'));
		$this->db->set('pajak', $this->input->post('pajak'));
		$this->db->set('total_rupiah', $this->input->post('total_rupiah'));
		$this->db->set('margin', $this->input->post('total_margin'));
    $this->db->set('status', '2');
		$this->db->where('id_transaksi', $this->input->post('id_transaksi'));
		$this->db->update('transaksi');
  }
	public function delete($id)
  {
		$this->db->where('id_transaksi', $id);
		$this->db->delete('transaksi');
	}
  public function update_foto($nm_file)
  {
    $this->db->set('file_pembayaran', $nm_file);
		$this->db->where('id_transaksi', $this->input->post('id_transaksi'));
		$this->db->update('transaksi');
  }
}
?>