<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
		$this->load->model('user2','',TRUE);
	}

	function index()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');
		$pilihan = $this->input->post('pilihan');
		$this->session->set_userdata('nilai', $pilihan);

		if($this->form_validation->run()==FALSE)
		{
			// Validasi Gagal, Arahkan Kembali Ke Login
			$this->load->view('login_view');
		}
		else
		{
			//Berhasil Login
			redirect('member','refresh');
		}

	}

	function check_database($password)
	{
		$username = $this->input->post('username');

   //query the database
		$nilai = $this->session->userdata('nilai');
		if($nilai == "1"){
			$result = $this->user->login($username, $password);
		}

		else{
			$result = $this->user2->login($username, $password);
		}
		

		if($result)
		{

			$this->session->set_userdata('logged_in', TRUE);
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}