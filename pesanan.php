<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
    print_r($_SESSION['login_user']);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Restoran Dessert Kelongtong</title>
</head>

<body>

    <header class="bg-danger" style=" height: 70px;">
        <div class="atas">
            <H3
                style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: #ffff; padding-left: 0px; padding-top: 10px;">
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
                    <div class="list-group "
                        style="padding-top: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
                        <a href="admin.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Home</a>
                        <a href="daftar_menu.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px; padding:15px">Daftar Menu</a>
                        <a href="pesanan.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Pesanan</a>
                        <a href="pengiriman_admin.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Pengiriman</a>
                        <a href="About.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">About</a>
                        <a href="logout.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Logout</a>
                    </div>
                </div>
            </div>

            <div class="col-10" style="background-color: #CCF5FC">
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
                <div class="card card-danger card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link text-dark px-3 active" id="manifest-tab" data-toggle="pill"
                                    href="#manifest-tab-content" role="tab" aria-controls="manifest-tab-content"
                                    aria-selected="true">
                                    <i class="fas fa-tasks mr-2"></i> Pesanan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" id="history-manifest-tab" data-toggle="pill"
                                    href="#history-manifest-tab-content" role="tab"
                                    aria-controls="history-manifest-tab-content" aria-selected="false"><i
                                        class="fas fa-history mr-2"></i> History Pesanan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="">
                            <div class="tab-pane fade active show" id="manifest-tab-content" role="tabpanel"
                                aria-labelledby="manifest-tab">
                                <table class="table table-bordered" id="example">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Pemesanan</th>
                                            <th scope="col">Tanggal Pesan</th>
                                            <th scope="col">Total Bayar</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">User</th>
                                            <th scope="col">St</th>
                                            <th scope="col">Bukti Pembayaran</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1; ?>
                                        <?php
                                            $ambil = mysqli_query($koneksi, 'SELECT * FROM pemesanan');
                                            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                            ?>
                                        <?php foreach ($result as $result) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $nomor; ?></th>
                                            <td><?php echo $result["id_pemesanan"]; ?></td>
                                            <td><?php echo $result["tanggal_pemesanan"]; ?></td>
                                            <td>Rp. <?php echo number_format($result["total_belanja"]); ?></td>
                                            <td><?php echo $result['statuss']; ?></td>
                                            <td><?php echo $result['user']; ?></td>
                                            <td><button
                                                    class="btn btn-xs <?= $result['statuss'] == 1 ? 'btn-success' : 'btn-danger' ?> "><i
                                                        class="fa <?= $result['statuss'] == 1 ? 'fa-check-circle' : 'fa-ban' ?>"></i></button>
                                            </td>
                                            <td><?php echo $result['bukti_pembayaran']; ?></td>
                                            <td>
                                                <a href=" detail_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>"
                                                    class="badge badge-primary">Detail</a>
                                                <a href="clear_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>"
                                                    class="badge badge-danger">Hapus Data</a>
                                                <a href="laporan.php?id=<?php echo $result['id_pemesanan'] ?>"
                                                    class="badge badge-success" target="_blank">Cetak</a>
                                                <a href="packing.php?id=<?php echo $result['id_pemesanan'] ?>"
                                                    class="badge badge-warning">packing</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade active" id="history-manifest-tab-content" role="tabpanel"
                                aria-labelledby="manifest-tab">
                                <table class="table table-bordered" id="history">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tanggal Pesan</th>
                                            <th scope="col">Total Bayar</th>
                                            <th scope="col">User</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $ambil = mysqli_query($koneksi, 'SELECT * FROM packing');
                                            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                            ?>
                                        <?php foreach ($result as $result) : ?>
                                        <tr>
                                            <td><?php echo $result["id"]; ?></td>
                                            <td><?php echo $result["tgl_pesan"]; ?></td>
                                            <td>Rp. <?php echo number_format($result["total"]); ?></td>
                                            <td><?php echo $result["user"]; ?></td>

                                            <td>
                                                <a href="laporan.php?id=<?php echo $result['id'] ?>"
                                                    class="badge badge-success" target="_blank">Cetak</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <footer class="bg-danger" style=" height: 70px;">
        <div class="atas">
            <label class="font-weight-bold" style="margin-top: 20px; margin-left: 650px;">Sekian dan Terima Kasih
            </label>
            <img src="images/smile.png" class="mr-1 ml-2" data-toggle="tooltip" title="Facebook">
        </div>
    </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#history').DataTable();

    });
    </script>
</body>

</html>
<?php } ?>