<thead>
  <tr>
    <td> User </td>
    <td> Level </td>
    <td> Status </td>
    <td> Roles </td>
    <?php if(check_role(class_name(), 'destroy')): ?>
      <td> Delete </td>
    <?php endif?>
  </tr>
</thead>
<tbody>
  <?php if ($users) : ?>
    <?php  foreach($users as $index=>$user): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo anchor("users/edit/{$user->id}", $user->full_name ."(".$user->username.")") ?> </td>
        <td> <?php echo $user->level ?></td>
        <td> <?=($user->status == 1) ? anchor('users/deactive/'.$user->id, '<i class="icon-thumbs-down"></i> Deactive', array('onclick' => "return confirm('Do you want to deactive this data?')")) : anchor('users/active/'.$user->id, '<i class="icon-thumbs-up"></i> Active', array('onclick' => "return confirm('Do you want to active this data?')"))?> </td>
        <td> <?=anchor('roles/form/'.$user->id, '<i class="icon-ok"></i> Roles')?> </td>
        <?php if(check_role(class_name(), 'destroy')): ?>
          <td> <?=anchor('users/destroy/'.$user->id, '<i class="icon-remove-sign"></i> Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
        <?php endif?>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
