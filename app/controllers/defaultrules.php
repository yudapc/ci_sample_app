<?php
class Defaultrules extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('defaultrule');
  }

  public function index($level_id = null) {
    $this->session->set_userdata(array('level_id' => $level_id));
    $data['defaultrules'] = $this->defaultrule->defaultrules($level_id);
    $this->render($data);
  }

  public function create() {
    $data['modules'] = $this->defaultrule->modules();
    $data['form_action'] = 'defaultrules/store';
    $this->render($data);
  }

  public function store() {
    $data['modules'] = $this->defaultrule->modules();
    $data['form_action'] = 'defaultrules/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');
      $module_id = $this->input->post('class');
      if($this->form_validation->run() == TRUE && $this->defaultrule->check_module($module_id, $this->session->userdata('module_id')) == false) {
        $data = array(
                 'module_id' => $module_id,
                 'level_id' => $this->session->userdata('level_id'),
                 'index' => $this->input->post('index'),
                 'show' => $this->input->post('show'),
                 'create' => $this->input->post('create'),
                 'store' => $this->input->post('store'),
                 'edit' => $this->input->post('edit'),
                 'update' => $this->input->post('update'),
                 'destroy' => $this->input->post('destroy'),
                 'download' => $this->input->post('download'),
              );
        $this->defaultrule->create($data);
        redirect('defaultrules/index/'.$this->session->userdata('level_id'));
      } else {
        $this->render($data);
      }
    } else {
      redirect('defaultrules/create');
    }
  }

  public function edit($id, $level_id) {
    $data['modules'] = $this->defaultrule->modules();
    $data['defaultrule'] = $this->defaultrule->find($id);
    $data['form_action'] = 'defaultrules/update/'.$id.'/'.$level_id;
    $this->render($data);
  }

  public function update($id, $level_id) {
    $data['modules'] = $this->defaultrule->modules();
    $data['defaultrule'] = $this->defaultrule->find($id);
    $data['form_action'] = 'defaultrules/update/'.$id;

    if($this->input->post('submit')) {
      $index = ($this->input->post('index') == 1) ? $this->input->post('index') : 0;
      $show = ($this->input->post('show') == 1) ? $this->input->post('show') : 0;
      $create = ($this->input->post('create') == 1) ? $this->input->post('create') : 0;
      $store = ($this->input->post('store') == 1) ? $this->input->post('store') : 0;
      $edit = ($this->input->post('edit') == 1) ? $this->input->post('edit') : 0;
      $update = ($this->input->post('update') == 1) ? $this->input->post('update') : 0;
      $destroy = ($this->input->post('destroy') == 1) ? $this->input->post('destroy') : 0;
      $download = ($this->input->post('download') == 1) ? $this->input->post('download') : 0;

      $data = array(
               'index' => $index,
               'show' => $show,
               'create' => $create,
               'store' => $store,
               'edit' => $edit,
               'update' => $update,
               'destroy' => $destroy,
               'download' => $download,
            );

      $this->defaultrule->update($id, $data);
      redirect('defaultrules/index/'.$this->session->userdata('level_id'));
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->defaultrule->delete($id);
    redirect('defaultrules/form/'.$this->session->userdata('module_id'));
  }

}
