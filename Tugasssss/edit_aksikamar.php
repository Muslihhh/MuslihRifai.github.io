<?php 
include 'konek.php';

$id_kamar = $_POST['id_kamar'];
$harga_permalam = $_POST['harga_permalam'];
$jenis_kamar = $_POST['jenis_kamar'];


mysqli_query($koneksi,"UPDATE kamar SET id_kamar='$id_kamar', harga_permalam='$harga_permalam', jenis_kamar='$jenis_kamar' where id_kamar='$id_kamar'");
header("location:kamar.php");
?>