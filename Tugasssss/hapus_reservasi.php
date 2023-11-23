<?php
include 'konek.php';

$id=$_GET['id'];//id= adl variabel baru
mysqli_query($koneksi,"DELETE FROM reservasi where id_reservasi='$id'");
header("location: reservasi.php");
?>