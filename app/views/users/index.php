<thead>
  <tr>
    <td> Username </td>
    <td> Full Name </td>
    <td> E-mail </td>
    <td> Status </td>
    <td> Edit </td>
    <td> Delete </td>
  </tr>
</thead>
<tbody>
  <?php if ($users) : ?>
    <?php  foreach($users as $index=>$user): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?=$user->username?> </td>
        <td> <?=$user->full_name?> </td>
        <td> <?=$user->email?> </td>
        <td> <?=($user->status == 1) ? anchor('users/deactive/'.$user->id, 'Deactive', array('onclick' => "return confirm('Do you want to deactive this data?')")) : anchor('users/active/'.$user->id, 'Active', array('onclick' => "return confirm('Do you want to active this data?')"))?> </td>
        <td> <?=anchor('users/edit/'.$user->id, 'Edit', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>
        <td> <?=anchor('users/destroy/'.$user->id, 'Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
