<?php
/**
 * 
 */
 class User extends CI_Model
 {

 	function login($username, $password)
 	{
 		$this->db->select('nama, password');
 		$this->db->from('member');
 		$this->db->where('nama', $username);
 		$this->db->where('password',$password);
 		$this->db->limit(1);

 		$query = $this->db->get();

 		if($query->num_rows() == 1)
 		{
 			$this->session->set_userdata('username', $username);
 			$this->session->set_userdata('status', 'member');
 			return $query->result();
 		}
 		else
 		{
 			return false;
 		}

 	}
 } 
 ?>