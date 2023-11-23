<?php 
include 'konek.php';

$idt = $_POST['id_tamu'];
$namat = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$telpt = $_POST['no_telp'];

mysqli_query($koneksi,"insert into tamu values('$idt','$namat','$alamat','$telpt')");
header("location:tamu.php");
?>