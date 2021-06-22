
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurs_m extends CI_Model
{
	public function list(){
        $this->db->select('id_kurs, desk, nilai, merchant, norek, tanggal ')
                ->from('kurs')
                ->join('mata_uang', 'mata_uang.id_mata_uang = kurs.id_mata_uang')
                ->join('payment', 'payment.id_payment = kurs.id_payment');
        return $this->db->get();
	}
	public function insert(){
    $this->db->select_max('id_kurs');
    $query = $this->db->get('kurs');
    $val=$query->result();
    $datadb = substr($val[0]->id_kurs,0,6);
		$tgl    = date('ymd');
    if($datadb == $tgl){
      $q3     = (int) substr($val[0]->id_kurs,6,4);
      $q3++;
    }else{
      $q3 = '1';
    }
		$id_kurs = $tgl. sprintf("%04s",$q3);

		$this->db->set('id_mata_uang', $this->input->post('uang'));
		$this->db->set('id_payment', $this->input->post('payment'));
		$this->db->set('nilai', $this->input->post('nilai'));
		$this->db->set('tanggal', $this->input->post('tanggal'));
		$this->db->set('id_kurs', $id_kurs);
		$this->db->insert('kurs');

	}
	public function update ($id){
		$this->db->where('id_kurs', $id);
		return $this->db->get('kurs');
	}
	public function edit_data()
	{
		$this->db->set('id_mata_uang', $this->input->post('uang'));
		$this->db->set('id_payment', $this->input->post('payment'));
		$this->db->set('nilai', $this->input->post('nilai'));
		$this->db->set('tanggal', $this->input->post('tanggal'));
		$this->db->where('id_kurs', $this->input->post('id_kurs'));
		$this->db->update('kurs');
	}
	public function delete($id){
		$this->db->where('id_kurs', $id);
		$this->db->delete('kurs');
	}
}
?>