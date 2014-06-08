<?php
class Modules extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('module');
    check_admin_login();
  }

  public function index() {
    $data['modules'] = $this->module->all();
    $data['main_view'] = 'modules/index';
    $this->render($data);
  }

  public function create() {
    $data['form_action'] = 'modules/store';
    $data['main_view'] = 'modules/create';
    $this->render($data);
  }

  public function store() {
    $data['form_action'] = 'modules/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');
      $this->form_validation->set_rules('action', 'Action', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'class' => $this->input->post('class'),
                 'action' => $this->input->post('action'),
              );
        $this->module->create($data);
        redirect('modules');
      } else {
        $data['main_view'] = 'modules/create';
        $this->render($data);
      }
    } else {
      redirect('modules/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('module_id_edit' => $id));
    $data['module'] = $this->module->find($id);
    $data['form_action'] = 'modules/update';
    $data['main_view'] = 'modules/edit';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('module_id_edit');
    $data['module'] = $this->module->find($id);
    $data['form_action'] = 'modules/update';
    $data['main_view'] = 'modules/edit';

    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');
      $this->form_validation->set_rules('action', 'Action', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'class' => $this->input->post('class'),
                 'action' => $this->input->post('action'),
              );

        $this->module->update($id, $data);
        redirect('modules');
      } else {
        $this->render($data);
      }
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->module->delete($id);
    redirect('modules');
  }

  //
  // private
  //
  private function render($data = null) {
    return $this->load->view('template_backend/index', $data);
  }
}
