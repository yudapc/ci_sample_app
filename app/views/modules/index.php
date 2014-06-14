<thead>
  <tr>
    <td> Module </td>
    <?php if(check_rule(class_name(), 'edit')): ?>
      <td> Edit </td>
    <?php endif?>

    <?php if(check_rule(class_name(), 'destroy')): ?>
      <td> Destroy </td>
    <?php endif?>

  </tr>
</thead>
<tbody>
  <?php if ($modules) : ?>
    <?php  foreach($modules as $index=>$module): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo $module->class?> </td>

        <?php if(check_rule(class_name(), 'edit')): ?>
          <td> <?=anchor('modules/edit/'.$module->id, '<i class="icon-edit"></i> Edit', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>
        <?php endif?>

        <?php if(check_rule(class_name(), 'destroy')): ?>
          <td> <?=anchor('modules/destroy/'.$module->id, '<i class="icon-remove-sign"></i> Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
        <?php endif?>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
