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
                        <a href="user.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Home</a>
                        <a href="menu_pembeli.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px; padding:15px">Daftar Menu</a>
                        <a href="pesanan_pembeli.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Pesanan Anda</a>
                        <a href="About.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">About</a>
                        <a href="bayar.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Bayar</a>
                        <a href="pengiriman.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Pengiriman</a>
                        <a href="logout.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Logout</a>
                    </div>
                </div>
            </div>

            <div class="col-10" style="background-color: #CCF5FC">
                <div class="col-10" style="background-color: #CCF5FC">
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
                        <div class="tab-content" id="">
                            <div class="tab-pane fade active show" id="manifest-tab-content" role="tabpanel"
                                aria-labelledby="manifest-tab">
                                <table class="table table-striped" id="pengiriman">
                                    <thead class="thead-dark">
                                        <tr>
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
                                        <tr>
                                            <th scope="row"><?php echo $nomor; ?></th>
                                            <td><?php echo $result["id"]; ?></td>
                                            <td><?php echo $result["tgl_pesan"]; ?></td>
                                            <td>Rp. <?php echo number_format($result["total"]); ?></td>
                                            <td><?php echo $result["user"]; ?></td>
                                            <td><?php echo $result['status'] == 1 ? 'Barang Telah Sampai' : 'Barang Sedang Dikirim' ?>
                                            </td>
                                            <td><button class="btn btn-sm btn-warning"><i
                                                        class="fa fa-truck"></i></button></td>
                                            <td><a href="laporan.php?id=<?php echo $result['id'] ?>"
                                                    class="badge badge-success" target="_blank">Detail Barang</a></td>
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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
    <!-- Akhir Menu -->
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

    <script type="text/javascript">
    $(document).ready(function() {
        $('#pengiriman').DataTable();
    });
    </script>





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
</body>

</html>

<?php
}
?>