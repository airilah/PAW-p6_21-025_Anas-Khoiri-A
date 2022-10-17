<?php 
$koneksi = mysqli_connect("localhost","root","","nas");
$id = $_GET['id'];
$del = "DELETE FROM tbl_mhs WHERE id_mhs=$id"; 
$hasil = mysqli_query($koneksi,$del);
if ($hasil) {
    echo "Data berhasil dihapus!"
    header("location: data_mhs.php");
}else{
    echo"Data tidak berhasil dihapus!";
}
?>