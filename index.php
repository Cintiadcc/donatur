<?php
error_reporting(0);
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>DONASI</title>

	<link rel="stylesheet" href ="DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css">

	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" href ="bootstrap-4.1.3-dist/css/bootstrap.css">
	<link rel="stylesheet" href ="DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>

<body>
	<div class="container">
	<h1 style="text-align: center; ">Data Donatur</h1>
    <center><a href="InputDonatur.php">Tambah Data</a></center>
	<br>
	<table 
		class ="table table-striped table-bordered" id="data">
	    <thead>
	    <tr>
				<th>No</th>
				<th>ID Donatur</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kategori</th>
				<th>Jumlah</th>
				<th>Tanggal</th>
				<th>Foto</th>
				<th>Edit</th>
				<th>Hapus</th>
	    </tr>
	    </thead>
	    <?php
				$no = 0;
				$result = mysqli_query($koneksi, "SELECT * FROM data_donasi ORDER BY id_donatur ASC");
				while($row = mysqli_fetch_array($result)) {
					$no++
			?>

        <tbody>
	    <tr>
		    <td><?php echo $no;?></td>
		    <td><?php echo $row['id_donatur'];?></td>
		    <td><?php echo $row['Nama'];?></td>
		    <td><?php echo $row['Alamat'];?></td>
		    <td><?php echo $row['Kategori'];?></td>
		    <td><?php echo $row['Jumlah'];?></td>
			<td><?php echo $row['Tanggal'];?></td>
		    <td>
			<center>
			<img src="img/<?= $row['foto']; ?>" border="0" width="70px" height="70px">
			<center>
		</td>
        <td>
            <a href="EditDonatur.php?id=<?= $row['id_donatur']; ?>">Edit</a>
            </td>
			<td>
			<a href="HapusDonatur.php?id=<?= $row['id_donatur']; ?>">Hapus</a>
			</td>
		</tr>
		<?php }?>
		</tbody>
	</table>

	</div>
	<script>
		$(document).ready(function(){
			$('#data').DataTable();
		});
	</script>
</body>
</html>
		