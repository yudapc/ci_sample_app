<?php
class Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    check_login();
  }

  public function index() {
    $data['users'] = $this->user_model->get_data();
    $this->load->view('users/index', $data);
  }

  public function create() {
    $this->load->view('users/create');
  }

  public function store() {
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
      $this->form_validation->set_rules('full_name', 'Full Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
      $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'username' => $this->input->post('username'),
                 'password' => md5($this->input->post('password')),
                 'full_name' => $this->input->post('full_name'),
                 'email' => $this->input->post('email'),
                 'phone' => $this->input->post('phone'),
                 'created_at' => date('Y-m-d H:i'),
                 'created_by' => $this->session->userdata('id'),
              );
        $this->user_model->add($data);
        redirect('users');
      } else {
        $this->load->view('users/create');
      }
    } else {
      redirect('users/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('user_id_edit' => $id));
    $data['user'] = $this->user_model->detail($id);
    $this->load->view('users/edit', $data);
  }

  public function update() {
    $id = $this->session->userdata('user_id_edit');
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
      $this->form_validation->set_rules('full_name', 'Full Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'password' => md5($this->input->post('password')),
                 'full_name' => $this->input->post('full_name'),
                 'email' => $this->input->post('email'),
                 'phone' => $this->input->post('phone'),
                 'updated_at' => date('Y-m-d H:i'),
                 'updated_by' => $this->session->userdata('id'),
              );
        $this->user_model->update($id, $data);
        redirect('users');
      } else {
        $this->load->view('users/edit/'.$id);
      }
    } else {
       $this->load->view('users/edit/'.$id);
    }
  }

  public function delete($id) {
    $this->user_model->delete($id);
    redirect('users');
  }

  public function active($id) {
    $data = array('status' => 1);
    $this->user_model->update($id, $data);
    redirect('users');
  }

  public function deactive($id) {
    $data = array('status' => 0);
    $this->user_model->update($id, $data);
    redirect('users');
  }

}
