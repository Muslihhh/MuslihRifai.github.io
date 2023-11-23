<!DOCTYPE html>
<html>
<head></head>
	<title>Hotel</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>
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
       <th>Id Tamu</th>
       <th>nama tamu</th>
       <th>alamat</th>
       <th>no telp</th> 
       <th>Aksi</th>
   </tr>
    

<?php
    include 'konek.php';
    $data=mysqli_query($koneksi,"select * from tamu");
    while($tampil=mysqli_fetch_array($data)){
?>

    <tr>
        <td><?php echo $tampil['id_tamu'] ?></td>
        <td><?php echo $tampil['nama_tamu'] ?></td>
        <td><?php echo $tampil['alamat'] ?></td>
        <td><?php echo $tampil['no_telp'] ?></td>
        <td><a href="hapus_tamu.php?id=<?php echo $tampil['id_tamu'];?>"><button class="button2"> Hapus</button></a>
        <a href="edit_tamu.php?id=<?php echo $tampil['id_tamu'];?>"><button class="button2"> Edit</button></a></td>
    </tr>

<?php
}
?>
</table>
</div>
<a href="input_tamu.php"><button class="button2">Tambah</button></a> 
<a href="dasbor.html"><button class="button2">Kembali</button></a>
</div>   
</body>
</html>
