<?php 
/**
* 
*/
class Lokasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Lokasi_Model');
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
		$data['lokasi'] = $this->Lokasi_Model->Select_Anggota();
		$this->load->view('lokasi/lokasi_list', $data);
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
			'id_lok' => set_value('id_lok'),
			'store' => set_value('store'),
			'lokasi' => set_value('lokasi'),
			'alamat' => set_value('alamat'),
			'button' => 'Tambah',
			'action' => site_url('Lokasi/tambah_aksi')
			);
		$this->load->view('lokasi/lokasi_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'store' => $this->input->post('store'),
			'lokasi' => $this->input->post('lokasi'),
			'alamat' => $this->input->post('alamat'),
			);
		$this->Lokasi_Model->tambah_data($data);
		redirect(site_url('Lokasi'));
	}

	function delete($id)
	{
		$this->Lokasi_Model->hapus_data($id);
		redirect(site_url('Lokasi'));
	}

	function edit($id)
	{
		$lokasi=($this->Lokasi_Model->ambil_data_id($id));
		$data = array(
			'store' => set_value('store',$lokasi->store),
			'lokasi' => set_value('lokasi',$lokasi->lokasi),
			'alamat' => set_value('alamat',$lokasi->alamat),
			'id_lok' => set_value('id_lok',$lokasi->id_lok),
			'button' => 'Edit',
			'action' => site_url('Lokasi/edit_aksi')
			);
		$this->load->view('lokasi/lokasi_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'store' => $this->input->post('store'),
			'lokasi' => $this->input->post('lokasi'),
			'alamat' => $this->input->post('alamat'),
			);
		$id_lok = $this->input->post('id_lok');
		$this->Lokasi_Model->edit_data($id_lok,$data);
		redirect(site_url('Lokasi'));
	}
}
?>