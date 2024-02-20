<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
  $id_donatur = $_POST['id_donatur'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kategori = $_POST['kategori'];
  $jumlah = $_POST['jumlah'];
  $tanggal = $_POST['tanggal'];
  $foto = $id_donatur . $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $path = "img/".$foto;

  if (empty($foto)) 
  {
    $query = "UPDATE data_donasi SET nama = '$nama', alamat = '$alamat' , kategori = '$kategori'  , jumlah = '$jumlah' ,tanggal = '$tanggal'  WHERE id_donatur = '$id_donatur'";
    $result = mysqli_query($koneksi, $query); 
    if (!$result) {
      die("Data gagal diubah;".mysqli_errno($koneksi).mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data Berhasil Diubah !');window.location.href='index.php'</script>";
    }
  }
  else {
    $file = mysqli_query($koneksi, "SELECT foto FROM data_donasi WHERE id_donatur = '$id_donatur'");
    $hasil = mysqli_fetch_array($file);
    $foto_lama = $hasil['foto'];
    unlink("img/".$foto_lama);

    if (move_uploaded_file($tmp, $path)) {
      $query = "UPDATE data_donasi SET nama = '$nama', alamat = '$alamat', kategori = '$kategori' ,jumlah = '$jumlah' ,tanggal = '$tanggal', foto = '$foto' WHERE id_donatur = '$id_donatur'";
      $result = mysqli_query($koneksi, $query);

      if (!$result) {
        die("Data gagal diubah;".mysqli_errno($koneksi).mysqli_error($koneksi));
      } else {
        echo "<script>alert('Data Berhasil Diubah !');window.location.href='index.php'</script>";
      }
    }
  }
}
?>