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
                <div class="card card-danger card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <h4 class="text-center">Konfirmasi Barang Telah Sampai</h4>
                    </div>

                    <div class="card-body">
                        <?php
                            $ambil = $koneksi->query("SELECT * FROM pengiriman WHERE id='$_GET[id]'");
                            ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 col-md-3 col-form-label">ID</label>
                            <div class="col-sm-8 col-md-4">
                                <input type="text" value="<?php echo $pecah['id']; ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 col-md-3 col-form-label">Tanggal Pesan</label>
                            <div class="col-sm-8 col-md-4">
                                <input type="text" value="<?php echo $pecah['tgl_pesan']; ?>" readonly
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 col-md-3 col-form-label">Total</label>
                            <div class="col-sm-8 col-md-4">
                                <input type="text" value="Rp.<?php echo $pecah['total']; ?>.000" readonly
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 col-md-3 col-form-label">Customer</label>
                            <div class="col-sm-8 col-md-4">
                                <input type="text" value="<?php echo $pecah['user']; ?>" readonly class="form-control">
                            </div>
                        </div>
                        <?php } ?>
                        <table class="table table-striped" id="example">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Pemesanan</th>
                                    <th scope="col">ID Pemesanan Produk</th>
                                    <th scope="col">Nama Menu</th>
                                    <th scope="col">Total Bayar</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php
                                    $ambil = mysqli_query($koneksi, "SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                            WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                                    $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
                                    ?>
                                <?php foreach ($result as $result) : ?>
                                <tr>
                                    <th scope="row"><?php echo $nomor; ?></th>
                                    <td><?php echo $result["id_pemesanan"]; ?></td>
                                    <td><?php echo $result["id_pemesanan_produk"]; ?></td>
                                    <td><?php echo $result["nama_menu"]; ?></td>
                                    <td><?php echo $result["harga"]; ?></td>
                                    <td><?php echo $result["jumlah"]; ?></td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php $hrg = $result['harga'] * $result['jumlah']; ?>
                                <?php $sub += $hrg; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <p><strong>Total Bayar : Rp. <?php echo number_format($sub, 0, ',', '.') ?></strong></p>


                        <form action="" method="POST">
                            <?php
                                $ambil = $koneksi->query("SELECT * FROM pengiriman WHERE id='$_GET[id]'");
                                ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <input type="text" name="id" value="<?php echo $pecah['id']; ?>">
                            <input type="text" name="tgl_pesan" value="<?php echo $pecah['tgl_pesan']; ?>">
                            <input type="text" name="total" value="<?php echo number_format($pecah['total']); ?>">
                            <input type="text" name="user" value="<?php echo  $pecah['user'] ?>">
                            <input type="text" name="statuss" value="Barang Sudah Sampai">
                            <?php } ?>


                            -------------------------------------------------------------------------Detail----------------------------------------------------------------------------------------------------
                            <?php
                                $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                            WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                                ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <?php
                                    $subharga1 = $pecah['harga'] * $pecah['jumlah'];
                                    ?>

                            <input type="text" name="id_d" value="<?php echo $pecah['id_pemesanan']; ?>">
                            <input type="text" name="id_histori" value="<?php echo $pecah['id_pemesanan_produk']; ?>">
                            <input type="text" name="id_menu" value="<?php echo $pecah['nama_menu']; ?>">
                            <input type="text" value="<?php echo number_format($pecah['harga']); ?>">
                            <input type="text" name="jumlah" value="<?php echo $pecah['jumlah']; ?>">
                            <input type="text" value="<?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>"
                                name="" id="">
                            <?php } ?>
                            <button type="submit" name="simpan" class="btn btn-primary btn-sm">Pesanan Telah
                                Sampai</button>
                        </form>

                        <?php
                            if (isset($_POST['simpan'])) {
                                $id = $_POST['id'];
                                $tgl_pesan = $_POST['tgl_pesan'];
                                $total = $_POST['total'];
                                $user = $_POST['user'];
                                $statuss = $_POST['statuss'];

                                $id_d = $_POST['id_d'];
                                $id_histori = $_POST['id_histori'];
                                $id_menu = $_POST['id_menu'];
                                $jumlah = $_POST['jumlah'];
                                $insert = mysqli_query($koneksi, "INSERT INTO histori_pengiriman (id, tgl_pesan, total, user, statuss) VALUES ('$id', '$tgl_pesan', '$total', '$user', '$statuss')");
                                $insert = mysqli_query($koneksi, "INSERT INTO detail_histori (id, id_histori, id_menu, jumlah) VALUES ('$id_d', '$id_histori', '$id_menu', '$jumlah')");
                                $delete = mysqli_query($koneksi, "DELETE FROM pengiriman WHERE id='$_GET[id]'");
                                echo "<script>location= 'pengiriman_admin.php'</script>";
                            }
                            ?>
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