<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->library('upload');
		$this->load->model('transaksi_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->transaksi_m->insert();
			redirect('/transaksi');
		}

		if($this->input->post('submit') == "edit"){
			$this->transaksi_m->edit_data();
			redirect('/transaksi');
		}

		if($this->input->post('submit') == "proses"){
      $this->transaksi_m->proses_data();
			redirect('/transaksi');
		}
    
    if($this->input->post('submit') == "paid"){
      $config['upload_path'] = './assets/file_upload';
      $config['allowed_types'] = 'jpeg|jpg|png|pdf|jpeg|';
      $config['overwrite'] = TRUE;
      $config['remove_spaces'] = TRUE;

      $new_name = $this->input->post('id_transaksi').'_'.date('ymdhi');
      $config['file_name'] = $new_name;
      
      $this->upload->initialize($config);
      if (! $this->upload->do_upload('file'))
      {			
        $error = array('error' => $this->upload->display_errors());
      }
      else
      {
        $nm_file=$this->upload->data('file_name');	
        $this->transaksi_m->update_foto($nm_file);
      }
			redirect('/transaksi');
    }

		$data['data'] = $this->transaksi_m->list()->result();
		$this->template->load('template','transaksi/transaksi_data',$data);
	}

	public function get_conten($id)
	{
    $dat=explode('%7C',$id);
    $id=$dat[0];
    $type=$dat[1];
    if($type == 'edit'){
      $data['data'] = $this->transaksi_m->update($id)->result();
      $this->load->view('transaksi/get_edit',$data);
    }elseif($type == 'proses'){
      $data['data'] = $this->transaksi_m->update($id)->result();
      $this->load->view('transaksi/get_proses',$data);
    }elseif($type == 'paid'){
      $data['data'] = $this->transaksi_m->update($id)->result();
      $this->load->view('transaksi/get_paid',$data);
    }elseif($type == 'file'){
      $data['data'] = $this->transaksi_m->update($id)->result();
      $this->load->view('transaksi/get_file',$data);
    }
	}

	public function delete($id)
	{
		$this->transaksi_m->delete($id);
		redirect('/transaksi');
	}

  public function checkout($id)
  {
    $this->db->set('tanggal_checkout', date('Y-m-d H:i:s'));
    $this->db->set('status', '2');
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi');
		redirect('/transaksi');
  }

  public function approve($id)
  {
    $this->db->set('tanggal_approve', date('Y-m-d H:i:s'));
    $this->db->set('status', '3');
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi');
		redirect('/transaksi');
  }

  public function paid($id)
  {
    $this->db->set('tanggal_checkout', date('Y-m-d H:i:s'));
    $this->db->set('status', '4');
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi');
		redirect('/transaksi');
  }

  public function x()
  {
    var_dump('x');exit;
  }
}