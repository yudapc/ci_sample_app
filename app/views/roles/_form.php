<?php echo form_open($form_action)?>

  <?php 
    $options = array();
    foreach($modules as $module) {
      $options[$module->id]= $module->class;
    }
    echo form_dropdown('class', $options);
  ?>
  <?php echo form_error('class')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'index',
    'value' => 1
  ))?>
  Index <br />
  <?php echo form_error('index')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'show',
    'value' => 1
  ))?>
  Show <br />
  <?php echo form_error('show')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'create',
    'value' => 1
  ))?>
  Create<br />
  <?php echo form_error('create')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'edit',
    'value' => 1
  ))?>
  Edit<br />
  <?php echo form_error('edit')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'destroy',
    'value' => 1
  ))?>
  Destroy<br />
  <?php echo form_error('destroy')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'download',
    'value' => 1
  ))?>
  Download<br />
  <?php echo form_error('download')?>
  <br />

  <?php echo form_submit('submit', 'Create New Data')?>
<?php echo form_close()?>
