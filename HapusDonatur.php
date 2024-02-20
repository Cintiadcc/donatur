<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
	$id_donatur = $_GET['id'];
	$file = mysqli_query($koneksi, "SELECT foto FROM data_donasi WHERE id_donatur = '$id_donatur'");
	$hasil = mysqli_fetch_array($file);
	if ($hasil["foto"] != null){
		unlink("img/".$hasil["foto"]);
	}
	$query = "DELETE FROM data_donasi WHERE id_donatur = '$id_donatur'";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Data gagal dihapus." . mysqli_errno($koneksi) . mysqli_error($koneksi));
	} else {
		echo "<script>
                alert('Data Berhasil Dihapus !');
                window.location.href='index.php';
              </script>";
	}
}
