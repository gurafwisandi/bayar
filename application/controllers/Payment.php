<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class Payment extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('payment_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->payment_m->insert();
			redirect('/payment');
		}

		if($this->input->post('submit') == "edit"){
			$this->payment_m->edit_data();
			redirect('/payment');
		}
		
		$data['data'] = $this->payment_m->list()->result();
		$this->template->load('template','payment/payment_data',$data);
	}

	public function get_conten($id)
	{
		$data['data'] = $this->payment_m->update($id)->result();
		$this->load->view('payment/get_payment',$data);
	}

	public function delete($id)
	{
		$this->payment_m->delete($id);
		redirect('/payment');
	}
}