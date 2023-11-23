<!DOCTYPE html>
<html>
<head></head>
	<title>Hotel</title>
	<link rel="stylesheet" href="style3.css">
</head>
<div class="main">
	<div class="navbar">
		<a href="dasbor.html"><img class="logo" src="logoo.png"></img></a>
		<ul>
			<li><a href="reservasi.php"><button class="button1">Reservasi</button></a></li>
			<li><a href="kamar.php"><button class="button1">Kamar</button></a></li>
			<li><a href="pegawai.php"><button class="button1">Pegawai</button></a></li>
			<li><a href="tamu.php"><button class="button1">Tamu</button></a></li>
		</ul>
	</div>
<div class="tengah">
<table>
   <tr>
       <th>Id Kamar</th>
       <th>Harga PerMalam</th>
       <th>Jenis Kamar</th>
       <th>Aksi</th>
   </tr>
    

<?php
    include 'konek.php';
    $data=mysqli_query($koneksi,"select * from kamar");
    while($tampil=mysqli_fetch_array($data)){
?>

    <tr>
        <td><?php echo $tampil['id_kamar'] ?></td>
        <td><?php echo $tampil['harga_permalam'] ?></td>
        <td><?php echo $tampil['jenis_kamar'] ?></td>
        <td><a href="hapus_kamar.php?id=<?php echo $tampil['id_kamar'];?>"> <button class="button2"> Hapus</button></a>
        <a href="edit_kamar.php?id=<?php echo $tampil['id_kamar'];?>"> <button class="button2">Edit</button></a></td>
    </tr>

<?php
    }
?>
</table>
</div>
<a href="input_kamar.php"><button class="button2">Tambah</button></a>
<a href="dasbor.html"><button class="button2">Kembali</button></a> 
</div>
</html>