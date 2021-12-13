<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class User extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->load->model('m_user');
        
    }
    
    public function index_get()
    {
      $id  = $this->get('id_regis');

      if ($id === null) {
        $data = $this->db->get('tb_register')->result_array();
      }else{
        $data = $this->db->get_where('tb_register', ['id_regis' => $id])->row_array();
      }

      if ($data) {
        $this->response([
          'status'  => true,
          'data'    => $data,
          'message' => 'sukses'
        ], REST_Controller::HTTP_OK);
      }else{
        $this->response([
          'status'  => false,
          'message' => 'data tidak ditemukan'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }

  public function profil_post()
  {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => validation_errors()
        ], REST_Controller::HTTP_BAD_REQUEST);

      }    

    } else {
      # inisial data yang akan di input kedalam database
      $id = $this->input->post('id_regis');
      
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
        'kelamin' => htmlspecialchars($this->input->post('kelamin', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'created_at' => date("d M Y H:i"),
        'nik' => htmlspecialchars($this->input->post('nik', true)),
        'no_jaminan' => htmlspecialchars($this->input->post('no_jaminan', true)),
        'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true))       
      ];
      $this->db->where('id_regis', $id);
      $output = $this->db->update('tb_register', $data);

      if ($output == 0) {
      // response ketika data gagal di simpan
        $this->response([
          'status' => false,
          'message' => 'Data gagal di simpan'
        ], REST_Controller::HTTP_NOT_FOUND);

      }else {
        // response ketika data berhasil disimpan
        $this->response([
          'status' => true,
          'message' => 'Data berhasil di simpan',
          'data' => $data
        ], REST_Controller::HTTP_OK);
      }
    }
  }

  public function password_post()
  {
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => 'data yang diinput salah'
        ], REST_Controller::HTTP_BAD_REQUEST);

      }    

    } else {
      # inisial data yang akan di input kedalam database
      $id = $this->input->post('id_regis');
      
      $data = [
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => sha1($this->input->post('password')),
        'created_at' => date("d M Y H:i")        
      ];
      $this->db->where('id_regis', $id);
      $output = $this->db->update('tb_register', $data);

      if ($output == 0) {
      // response ketika data gagal di simpan
        $this->response([
          'status' => false,
          'message' => 'Data gagal di simpan'
        ], REST_Controller::HTTP_NOT_FOUND);

      }else {
        // response ketika data berhasil disimpan
        $this->response([
          'status' => true,
          'message' => 'Data berhasil di simpan',
          'data' => $data
        ], REST_Controller::HTTP_OK);
      }
    }
  }
  
  
  public function upload_post()
  {
    $id = $this->input->post('id_regis');

    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'jpg|png';
    $config['max_size']             = '1024';
    $config['encrypt_name']		      = TRUE;

    $this->load->library('upload', $config);

    if (!empty($_FILES['gambar'])) {

      $this->upload->do_upload('gambar');
      $data_gambar = $this->upload->data();
      $file_gambar = $data_gambar['file_name'];
      
    }else{
      // response ketika gambar bermasalah
      $this->response([
        'status'  => false,
        'message' => 'file tidak terupload'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }

    $data = [
      'created_at' => date("d M Y H:i:s"),
      'gambar' => $file_gambar
    ];

    if($this->m_user->upload_gambar($id, $data) > 0){

      // response jika data yang di kirim ada
      $this->response([
        'status'  => true,
        'data'    => $data,
        'message' => 'laporan berhasil disimpan'
      ], REST_Controller::HTTP_CREATED);
      
    }else{
      // jika data yang di kirim tidak valid
      $this->response([
        'status' => false,
        'message'=> 'data gagal tersimpan'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }


}

/* End of file User.php */