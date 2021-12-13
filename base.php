<?php

/*if(isset($_SESSION['COBRAR'])){
    $pagina = $_SESSION['COBRAR'];
    
 }else{
    $pagina = 'inicio';
 }*/

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cobros</title>

    <!-- Bootstrap-->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="production/librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="production/librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="production/librerias/select2/css/select2.css">
    <link rel="stylesheet" href="production/librerias/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Custom Theme Style -->     
    <link rel="stylesheet" href="build/css/custom.min.css">
    <link rel="stylesheet" href="production/css/estilos.css">
    <link rel="stylesheet" href="production/librerias/normalize.css">

</head>
<body class="nav-md" style="background: #016EDA;">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col" stlye="background: #016EDA;">
                <div class="left_col scroll-view" Style="background: #016EDA !important;">
                    <div class="navbar nav_title" style="border: 0; background: #016EDA;" id="nav">
                        <a href="index.php" class="site_title"><img  src="production/images/Recurso 4.png" alt="" id="logo"> <span Style="margin-left: 8px; font-weight: bold; color: #FFFFFF !important;">Créditos</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="production/images/user.png" alt="..." class="img-circle profile_img">
                           
                        </div>
                        <div class="profile_info">  
                            <span></span>
                            <h2><h2>Erika Lizeth Viana Pérez</h2></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br/>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>ADMIN</h3>
                            <ul class="nav side-menu">
                            <li><a><i class="fa fa-users"></i> Actores <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                <li><a href="index.html">Actores Web</a></li>
                                <li><a href="index2.html">Actores</a></li>
                                <li><a href="index3.html">Empresas</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-calculator"></i>Contabilidad <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                <li><a href="form.html">Cajas</a></li>
                                <li><a href="form_advanced.html">Entradas Cajas</a></li>
                                <li><a href="form_validation.html">Gastos</a></li>
                                <li><a href="form_wizards.html">Entrada Gastos</a></li>
                                <li><a href="form_upload.html">Asociados</a></li>
                                <li><a href="form_buttons.html">Facturas</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Creditos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                <li><a href="general_elements.html">Calculadora</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> En Mora <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                <li><a href="tables.html">Cobrar</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                      
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true" style="color: #172D44;"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true" style="color: #172D44;"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true" style="color: #172D44;"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: #172D44;"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="production/images/user.png" alt="">Erika
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Profile</a>
                            <a class="dropdown-item"  href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                            </a>
                        <a class="dropdown-item"  href="javascript:;">Help</a>
                        <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </div>
                    </li>
    
                    </ul>
                </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->       
            <div class="right_col" role="main" id="pagina"></div>
            

           
            <!-- page content -->  

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>

        </div>   
    </div>

    

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="production/js/funciones.js"></script>
    <script>$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {    options.async = true; });</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="production/librerias/alertifyjs/alertify.js"></script>
    <script src="production/librerias/select2/js/select2.js"></script>
    <script src="production/librerias/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.js"></script>

</body>
</html>


