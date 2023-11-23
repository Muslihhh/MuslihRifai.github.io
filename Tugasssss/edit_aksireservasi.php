<?php 
include 'konek.php';
$id_reservasi = $_POST['id_reservasi'];
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$tanggal_chekin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$total_harga = $_POST['total_harga'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi', id_tamu='$id_tamu', id_kamar='$id_kamar', jenis_kamar='$jenis_kamar', id_pegawai='$id_pegawai', tanggal_checkin='$tanggal_chekin', tanggal_checkout='$tanggal_checkout', total_harga'$total_harga'
WHERE id_reservasi='$id_reservasi'");
header("location:reservasi.php");
?>