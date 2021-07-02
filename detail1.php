<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
?>
<table class="table table-bordered" id="example">
    <thead class="thead-light">
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <!-- <th scope="col">Subharga</th> -->
            <!-- <th></th> -->
            <th></th>
            <!-- <th></th> -->
        </tr>
    </thead>
    <tbody>
        <!-- <?php $nomor = 1; ?> -->
        <?php $totalbelanja = 0; ?>
        <?php
            // print_r($_GET);
            $sql = "SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu  
                            WHERE pemesanan_produk.id_pemesanan='" . $_GET['id'] . "'";
            // echo $sql;
            $ambil = $koneksi->query($sql);

            ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>
        <tr>
            <!-- <th scope="row"><?php echo $nomor; ?></th> -->
            <td><?php echo $pecah['id_pemesanan_produk']; ?></td>
            <td><?php echo $pecah['nama_menu']; ?></td>
            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
            <td><?php echo $pecah['jumlah']; ?></td>
            <!-- <td>
                Rp. <?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>
            </td> -->
            <!-- <td><?php echo $pecah['gambar']; ?></td> -->
            <td><img src="upload/<?php echo $pecah['gambar'] ?>"
                    style="width: 100%; height: 100px; margin-top: 0px; display: block; margin: auto;"
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
</table><br>

<?php } ?>