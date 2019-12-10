<?php
/**
 * 
 */
 class pengirim_model extends CI_Model
 {
 	public $nama_table = 'pengirim';
	public $id = 'id_kir';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Peminjaman()
 	{
 		$this->db->distinct();
 		$this->db->select('pg.id_kir, b.nama_barang, b.size, b.jenis, pg.stok , l.store, l.lokasi, l.alamat');
 		$this->db->from('pengirim pg');
 		$this->db->join('barang b', 'b.id = pg.id');
 		$this->db->join('lokasi l', 'l.id_lok = pg.id_lok');
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