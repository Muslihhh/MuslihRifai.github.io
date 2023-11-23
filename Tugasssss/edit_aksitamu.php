<?php 
include 'konek.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($koneksi,"UPDATE tamu SET id_tamu='$id_tamu', nama_tamu='$nama_tamu', alamat='$alamat', no_telp='$no_telp' where id_tamu='$id_tamu'");
header("location:tamu.php");
?>