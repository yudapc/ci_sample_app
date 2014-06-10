<?php
class Roles extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('role');
    check_admin_login();
  }

  public function index() {
    redirect('roles/form');
  }

  public function form($user_id = null) {
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
    $data['modules'] = $this->role->modules();
    $data['role'] = $this->role->find($id);
    $data['form_action'] = 'roles/update/'.$id;
    $data['main_view'] = 'roles/edit';
    $this->render($data);
  }

  public function update($id) {
    $data['modules'] = $this->role->modules();
    $data['role'] = $this->role->find($id);
    $data['form_action'] = 'roles/update/'.$id;
    $data['main_view'] = 'role/edit';

    if($this->input->post('submit')) {
      $index = ($this->input->post('index') == 1) ? $this->input->post('index') : 0;
      $create = ($this->input->post('create') == 1) ? $this->input->post('create') : 0;
      $edit = ($this->input->post('edit') == 1) ? $this->input->post('edit') : 0;
      $destroy = ($this->input->post('destroy') == 1) ? $this->input->post('destroy') : 0;

      $data = array(
               'index' => $index,
               'create' => $create,
               'edit' => $edit,
               'destroy' => $destroy,
            );

      $this->role->update($id, $data);
      redirect('roles/form/'.$this->session->userdata('user_id'));
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->role->delete($id);
    redirect('roles/form/'.$this->session->userdata('user_id'));
  }

}
