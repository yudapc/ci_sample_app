<?php

class Login extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user');
  }

  function index() {
    if ($this->session->userdata('login') == TRUE) {
      redirect('dashboard');
    } else {
      $this->load->view('login/form');
    }
  }

  function auth() {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == TRUE) {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      if ($this->user->auth($username, $password)) {
        $user = $this->user->find_username($username);
        $data = array(
            'id' => $user->id,
            'username' => $username,
            'full_name' => $user->full_name,
            'level_id' => $user->level_id,
            'email' => $user->email,
            'login' => TRUE,
        );
        $this->session->set_userdata($data);
        redirect('dashboard');
      } else {
        $this->session->set_flashdata('message', 'Maaf, username dan atau password Anda salah');
        redirect('login');
      }
    } else {
      $this->load->view('login/form');
    }
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }

}

