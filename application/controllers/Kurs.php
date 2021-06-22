<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class Kurs extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('kurs_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->kurs_m->insert();
			redirect('/kurs');
		}

		if($this->input->post('submit') == "edit"){
			$this->kurs_m->edit_data();
			redirect('/kurs');
		}
		$data['data'] = $this->kurs_m->list()->result();
		$this->template->load('template','kurs/kurs_data',$data);
	}

	public function get_conten($id)
	{
		$data['data'] = $this->kurs_m->update($id)->result();
		$this->load->view('kurs/get_kurs',$data);
	}

	public function delete($id)
	{
		$this->kurs_m->delete($id);
		redirect('/kurs');
	}
}