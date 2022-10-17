<?php
$koneksi = mysqli_connect("localhost","root","","nas");
$sqi = "SELECT * FROM tbl_prodi";
$hasil = mysqli_query($koneksi,$sqi); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
  	body{
  		background-color: skyblue;
  	}
 	</style>
</head>
<body>
<div class="container mt-3">
    <h1>Mahasiswa Teknik</h1>
    <p>Silahkan isi data dibawah ini</p>
    <form action="action.php" method="post">
        <div class="mb-3 mt-3">
            <label for="nama_mhsa">Nama : </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_mhs" id="nama_mhsa">
        </div>
        <div class="mb-3">
            <label for="prodi">Nama Prodi:</label>
            <select name="nama_prodi" class="form-select">
            <?php while ($a = mysqli_fetch_assoc($hasil)) {?>
                <option value="<?php echo $a['id_prodi'];?>" > <?php echo $a['nama_prodi'];?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat_mhs">
        </div>
        <button type="submit" class="btn btn-secondary">Tambah Data!</button>
    </form>
    <a href="data_mhs.php" >Back to Data Table</a>
</div>
</body>
</html>