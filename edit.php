
<?php
include('koneksi.php');

$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$jenis_menu = $_POST['jenis_menu'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder . $nama_file);
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_menu='$nama_menu', jenis_menu='$jenis_menu', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_menu='$id_menu' ");

if ($edit) {


	// echo "<script>location='halamanproduk.php'</script>";
	// echo "<script>
	// Swal.fire('Data Disimpan!', 'Data Behasil disimpan!', 'success', '200000')
	// </script>";
	// echo "<script>location='halamanproduk.php'</script>";
	// 	echo "<script>var timer = setTimeout(function()
	// { window.location= 'halamanproduk.php'}, 1000);
	// </script>";
	// 	echo '<script src="template/jquery-3.6.0.min.js"></script>';
	// 	echo '<script src="template/sweetalert2.all.min.js"></script>';

	echo "<script>location= 'halamanproduk.php'</script>";
} else {

	echo "Edit Menu Gagal";
}
?>