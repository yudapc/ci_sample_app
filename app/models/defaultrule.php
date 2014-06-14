<?php

class Defaultrule extends MY_Model {

  public function __construct() {
    parent::__construct();
  }

  var $table = 'default_rules';

  public function defaultrules($id) {
    $this->db->select('modules.class, default_rules.*');
    $this->db->from('modules');
    $this->db->join('default_rules', 'default_rules.module_id = modules.id', 'left');
    $this->db->where('level_id', $id);
    return $this->db->get()->result();
  }

  public function modules() {
    return $this->db->get('modules')->result();
  }

  public function find($id) {
    $this->db->select('modules.class, default_rules.*');
    $this->db->join('modules', 'default_rules.module_id = modules.id', 'left');
    $this->db->where('default_rules.id', $id);
    return $this->db->get($this->table)->row();
  }

  public function check_module($module_id, $level_id) {
    return $this->db->get_where($this->table, array('module_id' => $module_id, 'level_id' => $level_id))->row();
  }

}
