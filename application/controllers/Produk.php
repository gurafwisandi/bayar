<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('produk_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->produk_m->insert();
			redirect('/produk');
		}

		if($this->input->post('submit') == "edit"){
			$this->produk_m->edit_data();
			redirect('/produk');
		}

		$data['data'] = $this->produk_m->list()->result();
		$this->template->load('template','produk/produk_data',$data);
	}

	public function get_conten($id)
	{
		$data['data'] = $this->produk_m->update($id)->result();
		$this->load->view('produk/get_produk',$data);
	}

	public function delete($id)
	{
		$this->produk_m->delete($id);
		redirect('/produk');
	}
}