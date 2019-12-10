<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_Model');
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
		$data['barang'] = $this->barang_Model->Select_Anggota();
		$this->load->view('barang/barang_list', $data);
		
		
	}

	function tambah()
	{
		$data = array(
			'id' => set_value('id'),
			'nama_barang' => set_value('nama_barang'),
			'size' => set_value('size'),
			'jenis' => set_value('jenis'),
			'button' => 'Tambah',
			'action' => site_url('barang/tambah_aksi')
			);
		$this->load->view('barang/barang_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'size' => $this->input->post('size'),
			'jenis' => $this->input->post('jenis'),
			);
		$this->barang_Model->tambah_data($data);
		redirect(site_url('barang'));
	}

	function delete($id)
	{
		$this->barang_Model->hapus_data($id);
		redirect(site_url('barang'));
	}

	function edit($id)
	{
		$barang=($this->barang_Model->ambil_data_id($id));
		$data = array(
			'nama_barang' => set_value('nama_barang',$barang->nama_barang),
			'size' => set_value('size',$barang->size),
			'jenis' => set_value('jenis',$barang->jenis),
			'id' => set_value('id',$barang->id),
			'button' => 'Edit',
			'action' => site_url('barang/edit_aksi')
			);
		$this->load->view('barang/barang_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'size' => $this->input->post('size'),
			'jenis' => $this->input->post('jenis'),
			);
		$id = $this->input->post('id');
		$this->barang_Model->edit_data($id,$data);
		redirect(site_url('barang'));
	}
}
?>