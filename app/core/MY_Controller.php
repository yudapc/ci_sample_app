<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // die(user_id());
    // die(print_r($this->user->roles()));
  }

  protected function render($data = null) {
    return $this->load->view('template_backend/index', $data);
  }

}
