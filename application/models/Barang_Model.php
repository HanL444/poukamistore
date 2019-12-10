<?php

//class model barang
 class barang_Model extends CI_Model
 {
 	public $nama_table = 'barang';
	public $id = 'id';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Anggota()
 	{
 		$data['anggota'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
	 }
	 
	//fungsi untuk mengambil data
 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}
	
	//fungsi untuk menambah data
 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}
	
	//fungsi untuk menghapus data
 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

	//fungsi untuk mengedit/update data
 	function edit_data($id,$data)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>