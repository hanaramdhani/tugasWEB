<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="template/templatelogin/fonts/icomoon/style.css">

  <link rel="stylesheet" href="template/templatelogin/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="template/templatelogin/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="template/templatelogin/css/style.css">

  <title>Login #4</title>
</head>

<body>


  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('template/templatelogin/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="container">
          <h3 class="text-center mt-3 mb-5">HALAMAN REGISTRASI</h3>
          <div class="card card-primary card-outline">
            <div class="card-body">
              <form method="POST" action="simpan_register.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" id="user" name="username" placeholder="Masukan Username">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="password" placeholder="Masukan Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki">
                    <label class="form-check-label" for="jk">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan">
                    <label class="form-check-label" for="jk">Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl" name="tanggal_lahir">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="rumah">Alamat</label>
                    <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Alamat">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="telp">No. Telephone</label>
                    <input type="text" class="form-control" id="telp" name="hp" placeholder="No. Telephone">
                  </div>

                  <div class="form-group">
                    <label for="sts">Status</label>
                    <input type="text" class="form-control" id="sts" name="status" disabled value="Pelanggan">
                  </div>
                </div>
                <button type="register" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>



  <script src="template/templateloginjs/jquery-3.3.1.min.js"></script>
  <script src="template/templateloginjs/popper.min.js"></script>
  <script src="template/templateloginjs/bootstrap.min.js"></script>
  <script src="template/templateloginjs/main.js"></script>
</body>

</html>