<?php
class Modules extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('module');
  }

  public function index() {
    $data['modules'] = $this->module->all();
    $this->render($data);
  }

  public function create() {
    $data['form_action'] = 'modules/store';
    $this->render($data);
  }

  public function store() {
    $data['form_action'] = 'modules/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'class' => $this->input->post('class'),
              );
        $this->module->create($data);
        redirect('modules');
      } else {
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
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('module_id_edit');
    $data['module'] = $this->module->find($id);
    $data['form_action'] = 'modules/update';

    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'class' => $this->input->post('class'),
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

}
