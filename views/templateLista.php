<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Economiza+</title>

    <!-- Bootstrap -->
    <link href="<?= URL?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= URL?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= URL?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= URL?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= URL?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= URL?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?= URL?>assets/css/sweetalert.css" rel="stylesheet">

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- page content -->



        <?= $this->loadViewInTemplate($viewName, $viewData);?>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?= URL?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= URL?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= URL?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= URL?>vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="<?= URL?>vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?= URL?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= URL?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= URL?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= URL?>vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= URL?>vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= URL?>vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= URL?>assets/js/custom.min.js"></script>
<script src="<?= URL?>assets/js/script.js"></script>
<script src="<?= URL?>assets/js/sweetalert.min.js"></script>
<script src="<?= URL?>assets/js/sweetalert-dev.js"></script>



</body>
</html>