<?php
include('koneksi.php');

$id_menu = $_GET['id_menu'];

$ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
$result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

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
  <title>Form Edit Menu</title>
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
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0 text-black text-center">HALAMAN EDIT DATA PRODUK</h1>

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

        <div class="card p-5 mb-5">
          <form method="POST" action="edit.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="menu1">Nama Menu</label>
              <input type="hidden" name="id_menu" value="<?php echo $result[0]['id_menu'] ?>">
              <input type="text" class="form-control" id="menu1" name="nama_menu" value="<?php echo $result[0]['nama_menu'] ?>">
            </div>
            <div class="form-group">
              <label for="#">Jenis Menu</label>
              <select class="form-control" name="jenis_menu">
                <option selected="0" class="" value="none"><?php echo $result[0]['jenis_menu'] ?></option>
                <option class="" value="Alat Makan">Alat Makan</option>
                <option class="" value="Cangkir Keramik">Cangkir Keramik</option>
                <option class="" value="Elektronik">Elektronik</option>
                <option class="" value="Gelas Kaca">Gelas Kaca</option>
                <option class="" value="Mangkuk Kaca">Mangkuk Kaca</option>
                <option class="" value="Periuk">Periuk</option>
                <option class="" value="Rantang">Rantang</option>
                <option class="" value="Toples Plastik">Toples Plastik</option>

              </select>
            </div>
            <div class="form-group">
              <label for="stok1">Stok</label>
              <input type="text" class="form-control" id="stok1" name="stok" value="<?php echo $result[0]['stok'] ?>">
            </div>
            <div class="form-group">
              <label for="harga1">Harga Menu</label>
              <input type="text" class="form-control" id="harga1" name="harga" value="<?php echo $result[0]['harga'] ?>">
            </div>
            <div class="form-group">
              <label for="gambar">Foto Menu</label>
              <input type="file" class="form-control-file border" id="gambar" name="gambar">
            </div><br>
            <button type="submit" class="btn btn-primary btn-edit" name="tambah">Edit</button>
            <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
          </form>

        </div>
      </div>
      <!-- Akhir Menu -->

      <script type='text/javascript'>
        $('.btn-edit').on('click', function(event) {
          //  event.preventDefault();
          Swal.fire('Saved!', '', 'success')


        })
      </script>

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