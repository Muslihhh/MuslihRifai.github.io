<?php
include 'konek.php';

$id=$_GET['id'];//id= adl variabel baru
mysqli_query($koneksi,"DELETE FROM tamu where id_tamu='$id'");
header("location: tamu.php");
?>