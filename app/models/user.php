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

  public function roles() {
    $this->db->select('roles.`index`, roles.`create`, roles.`edit`, roles.`destroy`');
    $this->db->from('roles');
    $this->db->join('modules', 'modules.id=roles.module_id', 'left');
    $this->db->join('users', 'users.id=roles.user_id', 'left');
    $this->db->where('roles.user_id', user_id());
    $this->db->where('modules.class', class_name());
    return $this->db->get()->row();
  }

  public function menu_auth() {
    $this->db->select('modules.`class`, roles.*');
    $this->db->from('roles');
    $this->db->join('modules', 'modules.id=roles.module_id', 'left');
    $this->db->join('users', 'users.id=roles.user_id', 'left');
    $this->db->where('roles.user_id', user_id());
    return $this->db->get()->result_array();
  }

}
