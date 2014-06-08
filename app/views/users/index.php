<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <div class="box-icon">
        <a href="<?php echo site_url('users/create')?>" class="btn btn-primary">Add Data</a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
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
                <td> <?=anchor('users/delete/'.$user->id, 'Delete', array('onclick' => "return confirm('Do you want to delete this data?')"))?> </td>
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
