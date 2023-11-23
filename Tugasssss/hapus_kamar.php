<?php
include 'konek.php';

$id=$_GET['id'];//id= adl variabel baru
mysqli_query($koneksi,"DELETE FROM kamar where id_kamar='$id'");
header("location: kamar.php");
?>