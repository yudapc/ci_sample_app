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
      </table>
    </div>
  </div><!--/span-->
</div><!--/row-->

<hr>
<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
