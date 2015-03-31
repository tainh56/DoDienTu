<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <title>Admin</title>
        <?php include 'includes/Head.php'; ?>
    </head>
    
    <body class="skin-purple">
        <div class="wrapper">
            <?php include '../includes/Header.php'; ?>
            <?php include 'Admin_ChucNang.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Page Header
                        <small>Optional description</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> login</a></li>
                        <li class="active">Admin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Your Page Content Here -->

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php include '../includes/Footer.php'; ?>

        </div><!-- ./wrapper -->

        <?php include 'includes/Script.php'; ?>
    </body>
</html>