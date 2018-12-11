<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Atma Hotel</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(asset('template/admin/plugins/bootstrap/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('template/admin/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('template/admin/plugins/pace/pace-theme-big-counter.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('template/admin/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('template/admin/css/main-style.css')); ?>" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo e(asset('template/admin/plugins/morris/morris-0.4.3.min.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/sweetalert/dist/sweetalert.css')); ?>">

    <?php echo $__env->yieldContent('custom_css'); ?>

   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-user fa-fw"></i>Selamat Datang, <?php echo e(Session::get('username')); ?> | </a></li>
                <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i>Profil</a></li>
                    <li><a href="<?php echo e(route('customer.kamar')); ?>"><i class="fa fa-home fa-fw"></i>Data Kamar</a></li>
                    <li><a href="<?php echo e(route('customer.datareservasi')); ?>"><i class="fa fa-home fa-fw"></i>Data Reservasi</a></li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">
                    	<!------------------------------------------------------ TITLE -------------------------------->
                		<?php echo $__env->yieldContent('title'); ?> 
                    </h1>
                </div>
                <!--End Page Header -->
                <div>
                	<!------------------------------------------------------ CONTENT -------------------------------->
                	<?php echo $__env->yieldContent('content'); ?> 
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo e(asset('template/admin/plugins/jquery-1.10.2.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/plugins/pace/pace.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/scripts/siminta.js')); ?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo e(asset('template/admin/plugins/morris/raphael-2.1.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/plugins/morris/morris.js')); ?>"></script>
    <script src="<?php echo e(asset('template/admin/scripts/dashboard-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('template/sweetalert/sweetalert.js')); ?>"></script>
    <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('custom_script'); ?>
</body>

</html>
