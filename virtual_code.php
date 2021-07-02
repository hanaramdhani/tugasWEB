<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
?>

<html>

<head>
    <title>Report||Belanja</title>
</head>

<body>

    <center>
        <h2>TOKO KITA</h2>
    </center>

    <?php
        $ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
        ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>

    <h3> KODE PEMBAYARAN : HB9S - LQ8C - <?php echo $pecah['id_pemesanan']; ?></h3>


    <?php } ?>


    <table class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <td width="1%">No</td>
                <td>ID Pemesanan</td>
                <td>Nama Pesanan</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Sub Harga</td>
                <!-- <th></th> -->
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $nomor = 1; ?>
            <?php $totalbelanja = 0; ?>
            <?php
                $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>
            <tr>
                <th scope="row"><?php echo $nomor; ?></th>
                <td><?php echo $pecah['id_pemesanan_produk']; ?></td>
                <td><?php echo $pecah['nama_menu']; ?></td>
                <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                <td><?php echo $pecah['jumlah']; ?></td>
                <td>
                    Rp. <?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>
                </td>
                <!-- <td><?php echo $pecah['gambar']; ?></td> -->
                <td><img src="upload/<?php echo $pecah['gambar'] ?>"
                        style="width: auto; height: auto; margin-top: 0px; display: block; margin: auto;"
                        class="card-img-top" alt="..."></td>
            </tr>
            <?php $nomor++; ?>
            <?php $totalbelanja += $subharga1; ?>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">Total Bayar</th>
                <th>Rp. <?php echo number_format($totalbelanja) ?></th>
            </tr>
        </tfoot>

    </table>

    <script>
    window.print();
    </script>

</body>

</html>

<?php } ?>