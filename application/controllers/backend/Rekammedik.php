<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedik extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['judul'] = 'Rekam Medik';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $this->db->order_by('id_rekam', 'DESC');
    $data['get_rekammedik'] = $this->db->get('tb_rekammedik')->result_array();

    $this->form_validation->set_rules('no_rm', 'no. rekam medik', 'trim|required');
    $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
    $this->form_validation->set_rules('diagnosa', 'diagnosa', 'trim|required');
    $this->form_validation->set_rules('jenis_obat', 'jenis obat', 'trim|required');
    $this->form_validation->set_rules('no_jaminan', 'no. jaminan kesehatan', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/rekammedik/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'no_rm' => $this->input->post('no_rm'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'diagnosa' => $this->input->post('diagnosa'),
        'jenis_obat' => $this->input->post('jenis_obat'),
        'no_jaminan' => $this->input->post('no_jaminan'),
        'created_at' => date("d M Y")
      ];

      $this->db->insert('tb_rekammedik', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil tersimpan!
              </div>'
            );
      redirect('backend/rekammedik');
    }
    
  }

  public function edit()
  {
    $data['judul'] = 'Rekam Medik';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $this->db->order_by('id_rekam', 'DESC');
    $data['get_rekammedik'] = $this->db->get('tb_rekammedik')->result_array();

    $this->form_validation->set_rules('no_rm', 'no. rekam medik', 'trim|required');
    $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
    $this->form_validation->set_rules('diagnosa', 'diagnosa', 'trim|required');
    $this->form_validation->set_rules('jenis_obat', 'jenis obat', 'trim|required');
    $this->form_validation->set_rules('no_jaminan', 'no. jaminan kesehatan', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/rekammedik/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id_rekam');
      
      $data = [
        'no_rm' => $this->input->post('no_rm'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'diagnosa' => $this->input->post('diagnosa'),
        'jenis_obat' => $this->input->post('jenis_obat'),
        'no_jaminan' => $this->input->post('no_jaminan'),
        'created_at' => date("d M Y")
      ];

      $this->db->where('id_rekam', $id);
      
      $this->db->update('tb_rekammedik', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/rekammedik');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_rekammedik', ['id_rekam' => $id]);
    $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/rekammedik');
  }

}

/* End of file Rekammedik.php */