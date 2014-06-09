<thead>
  <tr>
    <td> Module </td>
    <td> Edit </td>
    <td> Destroy </td>
  </tr>
</thead>
<tbody>
  <?php if ($modules) : ?>
    <?php  foreach($modules as $index=>$module): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo $module->class?> </td>
        <td> <?=anchor('modules/edit/'.$module->id, 'Edit', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>
        <td> <?=anchor('modules/destroy/'.$module->id, 'Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
