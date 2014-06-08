<?php

class Module extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  var $table = 'modules';

  public function all() {
    return $this->db->get($this->table)->result();
  }

  public function find($id) {
    return $this->db->get_where($this->table, array('id' => $id))->row();
  }

  public function create($data) {
    $data['created_at'] = date('Y-m-d H:i');
    $data['created_by'] = $this->session->userdata('id');
    $this->db->insert($this->table, $data);
  }

  public function update($id, $data) {
    $data['updated_at'] = date('Y-m-d H:i');
    $data['updated_by'] = $this->session->userdata('id');
    $this->db->where('id', $id);
    $this->db->update($this->table, $data);
  }

  public function delete($id) {
    $this->db->delete($this->table, array('id' => $id));
  }

  public function count() {
    return $this->db->count_all($this->table);
  }

}
