<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->check_action_role();
  }

  public function check_action_role() {
    if(check_role(class_name(), action_name())) {
      return true;
    }
    redirect('dashboard');
  }

  protected function render($data = null) {
    return $this->load->view('template_backend/index', $data);
  }

}
