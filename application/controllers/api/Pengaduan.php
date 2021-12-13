<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Pengaduan extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_user');
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
    }

  public function index_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('id');

    // kondisi jika id pengaduan tidak di temukan 
    
    if ($id === NULL) {
      
      // mengambil data dari database
      $pengaduan = $this->m_user->get_all_pengaduan();
      
    }else{

      // mengambil data dengan id yang di kirim
      $pengaduan = $this->m_user->get_id_pengaduan($id);

    }

    if ($pengaduan) {
      # response pengaduan jika data pengaduan ada, dan menampilkan semua data pengaduan
      $this->response([
        'status'  => true,
        'data'    => $pengaduan,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response pengaduan jika pengaduan tidak ada
      $this->response([
        'status'  => false,
        'message' => 'pengaduan tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function kirim_post()
  {
    
    $id_regis = $this->post('user_id');
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $id_regis])->row();

    $this->form_validation->set_rules('grup_id', 'grup id', 'trim|required');
    $this->form_validation->set_rules('saran', 'saran', 'trim|required');
    $this->form_validation->set_rules('judul_saran', 'judul saran', 'trim|required');

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
      
      $data = [
        'user_id' => htmlspecialchars($this->input->post('user_id', true)),
        'grup_id' => htmlspecialchars($this->input->post('grup_id', true)),
        'saran' => htmlspecialchars($this->input->post('saran', true)),
        'judul_saran' => htmlspecialchars($this->input->post('judul_saran', true)),
        'created_at' => date("d M Y H:i")       
      ];
      $output = $this->db->insert('tb_pengaduan', $data);

      if ($output == 0) {

      // response ketika data gagal di simpan
        $this->response([
          'status' => false,
          'message' => 'Data gagal di simpan!'
        ], REST_Controller::HTTP_NOT_FOUND);

      }else {
        
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
                            "title": "Kiriman Saran Baru",
                            "body": "Saran telah terkirim!"
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

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          // response ketika data berhasil disimpan
          $this->response([
            'status' => true,
            'message' => 'Data berhasil di simpan!',
            'data' => $data,
            'token' => $getAll
          ], REST_Controller::HTTP_OK);
        }
      }
    }
  }

}

/* End of file Pengaduan.php */