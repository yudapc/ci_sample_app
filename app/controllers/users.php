<?php
class Users extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('defaultrule');
    $this->load->model('rule');
    check_login();
  }

  public function index() {
    $data['users'] = $this->user->all();
    $this->render($data);
  }

  public function create() {
    $this->render();
  }

  public function store() {
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('level', 'Level', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
      $this->form_validation->set_rules('full_name', 'Full Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
      $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');

      if($this->form_validation->run() == TRUE) {
        $level_id = $this->input->post('level');
        $data = array(
                 'username' => $this->input->post('username'),
                 'password' => md5($this->input->post('password')),
                 'level_id' => $level_id,
                 'full_name' => $this->input->post('full_name'),
                 'email' => $this->input->post('email'),
                 'phone' => $this->input->post('phone'),
              );
        $user_id = $this->user->create($data);
        $rules = $this->defaultrule->defaultrules($level_id);
        foreach($rules as $rule) {
          $datarule = array(
            'module_id' => $rule->module_id,
            'user_id' => $user_id,
            'index' => $rule->index,
            'show' => $rule->show,
            'create' => $rule->create,
            'store' => $rule->store,
            'edit' => $rule->edit,
            'update' => $rule->update,
            'destroy' => $rule->destroy,
            'download' => $rule->download,
          );
          $this->rule->create($datarule);
        }
        redirect('users');
      } else {
        $this->render();
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

    if(check_rule('users', 'update')) {
      $data['form_action_edit'] = 'users/update';
    } else {
      $data['form_action_edit'] = 'profile';
    }
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('user_id_edit');
    $data['user'] = $this->user->find($id);

    if(check_rule('users', 'update')) {
      $data['form_action_edit'] = 'users/update';
    } else {
      $data['form_action_edit'] = 'profile';
    }

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
    if($this->input->post('submit')) {
      $this->update();
    }
    $this->edit();
  }

}
