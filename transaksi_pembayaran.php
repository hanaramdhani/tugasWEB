<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
    // print_r($_SESSION['login_user']);
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed" <div class="wrapper">

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
                            <h1 class="m-0 text-black text-center">HALAMAN TRANSAKSI PEMBAYARAN</h1>

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->


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



                <div class="container-fluid" style="margin-top: 0px;">






                    <div class="container">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Total Bayar</th>
                                            <th>Nama Customer</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $test = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                                        $rs = mysqli_fetch_all($test, MYSQLI_ASSOC);
                                        ?>
                                        <?php foreach ($rs as $value) : ?>
                                            <tr>
                                                <td><?php echo $value['id_pemesanan'] ?></td>
                                                <td><?php echo $value['tanggal_pemesanan'] ?></td>
                                                <td><?php echo $value['total_belanja'] ?></td>
                                                <td><?php echo $value['user'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <?php
                        $test = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                        ?>
                        <?php while ($coba = $test->fetch_assoc()) { ?>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <input type="text" value="<?php echo $coba['id_pemesanan'] ?>">
                                <input type="text" name="tanggal_pemesanan" value="<?php echo $coba['tanggal_pemesanan'] ?>">
                                <input type="text" name="total_belanja" value="<?php echo $coba['total_belanja'] ?>">
                                <input type="text" name="statuss" value="1">
                                <input type="text" name="user" value="<?php echo $coba['user'] ?>">
                                <input type="text" value="<?php echo $coba['bukti_pembayaran'] ?>">
                                <!-- <input type="file" name="bukti_pembayaran" value="" id="bukti"> -->

                                <div class="col-sm">
                                    <div class="row col-md-6">
                                        <img id="customeredit" src="" value="" style=" width: 100px; height:100px;">
                                    </div>
                                    <div class="row mt-2 col-md-6">
                                        <input type="file" name="bukti_pembayaran" id="bukti" onchange="editcustomer()">
                                    </div>
                                </div>


                                <button type="submit" name="simpan" id="up" class="btn btn-primary btn-sm" disabled>Upload</button>
                            </form>
                        <?php } ?>

                        <?php
                        $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>

                            <input type="text" name="id_d" value="<?php echo $pecah['id_pemesanan']; ?>">
                            <input type="text" name="id_packing" value="<?php echo $pecah['id_pemesanan_produk']; ?>">
                            <input type="text" name="id_menu" value="<?php echo $pecah['nama_menu']; ?>">
                            <input type="text" value="<?php echo number_format($pecah['harga']); ?>">
                            <input type="text" name="jumlah" value="<?php echo $pecah['jumlah']; ?>">
                            <input type="text" value="<?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>" name="" id="">

                            <script type="text/javascript">
                                let button = document.getElementById('up');
                                let input = document.getElementById('bukti');
                                input.addEventListener('input', function(e) {
                                    if (input.value.length == 0) {
                                        button.disabled = true;
                                    } else {
                                        button.disabled = false;
                                    }
                                })

                                function editcustomer() {
                                    let frame = document.getElementById('customeredit');
                                    frame.src = URL.createObjectURL(event.target.files[0]);
                                }
                            </script>

                        <?php } ?>

                        <?php
                        if (isset($_POST['simpan'])) {

                            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
                            $total_belanja = $_POST['total_belanja'];
                            $statuss = $_POST['statuss'];
                            $user = $_POST['user'];
                            $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
                            $source = $_FILES['bukti_pembayaran']['tmp_name'];
                            $folder = './upload/';

                            move_uploaded_file($source, $folder . $bukti_pembayaran);
                            $update = mysqli_query($koneksi, "UPDATE pemesanan SET tanggal_pemesanan='$tanggal_pemesanan', total_belanja='$total_belanja', 
                    statuss='$statuss', user='$user', bukti_pembayaran='$bukti_pembayaran' WHERE id_pemesanan='$_GET[id]'");
                            echo "<script>location= 'bayar.php'</script>";
                        }
                        ?>


                    </div>

                    <!-- Akhir Menu -->


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