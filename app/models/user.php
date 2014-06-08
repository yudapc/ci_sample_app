<?php

class User extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  var $table = 'users';

  public function all() {
    $this->db->select('users.id, users.username, users.full_name, users.email, levels.level, users.status');
    $this->db->from($this->table);
    $this->db->join('levels', 'levels.id = users.level_id');
    return $this->db->get()->result();
  }

  public function find($id) {
    return $this->db->get_where($this->table, array('id' => $id))->row();
  }

  public function find_username($username) {
    return $this->db->get_where($this->table, array('username' => $username))->row();
  }

  public function create($user) {
    $this->db->insert($this->table, $user);
  }

  public function update($id, $user) {
    $this->db->where('id', $id);
    $this->db->update($this->table, $user);
  }

  public function delete($id) {
    $this->db->delete($this->table, array('id' => $id));
  }

  public function auth($username, $password) {
    return $this->db->get_where($this->table, array('username' => $username, 'password' => $password, 'status' => 1))->row();
  }

  public function count() {
    return $this->db->count_all($this->table);
  }

}
