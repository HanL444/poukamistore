<?php defined('BASEPATH') or exit('No direct script access allowed'); 
 
class ModelBaju extends CI_Model 
{     
    //manajemen baju     
    public function getbaju()     
    {         
        return $this->db->get('user_data_baju');    
    } 
 
    public function bajuWhere($where)    
    {         
        return $this->db->get_where('user_data_baju', $where);    
    }  

    public function simpanbaju($data = null)     
    {         
        $this->db->insert('user_data_baju',$data);     
    } 
 
    public function updatebaju($data = null, $where = null)     
    {         
        $this->db->update('user_data_baju', $data, $where);     
    } 
 
    public function hapusbaju($where = null)     
    {         
        $this->db->delete('user_data_baju', $where);     
    } 

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('user_data_baju');
        return $this->db->get()->row($field);
    } 
} 