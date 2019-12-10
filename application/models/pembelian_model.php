<?php

/**
 * 
 */
 class pembelian_model extends CI_Model
 {
 	public $nama_table = 'pembelian';
	public $id = 'id_pem';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Peminjaman()
 	{
 		$this->db->distinct();
 		$this->db->select('pm.id_pem, m.nama, m.alamat ,pm.stok , b.nama_barang, b.size, b.jenis');
 		$this->db->from('pembelian pm');
 		$this->db->join('barang b', 'b.id = pm.id');
 		$this->db->join('member m', 'm.id_mem = pm.id_mem');
 		return $this->db->get($this->nama_table)->result();


 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($id_kir,$data)
 	{
 		$this->db->where($this->id, $id_kir);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>