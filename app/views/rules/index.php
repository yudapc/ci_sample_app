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
  <?php if ($rules) : ?>
    <?php  foreach($rules as $index=>$rule): ?>
    <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
        <td> <?php echo anchor('rules/edit/'.$rule->id, $rule->class. ' ('.anchor('rules/destroy/'.$rule->id, 'Delete').')')?> </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'index',
                                        'value' => $rule->index,
                                        'checked' => $rule->index,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'show',
                                        'value' => $rule->show,
                                        'checked' => $rule->show,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'create',
                                        'value' => $rule->create,
                                        'checked' => $rule->create,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'store',
                                        'value' => $rule->store,
                                        'checked' => $rule->store,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'edit',
                                        'value' => $rule->edit,
                                        'checked' => $rule->edit,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'update',
                                        'value' => $rule->update,
                                        'checked' => $rule->update,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'destroy',
                                        'value' => $rule->destroy,
                                        'checked' => $rule->destroy,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
        <td> <?php echo form_checkbox(array(
                                        'name' => 'download',
                                        'value' => $rule->download,
                                        'checked' => $rule->download,
                                        'disabled' => 'disabled'
                                      )) ?>
        </td>
      </tr>
    <?php endforeach;?>
  <?php endif;?>
</tbody>
