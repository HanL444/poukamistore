<?php 
/**
* 
*/
class pengirim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pengirim_model');
		$this->load->model('lokasi_model');
		$this->load->model('barang_model');
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
			$data['pengirim'] = $this->pengirim_model->Select_Peminjaman();
			$this->load->view('pengirim/pengirim_list', $data);
			/*
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['peminjaman'] = $this->Peminjaman_Model->Select_Peminjaman();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
			$this->load->view('Peminjaman/Peminjaman_list', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}	*/
	}

	function tambah_Peminjaman()
	{
		$data = array(
			'id_kir' => set_value('id_kir'),
			'id_lok' => set_value('id_lok'),
			'stok' => set_value('stok'),
			'lokasi' => $this->lokasi_model->Select_Anggota(),
			'barang' => $this->barang_model->Select_Anggota(),
			'id' => set_value('id'),
			'button' => 'Tambah',
			'action' => site_url('pengirim/tambah_Peminjaman_aksi')
		);
		$this->load->view('pengirim/pengirim_form', $data);
	}

	function tambah_Peminjaman_aksi()
	{
		$data = array(
			'id_kir' => $this->input->post('id_kir'),
			'id_lok' => $this->input->post('id_lok'),
			'stok' => $this->input->post('stok'),
			'id' => $this->input->post('id'),
		);
		$this->pengirim_model->tambah_data($data);
		redirect(site_url('pengirim'));
	}

	function delete($id)
	{
		$this->pengirim_model->hapus_data($id);
		redirect(site_url('pengirim'));
	}

	function edit($id)
	{
		$pengirim=($this->pengirim_model->ambil_data_id($id));
		$data = array(
			'id_kir' => set_value('id_kir',$pengirim->id_kir),
			'id_lok' => set_value('id_lok',$pengirim->id_lok),
			'stok' => set_value('stok',$pengirim->stok),
			'id' => set_value('id',$pengirim->id),
			'lokasi' => $this->lokasi_model->Select_Anggota(),
			'barang' => $this->barang_model->Select_Anggota(),
			'button' => 'Edit',
			'action' => site_url('pengirim/edit_aksi')
		);
		$this->load->view('pengirim/pengirim_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_lok' => $this->input->post('id_lok'),
			'stok' => $this->input->post('stok'),
			'id' => $this->input->post('id'),
		);
		$id_kir = $this->input->post('id_kir');
		$this->pengirim_model->edit_data($id_kir,$data);
		redirect(site_url('pengirim'));
	}
}
?>