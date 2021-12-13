<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['judul'] = 'Informasi';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_info'] = $this->db->get('tb_informasi')->result_array();
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('kontak', 'kontak', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/informasi/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'alamat' => $this->input->post('alamat'),
        'email' => $this->input->post('email'),
        'kontak' => $this->input->post('kontak'),
        'created_at' => date("d M Y")
      ];
      $this->db->insert('tb_informasi', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil tersimpan!
              </div>'
            );
      redirect('backend/informasi');
    }
    
  }

  public function edit()
  {
    $data['judul'] = 'Informasi';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_info'] = $this->db->get('tb_informasi')->result_array();
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('kontak', 'kontak', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/informasi/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id_info');
      
      $data = [
        'alamat' => $this->input->post('alamat'),
        'email' => $this->input->post('email'),
        'kontak' => $this->input->post('kontak'),
        'created_at' => date("d M Y")
      ];

      $this->db->where('id_info', $id);
      
      $this->db->update('tb_informasi', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/informasi');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_informasi', ['id_info'=>$id]);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/informasi');
  }

}

/* End of file Informasi.php */