<?php echo form_open($form_action)?>
  <?php echo form_input(
    array(
      'name' => 'class',
      'value' => isset($module->class) ? $module->class : set_value('class'),
      'placeholder' => 'Module / Class',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('class')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'action',
      'value' => isset($module->action) ? $module->action : set_value('action'),
      'placeholder' => 'Action',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('action')?>

  <br />
  <?php echo form_submit('submit', 'Create New Data')?>
<?php echo form_close()?>
