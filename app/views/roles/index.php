<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
    <span> Manage <?php echo class_name()?></span>
      <div class="box-icon">
        <a href="<?php echo site_url(class_name().'/create')?>" class="btn btn-primary">Add Data</a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered">
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
          <?php if ($roles) : ?>
            <?php  foreach($roles as $index=>$role): ?>
            <tr class="<?php echo ($index%2 == 0) ? 'zebra' : 'cross'?>">
                <td> <?php echo anchor('roles/edit/'.$role->id, $role->class. ' ('.anchor('roles/destroy/'.$role->id, 'Delete').')')?> </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'index',
                                                'value' => $role->index,
                                                'checked' => $role->index,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'show',
                                                'value' => $role->show,
                                                'checked' => $role->show,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'create',
                                                'value' => $role->create,
                                                'checked' => $role->create,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'store',
                                                'value' => $role->store,
                                                'checked' => $role->store,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'edit',
                                                'value' => $role->edit,
                                                'checked' => $role->edit,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'update',
                                                'value' => $role->update,
                                                'checked' => $role->update,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'destroy',
                                                'value' => $role->destroy,
                                                'checked' => $role->destroy,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
                <td> <?php echo form_checkbox(array(
                                                'name' => 'download',
                                                'value' => $role->download,
                                                'checked' => $role->download,
                                                'disabled' => 'disabled'
                                              )) ?>
                </td>
              </tr>
            <?php endforeach;?>
          <?php endif;?>
        </tbody>
      </table>
    </div>
  </div><!--/span-->
</div><!--/row-->

<hr>
<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
