<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {

    // print_r($_SESSION);
?>
    <!doctype html>
    <html lang="en">

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
        <script src="template/jquery-3.6.0.min.js"></script>
        <script src="template/sweetalert2.all.min.js"></script>
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
                        <a href="admin.php" class="nav-link" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="Aboutuser.php" class="nav-link" style="color: white;">Contact</a>
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
                                <a href="admin.php" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Home
                                        <i class=""></i>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->


                            <li class="nav-item">
                                <a href="halamanproduk.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Daftar Produk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pesanan.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Pesanan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="daftar_pengiriman.php" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>Pengiriman</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="About.php" class="nav-link">
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

                <!-- Menu -->

                <div class="container">



                    <div class="row">



                        <div class="container">
                            <form action="" method="POST">
                                <div class="judul-pesanan mt-5">

                                    <h3 class="text-center font-weight-bold">DATA PESANAN PELANGGAN</h3>
                                </div>

                                <?php
                                $ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                                ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <input type="text" name="id" value="<?php echo $pecah['id_pemesanan']; ?>">
                                    <input type="text" name="tgl_pesan" value="<?php echo $pecah['tanggal_pemesanan']; ?>">
                                    <input type="text" name="total" value="<?php echo number_format($pecah['total_belanja']); ?>">
                                    <input type="text" name="user" value="<?php echo  $pecah['user'] ?>">
                                <?php } ?>

                                <div class="judul-pesanan mt-5">

                                    <h3 class="text-center font-weight-bold">DETAIL PESANAN</h3>

                                </div>
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                                ?>
                                <?php while ($pecah     = $ambil->fetch_assoc()) { ?>
                                    <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>
                                    <input type="text" name="id_d" value="<?php echo $pecah['id_pemesanan']; ?>">
                                    <input type="text" name="id_packing" value="<?php echo $pecah['id_pemesanan_produk']; ?>">
                                    <input type="text" name="id_menu" value="<?php echo $pecah['nama_menu']; ?>">
                                    <input type="text" value="<?php echo number_format($pecah['harga']); ?>">
                                    <input type="text" name="jumlah" value="<?php echo $pecah['jumlah']; ?>">
                                    <input type="text" value="<?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>" name="" id="">

                                <?php } ?>
                                <br>
                                <br>
                                <button class="btn btn-primary" type="submit" name="pack">Packing</button>
                            </form>
                        </div>

                        <?php
                        $id = $_POST['id'];
                        $tgl_pesan = $_POST['tgl_pesan'];
                        $total = $_POST['total'];
                        $user = $_POST['user'];

                        $id_d = $_POST['id_d'];
                        $id_packing = $_POST['id_packing'];
                        $id_menu = $_POST['id_menu'];
                        $jumlah = $_POST['jumlah'];


                        if (isset($_POST['pack'])) {
                            $insert = mysqli_query($koneksi, "INSERT INTO packing (id, tgl_pesan, total, user) VALUES ('$id', '$tgl_pesan', '$total', '$user')");
                            $insert = mysqli_query($koneksi, "INSERT INTO packing_detail (id, id_packing, id_menu, jumlah) VALUES ('$id_d', '$id_packing', '$id_menu', '$jumlah')");
                            $insert = mysqli_query($koneksi, "INSERT INTO pengiriman (id, tgl_pesan, total, user) VALUES ('$id', '$tgl_pesan', '$total', '$user')");
                            $insert = mysqli_query($koneksi, "INSERT INTO pengiriman_detail (id, id_pengiriman, id_menu, jumlah) VALUES ('$id_d', '$id_packing', '$id_menu', '$jumlah')");
                            $delete = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                            // echo "<script>location= 'pesanan.php'</script>";
                            // echo "<script>
                            // Swal.fire('Data Disimpan!', 'Data Behasil disimpan!', 'success', '200000')
                            // </script>";
                            // echo "<script>location='halamanproduk.php'</script>";
                            //     echo "<script>
                            echo "<script>
                            Swal.fire('Data Dipacking!', 'Data Behasil dipacking!', 'success', '200000')
                            </script>";
                            // echo "<script>location='halamanproduk.php'</script>";
                            echo "<script>var timer = setTimeout(function()
                        { window.location= 'pesanan.php'}, 1000);
                        </script>";
                        }



                        ?>
                    </div>
                </div>
                <!-- Akhir Menu -->



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
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

    </body>

    </html>
<?php } ?>