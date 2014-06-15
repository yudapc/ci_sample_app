<?php echo form_open($form_action_edit)?>

  <?php 
    $options = array();
    foreach($this->user->levels() as $level) {
      $options[$level->id]= $level->level;
    }
    echo form_dropdown('level', $options, $user->level_id);
  ?>
  <?php echo form_error('level')?>
  <br />

  <?php echo form_input(
    array(
      'name' => 'username',
      'value' => $user->username,
      'disabled' => 'disabled'
    )
  )?>
  <br />
  <?php echo form_password(
    array(
      'name' => 'password',
      'value' => '',
      'placeholder' => 'Password',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('password')?>

  <br />
  <?php echo form_password(
    array(
      'name' => 'passconf',
      'value' => '',
      'placeholder' => 'Password Confirmation',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('passconf')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'full_name',
      'value' => $user->full_name,
      'placeholder' => 'full_name',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('full_name')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'email',
      'value' => $user->email,
      'placeholder' => 'email',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('email')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'phone',
      'value' => $user->phone,
      'placeholder' => 'phone',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('phone')?>

  <br />
  <?php echo form_submit('submit', 'Update Data')?>
<?php echo form_close()?>
