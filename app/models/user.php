<?php

class User extends MY_Model {

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

  public function auth($username, $password) {
    return $this->db->get_where($this->table, array('username' => $username, 'password' => $password, 'status' => 1))->row();
  }

  public function rules() {
    $this->db->select('rules.`index`, rules.`create`, rules.`edit`, rules.`destroy`');
    $this->db->from('rules');
    $this->db->join('modules', 'modules.id=rules.module_id', 'left');
    $this->db->join('users', 'users.id=rules.user_id', 'left');
    $this->db->where('rules.user_id', user_id());
    $this->db->where('modules.class', class_name());
    return $this->db->get()->row();
  }

  public function menu_auth() {
    $this->db->select('modules.`class`, rules.*');
    $this->db->from('rules');
    $this->db->join('modules', 'modules.id=rules.module_id', 'left');
    $this->db->join('users', 'users.id=rules.user_id', 'left');
    $this->db->where('rules.user_id', user_id());
    return $this->db->get()->result_array();
  }

}
