<html>
<link rel="stylesheet" href="style5.css">
 <?php
    include 'konek.php';
    $id = $_GET['id'];
    $data=mysqli_query($koneksi,"select * from tamu where id_tamu='$id'");
    while($tampil=mysqli_fetch_array($data)){
?>
<div class="input">
    <form method="post" action="edit_aksitamu.php">
    <table>
    <tr>
        <td>Id Tamu</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu'];?>"></td>
    </tr>
    <tr>
        <td>Nama Tamu</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>"></td>
    </tr>
    <tr>
        <td>No telepon</td>
        <td><input type="number" name="no_telp" value="<?php echo $tampil['no_telp'];?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="simpan"></td>
    </tr>
    </table>
</form>
</div>
<?php
}
?>
</html>