<thead>
  <tr>
    <td> Level </td>
    <td> Set Default Rules </td>
    <?php if(check_rule(class_name(), 'edit')): ?>
      <td> Edit </td>
    <?php endif?>

    <?php if(check_rule(class_name(), 'destroy')): ?>
      <td> Destroy </td>
    <?php endif?>

  </tr>
</thead>
<tbody>
  <?php if ($levels) : ?>
    <?php  foreach($levels as $index=>$level): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo $level->level?> </td>

        <td> <?=anchor('defaultrules/edit/'.$level->id, '<i class="icon-ok"></i> Set Rules', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>

        <?php if(check_rule(class_name(), 'edit')): ?>
          <td> <?=anchor('levels/edit/'.$level->id, '<i class="icon-edit"></i> Edit', array('onclick' => "return confirm('Do you want to edit this data?')"))?> </td>
        <?php endif?>

        <?php if(check_rule(class_name(), 'destroy')): ?>
          <td> <?=anchor('levels/destroy/'.$level->id, '<i class="icon-remove-sign"></i> Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
        <?php endif?>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
