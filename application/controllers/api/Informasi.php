<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Informasi extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
    }

  public function index_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('id_info');

    // kondisi jika id rekam tidak di temukan 
    
    if ($id === NULL) {
      
      // mengambil data dari database
      $info = $this->db->get('tb_informasi')->result_array();
      
    }else{

      // mengambil data dengan id yang di kirim
      $info = $this->db->get_where('tb_informasi', ['id_info' => $id])->row_array();

    }

    if ($info) {
      # response info jika data info ada, dan menampilkan semua data info
      $this->response([
        'status'  => true,
        'data'    => $info,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response info jika info tidak ada
      $this->response([
        'status'  => false,
        'message' => 'info tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

}

/* End of file Rekammedik.php */