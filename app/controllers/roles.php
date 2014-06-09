<?php
class Roles extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('role');
    check_admin_login();
  }

  public function index() {
    redirect('roles/form');
  }

  public function form($user_id = null) {
    if(!$user_id) {
      $this->session->userdata('user_id');
    }
    $this->session->set_userdata(array('user_id' => $user_id));
    $data['roles'] = $this->role->roles($user_id);
    $data['main_view'] = 'roles/index';
    $this->render($data);
  }

  public function create() {
    $data['modules'] = $this->role->modules();
    $data['form_action'] = 'roles/store';
    $data['main_view'] = 'roles/create';
    $this->render($data);
  }

  public function store() {
    $data['modules'] = $this->role->modules();
    $data['form_action'] = 'roles/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');
      $module_id = $this->input->post('class');
      if($this->form_validation->run() == TRUE && $this->role->check_module($module_id, $this->session->userdata('user_id')) == false) {
        $data = array(
                 'module_id' => $module_id,
                 'user_id' => $this->session->userdata('user_id'),
                 'index' => $this->input->post('index'),
                 'create' => $this->input->post('create'),
                 'edit' => $this->input->post('edit'),
                 'destroy' => $this->input->post('destroy'),
              );
        $this->role->create($data);
        redirect('roles/form/'.$this->session->userdata('user_id'));
      } else {
        $data['main_view'] = 'roles/create';
        $this->render($data);
      }
    } else {
      redirect('roles/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('role_id_edit' => $id));
    $data['modules'] = $this->role->modules();
    $data['role'] = $this->role->find($id);
    $data['form_action'] = 'roles/update';
    $data['main_view'] = 'roles/edit';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('module_id_edit');
    $data['modules'] = $this->role->modules();
    $data['role'] = $this->role->find($id);
    $data['form_action'] = 'role/update';
    $data['main_view'] = 'role/edit';

    if($this->input->post('submit')) {
      $data = array(
               'index' => $this->input->post('index'),
               'create' => $this->input->post('create'),
               'edit' => $this->input->post('edit'),
               'destroy' => $this->input->post('destroy'),
            );

      $this->role->update($id, $data);
      redirect('roles/form/'.$this->session->userdata('user_id'));
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    // $this->module->delete($id);
    // redirect('modules');
  }

  //
  // private
  //
  private function render($data = null) {
    return $this->load->view('template_backend/index', $data);
  }
}
