

	<?php

	include('koneksi.php');


	$id_menu = $_GET['id_menu'];

	$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_menu='$id_menu'");
	// if ($hapus) {
	// echo "<script>alert('Data Berhasil Dihapus');</script>";
	// echo "<script>
	// document.querySelector('.first').addEventListener('click', function(){
	// 	Swal.fire('Our First Alert');
	//   });</script>";

	// echo "sweetAlert('Sucesso!', 'As informações foram atualizadas.', 'success')";
	// echo "<script>location= 'halamanproduk.php'</script>";
	// } else {
	// 	echo "Hapus data gagal";
	// }

	header('location: halamanproduk.php')
	?>
