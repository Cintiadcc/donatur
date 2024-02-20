<!DOCTYPE html>
<html lang="en">
    <head>
<title>INPUT DATA DONATUR</title>
    </head>

<body>
<form action="ProsesInputDonatur.php" method="post" enctype="multipart/form-data
    name="form1" id="form1">    
    <center>
    <legend style="text-align: center;"><h3>Data Donatur</h3></legend>
    <table>
        <tr>
            <td>ID Donatur</td>
            <td>:</td>
            <td><input name="id_donatur" type="text" id="id_donatur" size="50" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input name="nama" type="text" id="nama" size="50" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input name="alamat" type="text" id="alamat" size="50" /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:<td>
                <select name="kategori" id="kategori">
                   <option value="">--Pilih Opsi--</option>
                   <option value="Bencana Alam">Bencana Alam</option> 
                   <option value="Anak Yatim">Anak Yatim Piatu</option>
                   <option value="Jumat Berkah">Jumat Berkah</option>
                </select>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input name="jumlah" type="varchar" id="jumlah" size="50" /></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input name="tanggal" type="Date" id="tanggal" size="50" /></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" id="simpan" value="Simpan"/></td>
        </tr>
</table>
</center>
</form>
</body>
</html>
