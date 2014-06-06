<?php

class User_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  var $table = 'users';

  function get_data() {
    $this->db->select('users.id, users.username, users.full_name, users.email, levels.level, users.status');
    $this->db->from($this->table);
    $this->db->join('levels', 'levels.id = users.level_id');
    return $this->db->get()->result();
  }

  function get_group() {
    $sql = "SELECT * FROM `group`";
    $query = $this->db->query($sql);
    return $query->result();
  }

  function detail($username) {
    return $this->db->get_where($this->table, array('id' => $username), 1)->row();
  }

  function add($user) {
    $this->db->insert($this->table, $user);
  }

  function delete($id) {
    $this->db->delete($this->table, array('id' => $id));
  }

  function update($id, $user) {
    $this->db->where('id', $id);
    $this->db->update($this->table, $user);
  }

  function valid_id($username) {
    $query = $this->db->get_where($this->table, array('username' => $username));
    if ($query->num_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function count_all() {
    return $this->db->count_all($this->table);
  }

}

