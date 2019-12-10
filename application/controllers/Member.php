<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('member_Model');
				if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}
	}
	function index()
	{
		$data['member'] = $this->member_Model->Select_Anggota();
		$this->load->view('member/member_list', $data);
		/*
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['anggota'] = $this->Anggota_Model->Select_Anggota();
			$this->load->view('anggota/anggota_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}*/
	}

	function tambah()
	{
		$data = array(
			'id_mem' => set_value('id_mem'),
			'nama' => set_value('nama'),
			'password' => set_value('password'),
			'alamat' => set_value('alamat'),
			'button' => 'Tambah',
			'action' => site_url('member/tambah_aksi')
			);
		$this->load->view('member/member_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat'),
			);
		$this->member_Model->tambah_data($data);
		redirect(site_url('member'));
	}

	function delete($id)
	{
		$this->member_Model->hapus_data($id);
		redirect(site_url('member'));
	}

	function edit($id)
	{
		$member=($this->member_Model->ambil_data_id($id));
		$data = array(
			'nama' => set_value('nama',$member->nama),
			'password' => set_value('password',$member->password),
			'alamat' => set_value('alamat',$member->alamat),
			'id_mem' => set_value('id_mem',$member->id_mem),
			'button' => 'Edit',
			'action' => site_url('member/edit_aksi')
			);
		$this->load->view('member/member_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat'),
			);
		$id_mem = $this->input->post('id_mem');
		$this->member_Model->edit_data($id_mem,$data);
		redirect(site_url('member'));
	}
}
?>