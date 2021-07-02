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
    <script src="template/jquery-3.6.0.min.js"></script>
    <script src="template/sweetalert2.all.min.js"></script>
    <title>Login #4</title>
</head>

<body>


    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('template/templatelogin/images/bg_1.jpg');"></div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center">
                                <img src="images/logo.jpg" alt="" style="width: 170px; height: auto;">
                            </div>
                            <div class="text-center">
                                <h1 class="form-group first" style="color: #01579b; font-weight: bold;">
                                    TOKO KITA
                                </h1>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            <form method="POST" action="">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Isikan Username Anda" id="username" name="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Isikan Password Anda" id="password" name="password">
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <small><a href="register.php">Belum Punya Akun ? Buat Akun Anda !</a></small>
                                </div>

                                <input type="submit" name="submit" value="Log In" class="btn btn-block " style="background-color: #01579b; color: white;">


                            </form>
                            <!-- Eksekusi Form Login -->
                            <?php
                            if (isset($_POST['submit'])) {
                                $user = $_POST['username'];
                                $password = $_POST['password'];

                                // Query untuk memilih tabel
                                $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
                                $hasil = mysqli_fetch_array($cek_data);
                                $status = $hasil['status'];
                                $login_user = $hasil['username'];
                                $row = mysqli_num_rows($cek_data);

                                // Pengecekan Kondisi Login Berhasil/Tidak
                                if ($row > 0) {
                                    session_start();
                                    $_SESSION['login_user'] = $login_user;

                                    if ($status == 'admin') {
                                        // echo "<script> alert ('Login Berhasil!');document.location.href='admin.php'</script>";
                                        echo "<script>
                                        Swal.fire('Berhasil Login!', 'Selamat Datang Admin', 'success', '200000')
                                        </script>";
                                        echo "<script>var timer = setTimeout(function()
                                        { window.location= 'admin.php'}, 1000);
                                        </script>";
                                    } elseif ($status == 'pelanggan') {
                                        // echo "<script> alert ('Login Berhasil!');document.location.href='user.php'</script>";
                                        echo "<script>
                                        Swal.fire('Berhasil Login!', 'Selamat Datang Pelanggan', 'success')
                                        </script>";
                                        echo "<script>var timer = setTimeout(function()
                                        { window.location= 'user.php'}, 3000);
                                        </script>";
                                        // echo "<script> Swal.fire('Good job!', 'Login!', 'success'); window.location.href='user.php'</script>";
                                    }
                                } else {
                                    echo "<script>
                                  
                                    Swal.fire('Login Gagal!', 'Username dan Password Salah', 'error')
                                    </script>";
                                    echo "<script>var timer = setTimeout(function()
                                    { window.location= 'index.php'}, 3000);
                                    </script>";
                                    // echo "<script> alert ('Login Gagal, Username atau Password salah!');document.location.href='index1.php'</script>";
                                }
                            }
                            ?>
                        </div>
                        <!-- Akhir Eksekusi Form Login -->
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