<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
    print_r($_SESSION);
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        <title>Restoran Dessert Kelongtong</title>
    </head>

    <body>
        <header class="bg-danger" style=" height: 70px;">
            <div class="atas">
                <H3 style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: #ffff; padding-left: 0px; padding-top: 10px;">
                    <img src="images/d.png" style=" width: 3%; margin-bottom: 13px; " class="rounded " alt="...">Dessert
                    Kelongtong
                </H3>
            </div>
        </header>
        <div class="container-fluid" style="margin-top: 0px;">
            <div class="row"></div>
            <div class="row">
                <div class="col-2 px-0" height="700px ">
                    <div style="height: 1500px;" class="bg-danger">
                        <div class="list-group " style="padding-top: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
                            <a href="user.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Home</a>
                            <a href="menu_pembeli.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px; padding:15px">Daftar Menu</a>
                            <a href="pesanan_pembeli.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Pesanan Anda</a>
                            <a href="About.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">About</a>
                            <a href="bayar.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Bayar</a>
                            <a href="pengiriman.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Pengiriman</a>
                            <a href="logout.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="col-10" style="background-color: #CCF5FC">
                    <?php
                    $test = $_SESSION['login_user'];

                    include('koneksi.php');

                    $test = $koneksi->query("SELECT *FROM pemesanan WHERE user='$_SESSION[login_user]'");
                    ?>

                    <?php while ($result = $test->fetch_assoc()) { ?>
                        <div class="card">
                            <div class="col-sm">
                                <table class="table table-striped" id="belum-bayar">
                                    <thead>
                                        <tr>
                                            <th>id Pemesanan</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Total belanja</th>
                                            <th>Status</th>
                                            <th>User</th>
                                            <th>Bukti Pembayaran</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $result['id_pemesanan']; ?></td>
                                            <td><?php echo $result['tanggal_pemesanan']; ?></td>
                                            <td><?php echo $result['total_belanja']; ?></td>
                                            <td><button class="btn btn-xs <?= $result['statuss'] == 1 ? 'btn-success' : 'btn-danger' ?> "><i class="fa <?= $result['statuss'] == 1 ? 'fa-check-circle' : 'fa-ban' ?>"></i></button>
                                            </td>
                                            <td><?php echo $result['user']; ?></td>
                                            <td><?php echo $result['bukti_pembayaran'] ?></td>
                                            <td><a href="transaksi_pembayaran.php?id=<?php echo $result['id_pemesanan'] ?>" class="btn btn-secondary btn-sm">Upload Bukti Transfer</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Akhir Menu -->
        </div>

        </div>
        </div>
        </div>

        <footer class="main-footer">
            <strong>TOKO KITA E-COMMERCE<a href="http://adminlte.io"></a></strong>

            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b>1.0
            </div>
        </footer>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#belum-bayar').DataTable();
            });
        </script>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </body>

    </html>

<?php
}
?>