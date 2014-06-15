<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    check_login();
  }

  public function index() {
    $this->load->view('template_backend/index');
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
