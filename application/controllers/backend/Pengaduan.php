<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

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
    $data['judul'] = 'Pengaduan';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_pengaduan'] = $this->m_user->get_all_pengaduan();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/pengaduan/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Pengaduan';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_pengaduan'] = $this->m_user->get_id_pengaduan($id);
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/pengaduan/detail', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function jawabsaran($id)
  {
    $data['judul'] = 'Jawab Pengaduan';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_pengaduan'] = $this->m_user->get_id_pengaduan($id);
    $user_id = $this->input->post('user_id');
    
    $this->form_validation->set_rules('jawaban_saran', 'jawaban saran', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/pengaduan/jawabsaran', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'jawaban_saran' => $this->input->post('jawaban_saran'),
        'created_at' => date("d M Y H:i:s")
      ];
      $this->db->where('id', $id);
      $this->db->update('tb_pengaduan', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terkirim!
              </div>'
            );
            $this->sendMassage($user_id);
      redirect('backend/pengaduan');
    }
    
  }

  public function sendMassage($user_id){
    
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $user_id])->row();

    $getAll = '["'.$gettoken->token_id.'"]';
    $curl = curl_init();
    $authKey = "key=AAAA3BjEnsQ:APA91bHu2JOfm3gobSCQkBIc0RBp-Yt-lGeP3VQrjxK7Quuz5-nN275QfE4j0o3258F1phjX8vsqUmY1_4PsX_qWJ0rqiHh6nctAk-DhY33g9feNWPBuTFcQiA6vGrqiyD-N93x5SmnZ";
    $registration_ids =  $getAll;
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => '{
                    "registration_ids": ' . $registration_ids . ',
                    "notification": {
                        "title": "Balasan Saran",
                        "body": "Saran yang dikirimkan telah dibalas oleh pihak kesehatan!"
                    }
                  }',
      CURLOPT_HTTPHEADER => array(
        "Authorization: " . $authKey,
        "Content-Type: application/json",
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
      redirect('backend/pengaduan');

    if ($err) {
      // echo "cURL Error #:" . $err;
      json_encode($err);
    } else {
      // response ketika data berhasil disimpan
      echo $response;
    }
  }

  public function hapus($id)
  {
      $this->db->delete('tb_pengaduan', ['id' => $id]);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/pengaduan');
  }

}

/* End of file Pengaduan.php */