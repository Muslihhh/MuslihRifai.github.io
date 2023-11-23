<?php 
include 'konek.php';

$idk = $_POST['id_kamar'];
$harga = $_POST['harga_permalam'];
$jenis = $_POST['jenis_kamar'];

mysqli_query($koneksi,"insert into kamar values('$idk','$harga','$jenis')");
header("location:kamar.php");
?>