<div class="container-fluid">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div class="span2 main-menu-span">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="<?= base_url() ?>"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-align-justify icon-white"></i><span class="hidden-tablet"> Static Page</span></a>
                        <ul>

                        </ul>
                    </li>
                    <?php if(check_rule('products', 'index')): ?>
                      <li><a href="<?=site_url('products')?>"><i class="icon-list-alt icon-white"></i><span class="hidden-tablet"> Products</span></a></li>
                    <?php endif?>

                    <?php if(check_rule('customers', 'index')): ?>
                      <li><a href="<?=site_url('customers')?>"><i class="icon-list-alt icon-white"></i><span class="hidden-tablet"> Customers</span></a></li>
                    <?php endif?>

                    <?php if(check_rule('users', 'index')): ?>
                      <li>
                          <a class="dropmenu" href="#"><i class="icon-align-justify icon-white"></i><span class="hidden-tablet"> Users Management</span></a>
                          <ul>
                            <li><a href="<?=site_url('users')?>"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Users</span></a></li>

                            <?php if(check_rule('levels', 'index')): ?>
                              <li><a href="<?=site_url('levels')?>"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Levels</span></a></li>
                            <?php endif?>

                            <?php if(check_rule('modules', 'index')): ?>
                              <li><a href="<?=site_url('modules')?>"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Modules</span></a></li>
                            <?php endif?>
                          </ul>
                      </li>
                    <?php endif?>

                    <? /*
                      <li><a href="chart.html"><i class="icon-list-alt icon-white"></i><span class="hidden-tablet"> Charts</span></a></li>

                      <li><a href="typography.html"><i class="icon-font icon-white"></i><span class="hidden-tablet"> Typography</span></a></li>
                      <li><a href="gallery.html"><i class="icon-picture icon-white"></i><span class="hidden-tablet"> Gallery</span></a></li>
                      <li><a href="table.html"><i class="icon-align-justify icon-white"></i><span class="hidden-tablet"> Tables</span></a></li>
                      <li><a href="calendar.html"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendar</span></a></li>
                      <li><a href="grid.html"><i class="icon-th icon-white"></i><span class="hidden-tablet"> Grid</span></a></li>
                      <li><a href="file-manager.html"><i class="icon-folder-open icon-white"></i><span class="hidden-tablet"> File Manager</span></a></li>
                      <li><a href="icon.html"><i class="icon-star icon-white"></i><span class="hidden-tablet"> Icons</span></a></li>
                      <li><a href="login.html"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Login Page</span></a></li>
                     */ ?>
                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <!-- end: Main Menu -->

        <noscript>
        <div class="alert alert-block span10">
            <h4 class="alert-heading">Warning!</h4>
            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>

        <div id="content" class="span10">
