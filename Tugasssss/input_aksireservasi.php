<?php 
include 'konek.php';
$idr = $_POST['id_reservasi'];
$idt = $_POST['id_tamu'];
$idk = $_POST['id_kamar'];
$jenis = $_POST['jenis_kamar'];
$idp = $_POST['id_pegawai'];
$cekin = $_POST['tanggal_checkin'];
$cekot = $_POST['tanggal_checkout'];
$harga = $_POST['total_harga'];

mysqli_query($koneksi,"insert into reservasi values('$idr','$idt','$idk','$jenis','$idp','$cekin','$cekot','$harga')");
header("location:reservasi.php");
?>