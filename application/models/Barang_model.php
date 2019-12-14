<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
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
    
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('barang');
        return $this->db->get()->row($field);
    }

    function ambil_data_id($id)
    {
        $this->db->where($this->id, $id);
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

    function edit_data($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->nama_table, $data);
    }
}
