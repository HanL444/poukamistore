<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_user/header', $data);
        $this->load->view('templates_user/index', $data);
        $this->load->view('templates_user/footer');
    }

    public function data_barang()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       	$data['baju'] = $this->ModelBaju->getbaju()->result_array();

        $this->load->view('templates_user/header', $data);
        $this->load->view('user/data_barang', $data);
        $this->load->view('templates_user/footer');
    }

    public function about()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_user/header', $data);
        $this->load->view('user/kosong', $data);
        $this->load->view('templates_user/footer');
    }

    public function contact()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_user/header', $data);
        $this->load->view('user/contact', $data);
        $this->load->view('templates_user/footer', $data);

    }

    public function baju()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates_user/header', $data);
        $this->load->view('user/check_out', $data);
        $this->load->view('templates_user/footer', $data);

    }
}
