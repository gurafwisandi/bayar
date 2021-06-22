<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class Uang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('uang_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->uang_m->insert();
			redirect('/uang');
		}

		if($this->input->post('submit') == "edit"){
			$this->uang_m->edit_data();
			redirect('/uang');
		}

		$data['data'] = $this->uang_m->list()->result();
		$this->template->load('template','uang/uang_data', $data);
	}

	public function get_conten($id)
	{
		$data['data'] = $this->uang_m->update($id)->result();
		$this->load->view('uang/get_uang',$data);
	}

	public function delete($id)
	{
		$this->uang_m->delete($id);
		redirect('/uang');
	}
}