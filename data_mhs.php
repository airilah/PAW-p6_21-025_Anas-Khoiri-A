<?php
$koneksi = mysqli_connect("localhost","root","","nas");
$sql = "SELECT id_mhs , nama_mhs , nama_prodi,alamat_mhs
FROM tbl_mhs , tbl_prodi
WHERE tbl_mhs.id_prodi=tbl_prodi.id_prodi";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en"><head>
  <title>Data Mahasiswa Teknik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    body{
      background-color: skyblue;
    }
    table {
      background-color: white;
    }
  </style>
</head>
<body>
<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK</h2>
  <p>Data ini dari tabel MySQL punya Anas </p> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
    while($baris = mysqli_fetch_assoc($hasil))
    {
        echo"
    <tbody>
      <tr>  
        <td>".$baris['id_mhs']."</td>
        <td>".$baris['nama_mhs']."</td>
        <td>".$baris['nama_prodi']."</td>
        <td>".$baris['alamat_mhs']."</td>
        <td>
        <a class='btn btn-success' href='form_edit.php?id_mhs=".$baris['id_mhs']."&k=8'>Edit</a>
        <a class='btn btn-danger' href='hapus.php?id=".$baris['id_mhs']."'>Hapus</a>
        </td>
      </tr>
  </tbody>
    ";
    }
    echo $baris ;
    ?>
  </table>
<a href="form_mhs.php" class="btn btn-primary">Tambah</a>

<br>

</div>

</body>
</html>