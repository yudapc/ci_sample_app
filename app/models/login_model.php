<?php
class Login_model extends CI_Model {
  function Login_model() {
    parent::__construct();
  }

  var $table = 'users';

  function check_user($username, $password) {
    $query = $this->db->get_where($this->table, array('username' => $username, 'password' => $password, 'status' => 1), 1, 0);
    if ($query->num_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function detail($username) {
    return $this->db->get_where($this->table, array('username' => $username))->row();
  }

}

