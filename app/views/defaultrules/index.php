<thead>
  <tr>
    <td> Module </td>
    <td> Index </td>
    <td> Show </td>
    <td> Create </td>
    <td> Store </td>
    <td> Edit </td>
    <td> Update </td>
    <td> Destroy </td>
    <td> Download </td>
  </tr>
</thead>
<tbody>
  <?php if ($defaultrules) : ?>
    <?php  foreach($defaultrules as $index=>$defaultrule): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo anchor('defaultrules/edit/'.$defaultrule->id.'/'.$defaultrule->level_id, $defaultrule->class. ' ('.anchor('defaultrules/destroy/'.$defaultrule->id, 'Delete').')')?> </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'index',
                                        'value' => $defaultrule->index,
                                        'checked' => $defaultrule->index,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'show',
                                        'value' => $defaultrule->show,
                                        'checked' => $defaultrule->show,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'create',
                                        'value' => $defaultrule->create,
                                        'checked' => $defaultrule->create,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'store',
                                        'value' => $defaultrule->store,
                                        'checked' => $defaultrule->store,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'edit',
                                        'value' => $defaultrule->edit,
                                        'checked' => $defaultrule->edit,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'update',
                                        'value' => $defaultrule->update,
                                        'checked' => $defaultrule->update,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'destroy',
                                        'value' => $defaultrule->destroy,
                                        'checked' => $defaultrule->destroy,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'download',
                                        'value' => $defaultrule->download,
                                        'checked' => $defaultrule->download,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
