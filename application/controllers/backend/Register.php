<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
    $data['judul'] = 'Register';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_regis'] = $this->m_user->get_all_register();
    
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('conf_pass', 'konfirmasi password', 'trim|required|min_length[5]|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/register/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'user_id' => 2,
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post('email')),
        'username' => htmlspecialchars($this->input->post('username')),
        'password' => sha1($this->input->post('password')),        
        'created_at' => date("d M Y"),
        'status' => 1
      ];

      $this->db->insert('tb_register', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
            );
      redirect('backend/register');
    }
    
  }

  public function edit()
  {
    $data['judul'] = 'Register';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_regis'] = $this->m_user->get_all_register();
    
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/register/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id_regis');
      
      $data = [
        'user_id' => 2,
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post('email')),
        'username' => htmlspecialchars($this->input->post('username')),
        'password' => sha1($this->input->post('password')),        
        'created_at' => date("d M Y"),
        'status' => 1
      ];

      $this->db->where('id_regis', $id);
      $this->db->update('tb_register', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/register');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_register',['id_regis' => $id]);
    $this->session->set_flashdata(
            'message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              Data berhasil terhapus!
            </div>'
          );
    redirect('backend/register');
  }

  public function updatestatus()
  {
    $data['judul'] = 'Detail Register';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_regis'] = $this->m_user->get_all_register();
    
    $this->form_validation->set_rules('status', 'status', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/register/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id_regis');
      
      $data = [      
        'created_at' => date("d M Y"),
        'status' => $this->input->post('status')        
      ];

      $this->db->where('id_regis', $id);
      $this->db->update('tb_register', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
        $this->_getMessage($id);
      redirect('backend/register');
    }
  }
  
  private function _getMessage($id){
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $id])->row();
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
                        "title": "Verifikasi akun",
                        "body": "Akun telah diverifikasi, silahkan login!"
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
    redirect('backend/register');

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      // response ketika data berhasil disimpan
    }
  }

  public function detail($id_regis)
  {
    $data['judul'] = 'Register';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_register'] = $this->db->get('tb_register')->num_rows();
    $data['total_pengaduan'] = $this->db->get('tb_pengaduan')->num_rows();
    $data['get_regis'] = $this->db->get_where('tb_register', ['id_regis' => $id_regis])->row_array();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/register/detail', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

}

/* End of file Register.php */