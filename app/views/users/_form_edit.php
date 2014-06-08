<?php echo form_open('users/update')?>

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
  <?php echo form_submit('submit', 'Update User')?>
<?php echo form_close()?>
