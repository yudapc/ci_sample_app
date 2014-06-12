<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Login Admin Website</title>
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?= assets_url() ?>template/backend/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= assets_url() ?>template/backend/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?= assets_url() ?>template/backend/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?= assets_url() ?>template/backend/css/style-responsive.css" rel="stylesheet">

        <!--[if lt IE 7 ]>
        <link id="ie-style" href="<?= assets_url() ?>template/backend/css/style-ie.css" rel="stylesheet">
        <![endif]-->
        <!--[if IE 8 ]>
        <link id="ie-style" href="<?= assets_url() ?>template/backend/css/style-ie.css" rel="stylesheet">
        <![endif]-->
        <!--[if IE 9 ]>
        <![endif]-->

        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?= assets_url() ?>template/backend/img/favicon.ico">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background: url(<?= assets_url() ?>template/backend/img/bg-login.jpg) !important; }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="login-box">
                        <div class="icons">
                        </div>
                        <h2>Login to your account</h2>
                        <?php echo form_open('login/auth') ?>
                            <fieldset>
                                <div class="input-prepend" title="Username">
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input class="input-large span10" name="username" id="username" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password">
                                    <span class="add-on"><i class="icon-lock"></i></span>
                                    <input class="input-large span10" name="password" id="password" type="password" placeholder="Password"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button-login">
                                    <button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Login</button>
                                </div>
                                <div class="clearfix"></div>
                        <?php echo form_close()?>

                    </div><!--/span-->
                </div><!--/row-->

            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->

        <!-- start: JavaScript-->

        <script src="<?= assets_url() ?>template/backend/js/jquery-1.9.1.min.js"></script>
        <script src="<?= assets_url() ?>template/backend/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.ui.touch-punch.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/bootstrap.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.cookie.js"></script>

        <script src='<?= assets_url() ?>template/backend/js/fullcalendar.min.js'></script>

        <script src='<?= assets_url() ?>template/backend/js/jquery.dataTables.min.js'></script>

        <script src="<?= assets_url() ?>template/backend/js/excanvas.js"></script>
        <script src="<?= assets_url() ?>template/backend/js/jquery.flot.min.js"></script>
        <script src="<?= assets_url() ?>template/backend/js/jquery.flot.pie.min.js"></script>
        <script src="<?= assets_url() ?>template/backend/js/jquery.flot.stack.js"></script>
        <script src="<?= assets_url() ?>template/backend/js/jquery.flot.resize.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.chosen.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.uniform.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.cleditor.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.noty.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.elfinder.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.raty.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.iphone.toggle.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.uploadify-3.1.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.gritter.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.imagesloaded.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.masonry.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.knob.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/jquery.sparkline.min.js"></script>

        <script src="<?= assets_url() ?>template/backend/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
