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

    <!-- jQuery -->
    <script src="template/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="template/plugins/jquery-ui/jquery-ui.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

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
                <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <h1 class="m-0 text-black text-center">RESTORAN DESSERT KELONGTONG</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu -->

            <div class="container">



                <div class="card card-danger card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-dark px-3 active" id="manifest-tab" data-toggle="pill"
                                    href="#manifest-tab-content" role="tab" aria-controls="manifest-tab-content"
                                    aria-selected="true">
                                    <i class="fas fa-tasks mr-2"></i> Dalam Perjalanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" id="history-manifest-tab" data-toggle="pill"
                                    href="#history-manifest-tab-content" role="tab"
                                    aria-controls="history-manifest-tab-content" aria-selected="false"><i
                                        class="fas fa-history mr-2"></i>Barang Telah Sampai</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <br>
                        <div class="tab-content" id="">
                            <div class="tab-pane fade active show" id="manifest-tab-content" role="tabpanel"
                                aria-labelledby="manifest-tab">

                                <table class="table table-bordered" id="pengiriman">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Pemesanan</th>
                                            <th scope="col">Tanggal Pesan</th>
                                            <th scope="col">Total Bayar</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Status Pengiriman</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1; ?>
                                        <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM pengiriman WHERE user='$_SESSION[login_user]'");
                                            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                            ?>
                                        <?php foreach ($result as $result) : ?>
                                        <tr class="text-center">
                                            <th scope="row"><?php echo $nomor; ?></th>
                                            <td><?php echo $result["id"]; ?></td>
                                            <td><?php echo $result["tgl_pesan"]; ?></td>
                                            <td>Rp. <?php echo number_format($result["total"]); ?></td>
                                            <td><?php echo $result["user"]; ?></td>
                                            <td><?php echo $result['status'] == 1 ? 'Barang Telah Sampai' : 'Barang Sedang Dikirim' ?>
                                            </td>

                                            <td><button class="btn btn-sm btn-warning" disabled><i
                                                        class="fa fa-truck"></i></button></td>
                                            <td style='text-align:center'><button class='btn btn-primary btn-sm panggil'
                                                    data-id="<?= $result['id'] ?>">Detail</button></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal fade w-90" id="show" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="detail-id">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                            $('.panggil').click(function() {
                                // var getDetail = $(e.relatedTarget).data('id');
                                var getDetail = $(this).data('id');
                                /* fungsi AJAX untuk melakukan fetch data */
                                $.ajax({
                                    type: 'post',
                                    url: 'detail.php?id=' + getDetail,
                                    data: 'getDetail=' + getDetail,
                                    success: function(data) {
                                        $('#detail-id').html(data);
                                        $('#show').modal('show');
                                    }
                                });
                            })
                            </script>
                            <br>

                            <div class="tab-pane fade active" id="history-manifest-tab-content" role="tabpanel"
                                aria-labelledby="manifest-tab">
                                <table class="table table-striped" id="history">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Tanggal Pesan</th>
                                            <th scope="col">Total Bayar</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $ambil = mysqli_query($koneksi, "SELECT * FROM histori_pengiriman WHERE user='$_SESSION[login_user]'");
                                            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                            ?>
                                        <?php foreach ($result as $result) : ?>
                                        <tr class="text-center">
                                            <td><?php echo $result["id"]; ?></td>
                                            <td><?php echo $result["tgl_pesan"]; ?></td>
                                            <td>Rp. <?php echo number_format($result["total"]); ?></td>
                                            <td><?php echo $result["user"]; ?></td>
                                            <td><?php echo $result["statuss"]; ?></td>
                                            <td><button disabled class="btn btn-success btn-sm"><i
                                                        class="fas fa-check-circle"></i></button></td>
                                            <td style='text-align:center'><button class='btn btn-primary btn-sm panggil'
                                                    data-id="<?= $result['id'] ?>">Detail</button></td>


                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                                <div class="modal fade w-90" id="show" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="detail-id">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                $('.panggil').click(function() {
                                    // var getDetail = $(e.relatedTarget).data('id');
                                    var getDetail = $(this).data('id');
                                    /* fungsi AJAX untuk melakukan fetch data */
                                    $.ajax({
                                        type: 'post',
                                        url: 'detail.php?id=' + getDetail,
                                        data: 'getDetail=' + getDetail,
                                        success: function(data) {
                                            $('#detail-id').html(data);
                                            $('#show').modal('show');
                                        }
                                    });

                                })
                                </script>
                            </div>
                        </div>
                    </div>
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
        $('#pengiriman').DataTable();
    });
    </script>

</body>

</html>

<?php
}
?>