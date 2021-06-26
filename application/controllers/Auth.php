<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}
	
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);

			if($query->num_rows() > 0) {
				$row = $query ->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>alert('Login Berhasil'); window.location='".site_url('dashboard')."';</script>";

			} else {
				echo "<script>alert('Login Gagal'); window.location='".site_url('auth/login')."';</script>";

			}
		}
	}

	public function logout()
	{
		$params = array('userid','level');
		$this->session->unset_userdata($params);
		redirect('auth/login'); 
	}
	
	public function ambil_provinsi(){	 
		$provinsi = $_GET['provinsi'];
		$query= $this->db->query("select kabupaten from kodepos  WHERE  provinsi='$provinsi' group by kabupaten");
		echo "<option value=''>-- Pilih Kota --</option>";
		foreach ($query->result() as $row)
		{
			echo "<option value=\"".$row->kabupaten."\" >".$row->kabupaten."</option>\n"; 
		}
	}
	
	public function ambil_kabupaten(){	 
		$kabupaten = $_GET['kabupaten'];
		$query= $this->db->query("select kecamatan from kodepos  WHERE  kabupaten='$kabupaten' group by kecamatan");
		echo "<option value=''>-- Pilih Kecamatan --</option>";
		foreach ($query->result() as $row)
		{
			echo "<option value=\"".$row->kecamatan."\" >".$row->kecamatan."</option>\n"; 
		}
	}
	
	public function ambil_kecamatan(){	 
		$kabupaten = $_GET['kabupaten'];
		$kecamatan = $_GET['kecamatan'];
		$query= $this->db->query("select kelurahan from kodepos  WHERE  kecamatan='$kecamatan' and kabupaten='$kabupaten' group by kelurahan");
		echo "<option value=''>-- Pilih Keluarahan --</option>";
		foreach ($query->result() as $row)
		{
			echo "<option value=\"".$row->kelurahan."\" >".$row->kelurahan."</option>\n"; 
		}
	}	

	public function ambil_kelurahan(){	 
		$kelurahan = $_GET['kelurahan'];
		$kecamatan = $_GET['kecamatan'];
		$kabupaten = $_GET['kabupaten'];
		$query= $this->db->query("select kodepos from kodepos  WHERE  kelurahan='$kelurahan' and kabupaten='$kabupaten' and kecamatan='$kecamatan' group by kodepos");
		echo "<option value=''>-- Pilih Kodepos --</option>";
		foreach ($query->result() as $row)
		{
			echo "<option value=\"".$row->kodepos."\" >".$row->kodepos."</option>\n"; 
		}
	}

}