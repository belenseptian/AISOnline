<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/public/favicon.ico">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo e(url('/')); ?>/public/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/public/css/jquery.dataTables.css">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">IoAIS v1.0</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <!--<span class="indicator"></span>--></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">There is no notification</div>

                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-user-circle"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> <?php echo e(Auth::user()->name); ?></h5>
                                    <span class="status"></span><span class="ml-2">Online</span>
                                </div>
                                <a class="dropdown-item" href="<?php echo e(route('actionlogout')); ?>"><i class="fas fa-power-off mr-2"></i>Log Out</a>
                                <a class="dropdown-item" href="<?php echo e(url('/')); ?>/public/admin/content/change-password"><i class="fas fa-key"></i> Change Password</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fa fa-fw fa-user-circle"></i>Home <span class="badge badge-success">6</span></a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-camera"></i>CCTV</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">

                                            <a class="nav-link" href="<?php echo e(route('home')); ?>/live-cctv">Live Video<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">

                                            <a class="nav-link" href="#">Configuration<span class="badge badge-secondary">New</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-cog"></i>Setting</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Account<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">

                                            <a class="nav-link" href="#">Device<span class="badge badge-secondary">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <?php echo $__env->yieldContent('header-text'); ?>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="breadcrumb-link">Home</a></li>
                                            <?php echo $__env->yieldContent('breadcrumb'); ?>
                                            <!--
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
											-->

                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2024
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo e(url('/')); ?>/public/js/Chart.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/public/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?php echo e(url('/')); ?>/public/assets/libs/js/dashboard-ecommerce.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo e(url('/')); ?>/public/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $(document).ready(function() {
            var table4 = $('#table4').DataTable();
        });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\aisparser\resources\views/backend/master.blade.php ENDPATH**/ ?>