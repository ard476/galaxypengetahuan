<!DOCTYPE html>
<html>
    <head>
        <title>Aplikasi Keuangan</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/') ?>plugins/fontawesome-free/css/all.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href=" <?php echo base_url('assets/vendor/adminlte/') ?>dist/css/adminlte.min.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2/css/select2.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <a href="<?php echo site_url('auth/logout') ?>" class="dropdown-item"> <i class="fas fa-sign-out-alt mr-2"></i> Logout </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="<?php echo site_url('') ?>" class="brand-link text-center">
                    <span class="brand-text font-weight-light"><?php echo $this->session->userdata('toko')->nama ?></span>
                </a>
                <?php $uri = $this->uri->segment(1) ?>
                <?php $role = $this->session->userdata('role'); ?>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="<?php echo site_url('dashboard') ?>" class="nav-link <?php echo $uri == 'dashboard' || $uri == '' ? 'active' : 'no' ?>">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('supplier') ?>" class="nav-link <?php echo $uri == 'supplier' ? 'active' : 'no' ?>">
                                    <i class="nav-icon fas fa-truck"></i>
                                    <p>
                                        Supplier
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('pelanggan') ?>" class="nav-link <?php echo $uri == 'pelanggan' ? 'active' : 'no' ?>">
                                    <i class="nav-icon fas fa-address-book"></i>
                                    <p>
                                        Pelanggan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview <?php echo $uri == 'produk' || $uri == 'kategori_produk' || $uri == 'satuan_produk' ? 'menu-open' : 'no' ?>">
                                <a href="#" class="nav-link <?php echo $uri == 'produk' || $uri == 'kategori_produk' || $uri == 'satuan_produk' ? 'active' : 'no' ?>">
                                    <i class="nav-icon fas fa-box"></i>
                                    <p>
                                        Produk
                                    </p>
                                    <i class="right fas fa-angle-right"></i>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('kategori_produk') ?>" class="nav-link <?php echo $uri == 'kategori_produk' ? 'active' : 'no' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Kategori Produk
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('produk') ?>" class="nav-link <?php echo $uri == 'produk' ? 'active' : 'no' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Produk
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li class="nav-item has-treeview <?php echo $uri == 'menu_depan' || $uri == 'laporan_stok_masuk' || $uri == 'laporan_stok_keluar' ? 'menu-open' : 'no' ?>">
                                <a href="<?php echo site_url('laporan') ?>" class="nav-link <?php echo $uri == 'menu_depan' || $uri == 'laporan_stok_masuk' || $uri == 'laporan_stok_keluar' ? 'active' : 'no' ?>">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>Pengaturan</p>
                                    <i class="right fas fa-angle-right"></i>
                                </a>
                                <ul class="nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('menu_depan') ?>" class="nav-link <?php echo $uri == 'menu_depan' ? 'active' : 'no' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Menu Depan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('laporan_stok_masuk') ?>" class="nav-link <?php echo $uri == 'laporan_stok_masuk' ? 'active' : 'no' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan Stok Masuk</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('laporan_stok_keluar') ?>" class="nav-link <?php echo $uri == 'laporan_stok_keluar' ? 'active' : 'no' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan Stok Keluar</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if ($role === 'admin'): ?>
                            <li class="nav-item">
                                <a href="<?php echo site_url('pengaturan') ?>" class="nav-link <?php echo $uri == 'pengaturan' ? 'active' : 'no' ?>">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>Pengaturan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('pengguna') ?>" class="nav-link <?php echo $uri == 'pengguna' ? 'active' : 'no' ?>">
                                    <i class="fas fa-user nav-icon"></i>
                                    <p>Pengguna</p>
                                </a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>            
                <!-- Main content -->
                <?php $this->load->view($content); ?>

        </div>
        <!-- ./wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.0.2</div>
        </footer>

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/vendor/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url('assets/vendor/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo base_url('assets/vendor/adminlte/') ?>dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/chart.js/Chart.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/moment/moment.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/adminlte/plugins/select2/js/select2.min.js') ?>"></script>

        <?php $this->load->view($js); ?>
    </body>
</html>
