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
                        <a href="logout.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Logout</a>
                    </div>
                </div>
            </div>

            <div class="col-10" style="background-color: #CCF5FC">
                <br>
                <h5 style="text-align: center;">Transaksi Pembayaran</h5>

                <div class="container">
                    <div class="card card-info">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Total Bayar</th>
                                    <th>Nama Customer</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $test = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                                    $rs = mysqli_fetch_all($test, MYSQLI_ASSOC);
                                    ?>
                                <?php foreach ($rs as $value) : ?>
                                <tr>
                                    <td><?php echo $value['id_pemesanan'] ?></td>
                                    <td><?php echo $value['tanggal_pemesanan'] ?></td>
                                    <td><?php echo $value['total_belanja'] ?></td>
                                    <td><?php echo $value['user'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>



                    <?php
                        $test = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                        ?>
                    <?php while ($coba = $test->fetch_assoc()) { ?>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="text" value="<?php echo $coba['id_pemesanan'] ?>">
                        <input type="text" name="tanggal_pemesanan" value="<?php echo $coba['tanggal_pemesanan'] ?>">
                        <input type="text" name="total_belanja" value="<?php echo $coba['total_belanja'] ?>">
                        <input type="text" name="statuss" value="1">
                        <input type="text" name="user" value="<?php echo $coba['user'] ?>">
                        <input type="text" value="<?php echo $coba['bukti_pembayaran'] ?>">
                        <!-- <input type="file" name="bukti_pembayaran" value="" id="bukti"> -->

                        <div class="col-sm">
                            <div class="row col-md-6">
                                <img id="customeredit" src="" value="" style=" width: 100px; height:100px;">
                            </div>
                            <div class="row mt-2 col-md-6">
                                <input type="file" name="bukti_pembayaran" id="bukti" onchange="editcustomer()">
                            </div>
                        </div>


                        <button type="submit" name="simpan" id="up" class="btn btn-primary btn-sm"
                            disabled>Upload</button>
                    </form>
                    <?php } ?>

                    <?php
                        $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                            WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                        ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>

                    <input type="text" name="id_d" value="<?php echo $pecah['id_pemesanan']; ?>">
                    <input type="text" name="id_packing" value="<?php echo $pecah['id_pemesanan_produk']; ?>">
                    <input type="text" name="id_menu" value="<?php echo $pecah['nama_menu']; ?>">
                    <input type="text" value="<?php echo number_format($pecah['harga']); ?>">
                    <input type="text" name="jumlah" value="<?php echo $pecah['jumlah']; ?>">
                    <input type="text" value="<?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>" name=""
                        id="">

                    <script type="text/javascript">
                    let button = document.getElementById('up');
                    let input = document.getElementById('bukti');
                    input.addEventListener('input', function(e) {
                        if (input.value.length == 0) {
                            button.disabled = true;
                        } else {
                            button.disabled = false;
                        }
                    })

                    function editcustomer() {
                        let frame = document.getElementById('customeredit');
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                    </script>

                    <?php } ?>

                    <?php
                        if (isset($_POST['simpan'])) {

                            $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
                            $total_belanja = $_POST['total_belanja'];
                            $statuss = $_POST['statuss'];
                            $user = $_POST['user'];
                            $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
                            $source = $_FILES['bukti_pembayaran']['tmp_name'];
                            $folder = './upload/';

                            move_uploaded_file($source, $folder . $bukti_pembayaran);
                            $update = mysqli_query($koneksi, "UPDATE pemesanan SET tanggal_pemesanan='$tanggal_pemesanan', total_belanja='$total_belanja', 
                                statuss='$statuss', user='$user', bukti_pembayaran='$bukti_pembayaran' WHERE id_pemesanan='$_GET[id]'");
                            echo "<script>location= 'bayar.php'</script>";
                        }
                        ?>


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
<?php } ?>