<?php
  $this->load->view('template_backend/header');
  $this->load->view('template_backend/menu');
  $this->load->view('template_backend/breadcrumb');
  if(action_name() == 'index') {
    $this->load->view('template_backend/manage');
  } else {
    $this->load->view($main_view);
  }
  $this->load->view('template_backend/footer');
?>
