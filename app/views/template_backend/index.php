<?php
  $this->load->view('template_backend/header');
  $this->load->view('template_backend/menu');
  $this->load->view('template_backend/breadcrumb');

  if(action_name() == 'store') {
    $view = 'create';
  } else if(action_name() == 'update') {
    $view = 'edit';
  } else {
    $view = action_name();
  }

  if(action_name() == 'index') {
    $this->load->view('template_backend/manage', array('view' => $view));
  } else {
    $this->load->view(class_name().'/'.$view);
  }
  $this->load->view('template_backend/footer');
?>
