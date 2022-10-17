<?php
$koneksi = mysqli_connect("localhost","root","","nas");
$nama = $_POST["nama_mhs"];
$prodi = $_POST["nama_prodi"];
$alamat = $_POST["alamat_mhs"];

$tmbh= "INSERT INTO tbl_mhs
        VALUES (NULL,$prodi,'$nama','$alamat')";
$hasil = mysqli_query($koneksi,$tmbh);
if ($hasil) {
    header("location: data_mhs.php");
}else{
    echo"Salah dalam pengisian data <a href='form_mhs.php'>From</a>";
}
?>