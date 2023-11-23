<?php 
include 'konek.php';

$idp = $_POST['id_pegawai'];
$namap = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$telpp = $_POST['no_telp'];

mysqli_query($koneksi,"insert into pegawai values('$idp','$namap','$alamat','$telpp')");
header("location:pegawai.php");
?>