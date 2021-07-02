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
                <a class="nav-link" data-widget="pushmenu" href="#" style="color: white;"><i
                        class="fas fa-bars"></i></a>
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
            <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
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
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
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
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
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

                            <?php
                                $ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                                ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-4 col-form-label">ID Pemesanan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control data" id="val-kd-asal" readonly
                                        name="val_kd_asal" value="<?php echo $pecah['id_pemesanan']; ?>"
                                        placeholder="Divisi Asal" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-4 col-form-label">Customer</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control data" id="val-kd-asal" readonly
                                        name="val_kd_tujuan" value="<?php echo $pecah['user']; ?>"
                                        placeholder="No. Refferensi" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-4 col-form-label">Tanggal
                                    Pemesanan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control data" id="val-kd-asal" readonly
                                        name="val_kd_tujuan" placeholder="No. Refferensi"
                                        value="<?php echo $pecah['tanggal_pemesanan']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control data" id="val-kd-asal" readonly
                                        name="val_kd_tujuan" placeholder="No. Refferensi"
                                        value="<?php echo $pecah['statuss']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subject" class="col-sm-4 col-form-label">Total Bayar</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control data" id="val-kd-asal" readonly
                                        name="val_kd_tujuan" placeholder="No. Refferensi"
                                        value="<?php echo $pecah['total_belanja']; ?>" required>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>


                    <div class="judul-pesanan mt-5">

                        <h3 class="text-center font-weight-bold">DETAIL BARANG</h3>

                    </div>
                    <table class="table table-striped" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Pemesanan</th>
                                <th scope="col">Nama Pesanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Subharga</th>
                                <!-- <th></th> -->
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
                                <!-- <td><?php echo $pecah['gambar']; ?></td> -->
                                <td><img src="upload/<?php echo $pecah['gambar'] ?>"
                                        style="width: 30%; height: 100px; margin-top: 0px; display: block; margin: auto;"
                                        class="card-img-top" alt="..."></td>
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



                    <?php
                        $test = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                        ?>
                    <?php while ($coba = $test->fetch_assoc()) { ?>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $coba['id_pemesanan'] ?>">
                        <input type="hidden" name="tanggal_pemesanan" value="<?php echo $coba['tanggal_pemesanan'] ?>">
                        <input type="hidden" name="total_belanja" value="<?php echo $coba['total_belanja'] ?>">
                        <input type="hidden" name="statuss" value="1">
                        <input type="hidden" name="user" value="<?php echo $coba['user'] ?>">
                        <input type="hidden" value="<?php echo $coba['bukti_pembayaran'] ?>">
                        <!-- <input type="file" name="bukti_pembayaran" value="" id="bukti"> -->

                        <div class="col-sm">
                            <div class="row col-md-6">
                                <img id="customeredit" src="" value="" style=" width: 100px; height:100px;">
                            </div>
                            <div class="row mt-2 col-md-6">
                                <input type="file" name="bukti_pembayaran" id="bukti" onchange="editcustomer()">
                            </div>
                        </div>
                        <button type="submit" name="simpan" id="up" class="btn btn-primary btn-sm"
                            disabled>Upload</button>
                    </form>
                    <?php } ?>


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
                            echo "<script>location= 'pembayaran.php'</script>";
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