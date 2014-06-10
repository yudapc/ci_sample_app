<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->role();
  }

  public function role() {
    $role = $this->user->roles();
    $actions_allow = array('active', 'deactive', 'form', 'store', 'update', 'status');
    if(in_array(action_name(), $actions_allow) || $role->{action_name()} == true) {
    } else {
      redirect('dashboard');
    }
  }

  protected function render($data = null) {
    return $this->load->view('template_backend/index', $data);
  }

}
