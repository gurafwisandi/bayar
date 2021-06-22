<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('user_m');
	}
	public function index()
	{
		check_not_login();
		$this->template->load('template','user/profil');
	}
}