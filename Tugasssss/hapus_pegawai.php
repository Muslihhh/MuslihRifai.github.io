<?php
include 'konek.php';

$id=$_GET['id'];//id= adl variabel baru
mysqli_query($koneksi,"DELETE FROM pegawai where id_pegawai='$id'");
header("location: pegawai.php");
?>