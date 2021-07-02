<?php
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        </link> -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <!-- <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
        </link> -->
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
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0 text-black text-center">HALAMAN INPUT DATA PRODUK</h1>

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
                    <div class="card">
                        <div class="card-body">
                            <a href="tambah_menu.php" class="btn btn-primary"><i class="fas fa-plus-circle"></i>TAMBAH DATA PRODUK</a>
                        </div>
                    </div>

                    <div class="container">
                        <?php

                        include('koneksi.php');

                        $query = mysqli_query($koneksi, 'SELECT * FROM produk');
                        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);


                        ?>


                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <table class="table table-bordered" id="example">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jenis Produk</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $nomor = 1; ?>
                                        <?php
                                        $ambil = mysqli_query($koneksi, 'SELECT * FROM produk');
                                        $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                        ?>
                                        <?php foreach ($result as $result) : ?>

                                            <tr>
                                                <th scope="row" class="text-center"><?php echo $nomor; ?></th>

                                                <td><?php echo $result["nama_menu"]; ?></td>
                                                <td class="text-center"><?php echo $result["jenis_menu"]; ?></td>
                                                <td class="text-center"><?php echo $result["stok"]; ?></td>
                                                <td class="text-center"><?php echo $result["harga"]; ?></td>
                                                <td class="text-center"><?php echo "<img src='upload/$result[gambar]' width='70' height='90' />"; ?></td>

                                                <td class="text-center">

                                                    <a href="edit_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-primary mt-3"><i class="fa fa-edit"></i></a>

                                                    <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-danger mt-3 btn-delete"><i class="fa fa-trash"></i></a>
                                                    <!-- <a href="hapus_menu.php" class="btn btn-danger mt-3 btn-delete"><i class="fa fa-trash"></i></a> -->
                                                </td>

                                            </tr>
                                            <?php $nomor++; ?>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>


                            </div>
                        </div>

                    </div>
                    <!-- Akhir Menu -->
                </div>


                <!-- /.content -->
            </div>
        </div>
        <!-- Akhir Menu -->

        <script>
            // $('.btn-delete').on('click', function() {
            $('.btn-delete').on('click', function(event) {
                event.preventDefault();
                const url = $(this).attr('href');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data ini?',
                    text: "Data ini tidak akan terlihat lagi",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire("Terhapus!", "Data Berhasil Dihapus.", "success");
                        setTimeout(function() {
                            window.location.href = url;
                        }, 2000);
                        // window.location.href = url;
                    } else {
                        Swal.fire("Cancelled", "Data Tidak Jadi Dihapus :)", "error");
                    }
                })
            });
        </script>
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


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

    </body>

    </html>
<?php } ?>