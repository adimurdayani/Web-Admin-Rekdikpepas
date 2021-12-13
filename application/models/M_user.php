<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

  public function get_userdata($userdata)
  {
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->join('tb_grup', 'tb_user.user_id = tb_grup.id_grup');
    $this->db->where('username', $userdata);
    return $this->db->get()->row_array();
  }

  public function get_all_register()
  {
    $this->db->order_by('id_regis', 'DESC');
    return $this->db->get('tb_register')->result_array();
  }

  public function get_all_pengaduan()
  {
    $query = 
    " SELECT `tb_pengaduan`.*, `tb_register`.`nama`, `tb_register`.`no_hp`, `tb_register`.`alamat`, `tb_register`.`email`
      FROM `tb_pengaduan` 
      JOIN `tb_register` ON `tb_pengaduan`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_pengaduan_json()
  {
    $query = 
    " SELECT `tb_pengaduan`.*,`tb_grup`.`nama_grup`, `tb_register`.`nama`, `tb_register`.`no_hp`, `tb_register`.`alamat`, `tb_register`.`email`
      FROM `tb_pengaduan` 
      JOIN `tb_grup` ON `tb_pengaduan`.`grup_id` = `tb_grup`.`id_grup`
      JOIN `tb_register` ON `tb_pengaduan`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id` DESC
    ";
    return $this->db->query($query)->row();
  }

  public function get_id_pengaduan($id)
  {
    $query = 
    " SELECT `tb_pengaduan`.*,`tb_grup`.`nama_grup`, `tb_register`.`nama`, `tb_register`.`no_hp`, `tb_register`.`alamat`, `tb_register`.`email`
      FROM `tb_pengaduan` 
      JOIN `tb_grup` ON `tb_pengaduan`.`grup_id` = `tb_grup`.`id_grup`
      JOIN `tb_register` ON `tb_pengaduan`.`user_id` = `tb_register`.`id_regis`
      WHERE `tb_pengaduan`.`id` = $id
    ";
    return $this->db->query($query)->row_array();
  }

  public function get_username($username)
  {
    return $this->db->get_where('tb_register', $username);
  }

  public function get_all_token($token_id)
  {
    return $this->db->get_where('tb_register', $token_id);
  }

  public function update_profile($id)
  {
    $this->db->where('id_regis', $id);
    return $this->db->update('tb_register');
  }
  
  public function upload_gambar($id, $data)
  {
    $this->db->where('id_regis', $id);
    $this->db->update('tb_register', $data);
    return $this->db->affected_rows();
  }
  
  public function no_rekammedik()
  {
    $query = $this->db->query("SELECT MAX(no_rekam) as norekam FROM tb_register");
    $hasil = $query->row();
    return $hasil->norekam;
  }

}

/* End of file M_user.php */