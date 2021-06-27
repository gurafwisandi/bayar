<?php defined('BASEPATH') OR exit ('No script direct access allowed');

class Customer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('customer_m');
	}

	public function index()
	{
		if($this->input->post('submit') == "submit"){
			$this->customer_m->insert();
			redirect('/customer');
		}

		if($this->input->post('submit') == "edit"){
			$this->customer_m->edit_data();
			redirect('/customer');
		}

		$data['data'] = $this->customer_m->list()->result();
		$this->template->load('template','customer/customer_data',$data);
	}

	public function delete($id)
	{
		$this->customer_m->delete($id);
		redirect('/customer');
	}

	public function delete_address($id,$id_user)
	{
		$this->customer_m->delete_address($id);
		redirect('/customer/customer_update/'.$id_user);
	}

	public function customer_update($id){

		if($this->input->post('submit') == "submit_addres"){
			$this->customer_m->insert_address();
			redirect('/customer/customer_update/'.$this->input->post('user_id'));
		}

		$data['data'] = $this->customer_m->update($id)->result();
		$data['addres'] = $this->customer_m->update_address($id)->result();
		$this->template->load('template','customer/customer_update',$data);
	}

	public function profile($id)
	{
		$data['data'] = $this->customer_m->update($id)->result();
		$data['addres'] = $this->customer_m->update_address($id)->result();
		$this->template->load('template','customer/customer_update',$data);
	}

	public function get_conten($id)
	{
		$data['data'] = $this->customer_m->update($id)->result();
		$data['addres'] = $this->customer_m->update_address($id)->result();
		$this->load->view('customer/get_customer',$data);
	}

	public function get_conten_address($id)
	{
		$data['data'] = $this->customer_m->update($id)->result();
		var_dump($data['data']);exit;
		$this->load->view('customer/get_customer',$data);
	}
}