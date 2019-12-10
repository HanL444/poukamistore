<?php
/**
 * 
 */
 class User2 extends CI_Model
 {

 	function login($username, $password)
 	{
 		$this->db->select('useradmin, passadmin');
 		$this->db->from('admin');
 		$this->db->where('useradmin', $username);
 		$this->db->where('passadmin',$password);
 		$this->db->limit(1);

 		$query = $this->db->get();

 		if($query->num_rows() == 1)
 		{
 			$this->session->set_userdata('username', $username);
 			$this->session->set_userdata('status', 'admin');
 			return $query->result();
 		}
 		else
 		{
 			return false;
 		}

 	}
 } 
 ?>