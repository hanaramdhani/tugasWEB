<?php
include('koneksi.php');
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
                <div class="container">
                    <div class="judul-pesanan mt-5">

                        <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>


                    </div>
                    <table class="table table-bordered" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pesanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Subharga</th>
                                <th scope="col">Opsi</th>
                                <th scope="col"></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $totalbelanja = 0; ?>
                            <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

                            <?php
                                    // include('koneksi.php');
                                    $host = "localhost";
                                    $user = "root";
                                    $pass = "";
                                    $db = "database_kue";

                                    $koneksi = mysqli_connect($host, $user, $pass, $db);
                                    global $conn;
                                    $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah["harga"] * $jumlah;
                                    ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah["nama_menu"]; ?></td>
                                <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
                                <td><?php echo $jumlah; ?></td>
                                <td>Rp. <?php echo number_format($subharga); ?></td>
                                <td>
                                    <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>"
                                        class="badge badge-danger">Hapus</a>
                                </td>
                                <td><input type="text" name="gambar" value="<?php echo $pecah["gambar"]; ?>"></td>
                                <td><img src="upload/<?php echo $pecah['gambar'] ?>"
                                        style="width: 80%; height: 140px; margin-top: 0px; display: block; margin: auto;"
                                        class="card-img-top" alt="..."></td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php $totalbelanja += $subharga; ?>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">Total Belanja</th>
                                <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
                            </tr>
                        </tfoot>
                    </table><br>


                    <form method="POST" action="">
                        <input type="text" value="<?php echo $_SESSION['login_user']; ?>" name="user">
                        <input type="text" value='0' name="statuss">
                        <input type="text" name="bukti_pembayaran" value="Belum Melakukan Pembayaran" id="">
                        <a href="menu_pembeli.php" class="btn btn-primary btn-sm">Lihat Menu</a>
                        <button class="btn btn-success btn-sm" type="submit" name="konfirm">Konfirmasi Pesanan</button>

                    </form>

                    <?php

                        if (isset($_POST['konfirm'])) {
                            $statuss = $_POST['statuss'];
                            $user = $_POST['user'];
                            $bukti_pembayaran = $_POST['bukti_pembayaran'];
                            $tanggal_pemesanan = date("Y-m-d");
                            $gambar = $_POST['gambar'];


                            // Menyimpan data ke tabel pemesanan
                            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja, statuss, user, bukti_pembayaran) VALUES ('$tanggal_pemesanan', '$totalbelanja', '$statuss', '$user', '$bukti_pembayaran')");

                            // Mendapatkan ID barusan
                            $id_terbaru = $koneksi->insert_id;

                            // Menyimpan data ke tabel pemesanan produk
                            foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) {
                                $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah, gambar) 
              VALUES ('$id_terbaru', '$id_menu', '$jumlah', '$gambar') ");
                            }


                            // Mengosongkan pesanan
                            unset($_SESSION["pesanan"]);

                            // Dialihkan ke halaman nota
                            echo "<script>alert('Pemesanan Sukses!');</script>";
                            echo "<script>location= 'menu_pembeli.php'</script>";
                        }
                        ?>
                </div>

                <!-- Akhir Menu -->

            </div>

            <!-- Awal Footer -->
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
    });
    </script>
</body>

</html>
<?php } ?>