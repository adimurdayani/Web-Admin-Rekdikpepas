<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
    $data['judul'] = 'Dashboard';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['total_rekammedik'] = $this->db->get('tb_rekammedik')->num_rows();
    $data['get_pengaduan'] = $this->m_user->get_all_pengaduan();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function get_notifikasi()
  {    
    $total_regis = $this->db->get('tb_register')->num_rows();

    $this->db->order_by('id_regis', 'DESC');
    $get_userregis = $this->db->get('tb_register')->row();

    $result['total_register'] = $total_regis;
    $result['tanggal'] = $get_userregis->created_at;
    $result['nama'] = $get_userregis->nama;
    $result['msg'] = "Pengguna baru telah registrasi!";
    
    echo json_encode($result);
  }

  public function get_notifikasi_pengaduan()
  {
    
    $total_pengaduan = $this->db->get('tb_pengaduan')->num_rows();
    $get_pengadu = $this->m_user->get_all_pengaduan_json();

    $result['total_pengaduan'] = $total_pengaduan;
    $result['nama'] = $get_pengadu->nama;
    $result['tanggal'] = $get_pengadu->created_at;
    $result['msg'] = "Pesan pengaduan baru!";
    
    echo json_encode($result);
  }
}

/* End of file Dashboard.php */