<?php
$koneksi = mysqli_connect("localhost","root","","nas");
$id = (int)$_GET["id_mhs"];
$sqi = "SELECT * FROM tbl_prodi";
$sql = "SELECT * FROM tbl_mhs WHERE id_mhs=$id";
$data = mysqli_query($koneksi,$sql);
$baris = mysqli_fetch_assoc($data);
$sqla = "SELECT * FROM tbl_prodi WHERE id_prodi=".$baris['id_prodi'];
$q= mysqli_query($koneksi,$sqla);
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
    <p>Silahkan edit data dibawah ini</p>
    <form action="edit.php" method="post">
        <input type="hidden" name="id_mhs" value=<?= $id ?> >
        <div class="mb-3 mt-3">
            <label for="nama_mhsa">Nama : </label>
            <input type="text" value="<?= $baris['nama_mhs']; ?>" class="form-control" placeholder="Masukkan Nama" name="nama_mhs" id="nama_mhsa">
        </div>
        <div class="mb-3">
            <label for="prodi">Id Prodi:</label>
            <select id="prodi" name="nama_prodi" class="form-select" onclick="prodi.removeChild(document.getElementById('selected_prodi'))">
                <?php while ($qa = mysqli_fetch_assoc($q)){var_dump($qa);?>
            <option selected id="selected_prodi"><?php echo $qa['nama_prodi']; }?></option>
            <?php while ($a = mysqli_fetch_assoc($hasil)) { var_dump($a);?>
                <option value="<?php echo $a['id_prodi'];?>" > <?php echo $a['nama_prodi'];?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="alamat">Alamat :</label>
            <input type="text" value="<?= $baris['alamat_mhs']; ?>" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat_mhs">
        </div>
        <button type="submit" class="btn btn-secondary">Kirim</button>
    </form>
    <a href="data_mhs.php" >Back to Data Table</a>
</div>
</body>
</html>