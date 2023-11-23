<?php 
include 'konek.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', alamat='$alamat', no_telp='$no_telp' where id_pegawai='$id_pegawai'");
header("location:pegawai.php");
?>