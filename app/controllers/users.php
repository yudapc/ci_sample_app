<?php
class Users extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('user');
    check_login();
  }

  public function index() {
    $data['users'] = $this->user->all();
    $data['main_view'] = 'users/index';
    $this->render($data);
  }

  public function create() {
    $data['main_view'] = 'users/create';
    $this->render($data);
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
              );
        $this->user->create($data);
        redirect('users');
      } else {
        $data['main_view'] = 'users/create';
        $this->render($data);
      }
    } else {
      redirect('users/create');
    }
  }

  public function edit($id = null) {
    if(is_null($id)) {
      $id = user_id();
    }
    $this->session->set_userdata(array('user_id_edit' => $id));
    $data['user'] = $this->user->find($id);
    $data['main_view'] = 'users/edit';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('user_id_edit');
    $data['user'] = $this->user->find($id);
    $data['main_view'] = 'users/edit';

    if($this->input->post('submit')) {
      $this->form_validation->set_rules('password', 'Password', 'matches[passconf]');
      $this->form_validation->set_rules('passconf', 'Password Confirmation');
      $this->form_validation->set_rules('full_name', 'Full Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'full_name' => $this->input->post('full_name'),
                 'email' => $this->input->post('email'),
                 'phone' => $this->input->post('phone'),
              );

        $password = $this->input->post('password');
        if($password) {
          $data['password'] = md5($password);
        }

        $this->user->update($id, $data);
        redirect('users');
      } else {
        $this->render($data);
      }
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    if($this->session->userdata('id') != $id) {
      $this->user->delete($id);
    }
    redirect('users');
  }

  public function active($id) {
    $data = array('status' => 1);
    $this->user->update($id, $data);
    redirect('users');
  }

  public function deactive($id) {
    if($this->session->userdata('id') != $id) {
      $data = array('status' => 0);
      $this->user->update($id, $data);
    }
    redirect('users');
  }

  public function profile() {
    $this->edit();
  }

}
