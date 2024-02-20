<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])) {
  $id_donatur = $_POST['id_donatur'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kategori = $_POST['kategori'];
  $jumlah = $_POST['jumlah'];
  $tanggal = $_POST['tanggal'];
  $foto = $id_donatur . $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $path = "img/" . $foto;

  // if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO data_donasi VALUES ('$id_donatur','$nama','$alamat','$kategori','$jumlah','$tanggal','$foto')";  
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
      die("Data gagal diubah;".mysqli_errno($koneksi).mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Ditambah !');window.location.href='index.php'</script>";
    }
  // }
  // else {
  //   echo 'move_uploaded_file tidak disimpan';
  // }

}
