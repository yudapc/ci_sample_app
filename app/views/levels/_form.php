<?php echo form_open($form_action)?>
  <?php echo form_input(
    array(
      'name' => 'level',
      'value' => isset($level->level) ? $level->level : set_value('level'),
      'placeholder' => 'Level',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('level')?>

  <br />

  <?php 
    if(action_name() == 'create' || action_name() == 'store') {
      echo form_submit('submit', 'Create New Data');
    } else {
      echo form_submit('submit', 'Update Data');
    }
  ?>
    <a href="<?=site_url(class_name())?>" class="btn btn-warning"> Back </a>
<?php echo form_close()?>
