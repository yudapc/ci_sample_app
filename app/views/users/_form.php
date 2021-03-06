<?php echo form_open('users/store')?>

  <?php 
    $options = array();
    foreach($this->user->levels() as $level) {
      $options[$level->id]= $level->level;
    }
    echo form_dropdown('level', $options);
  ?>
  <?php echo form_error('level')?>
  <br />

  <?php echo form_input(
    array(
      'name' => 'username',
      'value' => set_value('username'),
      'placeholder' => 'Username',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('username')?>

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
      'value' => set_value('full_name'),
      'placeholder' => 'Full Name',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('full_name')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'email',
      'value' => set_value('email'),
      'placeholder' => 'E-mail',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('email')?>

  <br />
  <?php echo form_input(
    array(
      'name' => 'phone',
      'value' => set_value('phone'),
      'placeholder' => 'Phone',
      'class' => 'input'
    )
  )?>
  <?php echo form_error('phone')?>

  <br />
  <?php echo form_submit('submit', 'Create New User')?>
<?php echo form_close()?>
