<?php

class Role extends MY_Model {

  public function __construct() {
    parent::__construct();
  }

  var $table = 'roles';

  public function roles($user_id) {
    $this->db->select('modules.class, roles.*');
    $this->db->from('modules');
    $this->db->join('roles', 'roles.module_id = modules.id', 'left');
    $this->db->where('user_id', $user_id);
    return $this->db->get()->result();
  }

  public function modules() {
    return $this->db->get('modules')->result();
  }

  public function find($id) {
    $this->db->select('modules.class, roles.*');
    $this->db->join('modules', 'roles.module_id = modules.id', 'left');
    $this->db->where('roles.id', $id);
    return $this->db->get($this->table)->row();
  }

  public function check_module($module_id, $user_id) {
    return $this->db->get_where($this->table, array('module_id' => $module_id, 'user_id' => $user_id))->row();
  }

}
