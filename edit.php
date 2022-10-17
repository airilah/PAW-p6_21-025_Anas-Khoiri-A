<?php 
$koneksi = mysqli_connect("localhost","root","","nas");
$id = (int) $_POST["id_mhs"];
$nama = $_POST["nama_mhs"];
$prodi = (int) $_POST["nama_prodi"];
$alamat = $_POST["alamat_mhs"];
$edit = "UPDATE tbl_mhs
SET  id_prodi=$prodi , nama_mhs='$nama' , alamat_mhs = '$alamat'   
WHERE id_mhs=$id";
$hasil = mysqli_query($koneksi,$edit);

if ($hasil) {
    header("Location: data_mhs.php");
}else{
    echo"Data tidak berhasil diedit!";
    mysqli_error($hasil);
}
?>