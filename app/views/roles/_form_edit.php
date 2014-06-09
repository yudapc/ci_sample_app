<?php echo form_open($form_action)?>

  <b><?php echo $role->class?></b>
  <br />
  <br />

  <?php echo form_checkbox(array(
    'name' => 'index',
    'value' => 1,
    'checked' => $role->index,
  ))?>
  Index <br />
  <?php echo form_error('index')?>
  <br />


  <?php echo form_checkbox(array(
    'name' => 'create',
    'value' => 1,
    'checked' => $role->create,
  ))?>
  Create<br />
  <?php echo form_error('create')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'edit',
    'value' => 1,
    'checked' => $role->edit,
  ))?>
  Edit<br />
  <?php echo form_error('edit')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'destroy',
    'value' => 1,
    'checked' => $role->destroy,
  ))?>
  Destroy<br />
  <?php echo form_error('destroy')?>
  <br />

  <?php echo form_submit('submit', 'Create New Data')?>
<?php echo form_close()?>
