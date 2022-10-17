<?php
$koneksi = mysqli_connect("localhost","root","","nas");
$sql = "SELECT * FROM tbl_mhs";
$hasil = mysqli_query($koneksi,$sql);
?>