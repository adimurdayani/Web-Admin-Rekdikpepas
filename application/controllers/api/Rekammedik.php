<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Rekammedik extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
    }

  public function index_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('id_rekam');

    // kondisi jika id rekam tidak di temukan 
    
    if ($id === NULL) {
      
      // mengambil data dari database
      $rekam = $this->db->get('tb_rekammedik')->result_array();
      
    }else{

      // mengambil data dengan id yang di kirim
      $rekam = $this->db->get_where('tb_rekammedik', ['id_rekam' => $id])->row_array();

    }

    if ($rekam) {
      # response rekam jika data rekam ada, dan menampilkan semua data rekam
      $this->response([
        'status'  => true,
        'data'    => $rekam,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response rekam jika rekam tidak ada
      $this->response([
        'status'  => false,
        'message' => 'rekam medik tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

}

/* End of file Rekammedik.php */