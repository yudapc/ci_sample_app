<?php
class Rules extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('rule');
    check_admin_login();
  }

  public function index() {
    redirect('rules/form');
  }

  public function form($user_id = null) {
    $this->session->set_userdata(array('user_id' => $user_id));
    $data['rules'] = $this->rule->rules($user_id);
    $data['main_view'] = 'rules/index';
    $this->render($data);
  }

  public function create() {
    $data['modules'] = $this->rule->modules();
    $data['form_action'] = 'rules/store';
    $data['main_view'] = 'rules/create';
    $this->render($data);
  }

  public function store() {
    $data['modules'] = $this->rule->modules();
    $data['form_action'] = 'rules/store';
    if($this->input->post('submit')) {
      $this->form_validation->set_rules('class', 'Module', 'required');
      $module_id = $this->input->post('class');
      if($this->form_validation->run() == TRUE && $this->rule->check_module($module_id, $this->session->userdata('user_id')) == false) {
        $data = array(
                 'module_id' => $module_id,
                 'user_id' => $this->session->userdata('user_id'),
                 'index' => $this->input->post('index'),
                 'show' => $this->input->post('show'),
                 'create' => $this->input->post('create'),
                 'store' => $this->input->post('store'),
                 'edit' => $this->input->post('edit'),
                 'update' => $this->input->post('update'),
                 'destroy' => $this->input->post('destroy'),
                 'download' => $this->input->post('download'),
              );
        $this->rule->create($data);
        redirect('rules/form/'.$this->session->userdata('user_id'));
      } else {
        $data['main_view'] = 'rules/create';
        $this->render($data);
      }
    } else {
      redirect('rules/create');
    }
  }

  public function edit($id) {
    $data['modules'] = $this->rule->modules();
    $data['rule'] = $this->rule->find($id);
    $data['form_action'] = 'rules/update/'.$id;
    $data['main_view'] = 'rules/edit';
    $this->render($data);
  }

  public function update($id) {
    $data['modules'] = $this->rule->modules();
    $data['rule'] = $this->rule->find($id);
    $data['form_action'] = 'rules/update/'.$id;
    $data['main_view'] = 'rule/edit';

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

      $this->rule->update($id, $data);
      redirect('rules/form/'.$this->session->userdata('user_id'));
    } else {
        $this->render($data);
    }
  }

  public function destroy($id) {
    $this->rule->delete($id);
    redirect('rules/form/'.$this->session->userdata('user_id'));
  }

}
