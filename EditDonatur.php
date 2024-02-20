<?php
include 'koneksi.php';

	if (isset($_GET["id"])) {
		$id = ($_GET["id"]);

		$result = mysqli_query($koneksi,"SELECT * FROM data_donasi WHERE id_donatur = '$id'");
		
		while($row = mysqli_fetch_array($result)){
			$id_donatur = $row['id_donatur'];
			$nama = $row['Nama'];
			$alamat = $row['Alamat'];
			$kategori = $row['Kategori'];
			$jumlah = $row['Jumlah'];
			$tanggal = $row['Tanggal'];
			$foto = $row['foto'];
		}
	} else{
		header("location:index.php");
	}
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<title>Edit Data Donatur</title>
	</head>

	<body>
	<form action="ProsesEditDonatur.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
			<legend style="text-align: center;">
				<h3>Data Donatur</h3>
			</legend>
			<center>
			<table>
				<tr>
					<td>ID Donatur</td>
					<td>:</td>
					<td><input type="text" name="id_donatur" id="id_donatur" size="50" maxlength="15" value="<?= $id_donatur; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama" size="50" value="<?= $nama; ?>"></td>
				</tr>
                <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input name="alamat" type="text" id="alamat" size="50"value="<?= $alamat; ?>" /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:<td>
                <select name="kategori" id="kategori">
                   <option value="<?=$kategori?>"> <?=$kategori?></option>
                   <option value="Bencana Alam" <?php if ($kategori == 'Bencana Alam') echo ' selected = "selected"'; ?>/>Bencana Alam</option> 
                   <option value="Anak Yatim Piatu" <?php if ($kategori == 'Anak Yatim Piatu') echo ' selected = "selected"'; ?>/>Anak Yatim Piatu</option>
				   <option value="Jumat Berkah" <?php if ($kategori == 'Jumat Berkah') echo ' selected = "selected"'; ?>/>Jumat Berkah</option>  
				</select>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input name="jumlah" type="Varchar" id="jumlah" size="50" value="<?= $jumlah; ?>"  /></td>
        </tr>
		<tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input name="tanggal" type="Date" id="tanggal" size="50" value="<?= $tanggal; ?>"  /></td>
        </tr>
				<tr>
					<td>Foto</td>
					<td>:</td>
					<td>
						<input type="file" name="foto" id="foto" value="<?= $foto; ?>">
						<br>
						<?= $foto; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<button type="submit" name="edit" id="edit">Edit</button>
					</td>
				</tr>
			</table>
			</center>
	</form>
</body>

</html>
