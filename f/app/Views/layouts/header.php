<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS Codeigniter</title>
    <!-- AdminLte 3 -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>\css\fontawesome-free\css\all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
				<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Inicio</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>" class="brand-link">
                <img src="<?php echo base_url(); ?>/img/cms.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CMS Codeigniter</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>/img/perfil.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bezier-curve"></i>
                                <p>
                                    Categorias
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/categoria/crear" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/categoria" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver todas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Paginas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/pagina/crear" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/pagina" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver todas</p>
                                    </a>
                                </li>
                            </ul>
						</li>
						<li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Entrada
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/entrada/crear" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/entrada" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver todas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content"> 
