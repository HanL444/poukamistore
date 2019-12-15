<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Baju';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baju'] = $this->ModelBaju->getbaju()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function editbarang()
    {
        $data['title'] = 'Data Baju';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = ['id_baju' => $this->uri->segment(3)];
        $data['baju'] = $this->ModelBaju->bajuWhere($where)->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barang/ubah_barang', $data);
        $this->load->view('templates/footer');
    }

    public function updatebarang()
    {
        $where = array('id_baju' => $this->input->post('id_baju'));
       
        //     //konfigurasi sebelum gambar diupload         
        // $config['upload_path'] = './assets/img/profile/';         
        // $config['allowed_types'] = 'jpg|png|jpeg';         
        // $config['max_size'] = '3000';         
        // $config['max_width'] = '1024';         
        // $config['max_height'] = '1000';         
        // $config['file_name'] = 'img' . time(); 

        // //memuat atau memanggil library upload         
        // $this->load->library('upload', $config);
        // if ($this->upload->do_upload('image')) {                 
        //         $image = $this->upload->data();
        //         unlink(FCPATH . 'assets/img/profile/' . $this->input->post('image', TRUE));                 
        //         // unlink('assets/img/upload/' . $this->input->post('image', TRUE));                 
        //         $gambar = $image['file_name'];             
        //     } else {                
        //     $gambar = $this->input->post('old_pict', TRUE);             
        // } 
        // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user_data_baju']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    
                } else {
                    $new_image = $this->upload->data('file_name');
                    echo $this->upload->display_errors();
                }
            }
        $data = array(
                'nama_baju' => $this->input->post('nama_baju'),
                'harga_baju' => $this->input->post('harga_baju'),
                'size_baju' => $this->input->post('size_baju'),
                'stok_baju' => $this->input->post('stok_baju'),
                'gambar_baju' => $new_image
        );

        
        $this->ModelBaju->updatebaju($data, $where);
        redirect(base_url('barang'));
    }

    public function hapusbarang()     
    {         
        $where = ['id_baju' => $this->uri->segment(3)];         
        $this->ModelBaju->hapusbaju($where);         
        redirect('barang');     
    } 
}
