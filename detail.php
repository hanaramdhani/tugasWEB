<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="template/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="template/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="template/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #2979ff;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" style="color: white;"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="user.php" class="nav-link" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="About.php" class="nav-link" style="color: white;">Contact</a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->


                <!-- Right navbar links -->

            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1c313a;">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <a href="user.php" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Home
                                        <i class=""></i>
                                    </p>
                                </a>
                        </ul>
                    </nav>




                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                            <li class="nav-item has-treeview menu-open">
                                <a href="user.php" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Daftar Produk
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="alatmakan.php" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Alat Makan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cangkir.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Cangkir Keramik</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="elektronik.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Elektronik</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gelaskaca.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Gelas Kaca</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="mangkukkaca.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Mangkuk Kaca</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="periuk.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Periuk</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="rantang.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rantang</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="toplesplastik.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Toples Plastik</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="pesanan_pembeli.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Pesanan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pembayaran.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Pembayaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pengiriman.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Pengiriman</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Aboutuser.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>About</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Logout

                                    </p>
                                </a>
                            </li>




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
                                <h1 class="m-0 text-black text-center">HALAMAN UTAMA</h1>

                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->

                <div class="col-10">
                    <!-- Jumbotron -->
                    <!-- <div class="jumbotron jumbotron-fluid text-center" style="background-color: #CCF5FC; ">
                    <div class="container">
                        <h1 class="display-8"><span class="font-weight-bold">RESTORAN KELONGTONG BARU</span></h1>
                        <hr>
                        <p class="lead font-weight-bold">"Selamat Datang di Beranda Admin"</p>
                    </div>
                </div> -->
                    <!-- Akhir Jumbotron -->
                    <!-- Menu -->

                    <div class="container">

                        <div class="judul-pesanan mt-5">

                            <h3 class="text-center font-weight-bold">DETAIL BARANG</h3>

                        </div>
                        <table class="table table-bordered" id="example">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">Nama Pesanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Subharga</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php $totalbelanja = 0; ?>
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu  
WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                                ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>
                                    <tr>
                                        <th scope="row"><?php echo $nomor; ?></th>
                                        <td><?php echo $pecah['id_pemesanan_produk']; ?></td>
                                        <td><?php echo $pecah['nama_menu']; ?></td>
                                        <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                        <td><?php echo $pecah['jumlah']; ?></td>
                                        <td>
                                            Rp. <?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>
                                        </td>
                                        <td><?php echo $pecah['gambar']; ?></td>
                                    </tr>
                                    <?php $nomor++; ?>
                                    <?php $totalbelanja += $subharga1; ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total Bayar</th>
                                    <th>Rp. <?php echo number_format($totalbelanja) ?></th>
                                </tr>
                            </tfoot>
                        </table><br>


                    </div>
                    <!-- Akhir Menu -->

                </div>

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>TOKO KITA E-COMMERCE<a href="http://adminlte.io"></a></strong>

                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b>1.0
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="template/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="template/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="template/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="template/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="template/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="template/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="template/plugins/moment/moment.min.js"></script>
        <script src="template/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="template/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="template/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="template/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="template/dist/js/demo.js"></script>
    </body>

    </html>

<?php } ?>