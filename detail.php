<?php

if ($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($koneksi, "SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
    WHERE pemesanan_produk.id_pemesanan='$id'");
    while ($row = mysqli_fetch_array($sql)) {
?>

<!-- Modal -->
<form method="post" action="./application/view/save.php">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Kode Paket</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" value="<?php echo $row['id_pemesanan_produk']; ?>"
                name="kode_paket">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nama Paket</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" value="<?php echo $row['nama_menu']; ?>" name="nama_paket">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Harga</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" value="<?php echo $row['harga']; ?>" name="harga">
        </div>
    </div>

</form>
<?php }
}
?>