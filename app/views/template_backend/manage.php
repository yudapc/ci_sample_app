<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
    <span> Manage <?php echo class_name()?></span>
      <div class="box-icon">
        <a href="<?php echo site_url('users/create')?>" class="btn btn-primary">Add Data</a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <?php $this->load->view($main_view)?>
      </table>
    </div>
  </div><!--/span-->
</div><!--/row-->

<hr>
<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
