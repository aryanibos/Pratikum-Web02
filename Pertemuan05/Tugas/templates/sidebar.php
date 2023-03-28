<?php

$menus = [
    'Home' => 'index.php',
    'Produk' => 'produk.php',
    'Pelanggan' => 'pelanggan.php',
    'About' => 'about.php',
    'Logout' => 'logout.php'
];

$icons = [
    'Home' => 'nav-icon fas fa-home',
    'Produk' => 'nav-icon fas fa-cart-plus',
    'Pelanggan' => 'nav-icon fas fa-user',
    'About' => 'nav-icon fas fa-info-circle',
    'Logout' => 'nav-icon fas fa-lock'
];

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link ml-3 text-bold">
        <i class="elevation-3 fas fa-tools nav-icon text-white"></i>
        <span class="brand-text font-weight-light ">E-ARTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-bold text-white">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php foreach ($menus as $title => $link) : ?>
                    <li class="nav-item">
                        <a href="<?= $link ?>" class="nav-link">
                            <i class="<?= $icons[$title] ?>"></i>
                            <p>
                                <?= $title ?>
                            </p>
                        </a>
                    </li>
                <?php endforeach  ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-4 text-center" style="font-size: 3em; font-weight: bold;">APP
                        <span style="color: red;">AR</span>TECH
                    </h1>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="form-inline">
                        <div class="input-group ml-auto" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar btn-dark">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">