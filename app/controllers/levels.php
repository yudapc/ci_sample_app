<?php
class Levels extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('level');
  }

  public function index() {
    $data['levels'] = $this->level->all();
    $this->render($data);
  }

  public function create() {
    $data['form_action'] = 'levels/store';
    $this->render($data);
  }

  public function store() {
    $data['form_action'] = 'levels/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('level', 'level', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'level' => $this->input->post('level'),
              );
        $this->level->create($data);
        redirect('levels');
      } else {
        $this->render($data);
      }
    } else {
      redirect('levels/create');
    }
  }

  public function edit($id) {
    $this->session->set_userdata(array('level_id_edit' => $id));
    $data['level'] = $this->level->find($id);
    $data['form_action'] = 'levels/update';
    $this->render($data);
  }

  public function update() {
    $id = $this->session->userdata('level_id_edit');
    $data['level'] = $this->level->find($id);
    $data['form_action'] = 'levels/update';

    if($this->input->post('submit')) {
      $this->form_validation->set_rules('level', 'Level', 'required');

      if($this->form_validation->run() == TRUE) {
        $data = array(
                 'level' => $this->input->post('level'),
              );

        $this->level->update($id, $data);
        redirect('levels');
      } else {
        $this->render($data);
      }
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->level->delete($id);
    redirect('levels');
  }

}
