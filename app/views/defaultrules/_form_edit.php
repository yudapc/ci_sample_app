<?php echo form_open($form_action)?>

  <b><?php echo $defaultrule->class?></b>
  <br />
  <br />

  <?php echo form_checkbox(array(
    'name' => 'index',
    'value' => 1,
    'checked' => $defaultrule->index,
  ))?>
  Index <br />
  <?php echo form_error('index')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'show',
    'value' => 1,
    'checked' => $defaultrule->show,
  ))?>
  Show <br />
  <?php echo form_error('show')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'create',
    'value' => 1,
    'checked' => $defaultrule->create,
  ))?>
  Create<br />
  <?php echo form_error('create')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'store',
    'value' => 1,
    'checked' => $defaultrule->store,
  ))?>
  Store<br />
  <?php echo form_error('store')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'edit',
    'value' => 1,
    'checked' => $defaultrule->edit,
  ))?>
  Edit<br />
  <?php echo form_error('edit')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'update',
    'value' => 1,
    'checked' => $defaultrule->update,
  ))?>
  Update<br />
  <?php echo form_error('edit')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'destroy',
    'value' => 1,
    'checked' => $defaultrule->destroy,
  ))?>
  Destroy<br />
  <?php echo form_error('destroy')?>
  <br />

  <?php echo form_checkbox(array(
    'name' => 'download',
    'value' => 1,
    'checked' => $defaultrule->download,
  ))?>
  Download<br />
  <?php echo form_error('download')?>
  <br />

  <?php echo form_submit('submit', 'Update Data')?>
<?php echo form_close()?>
