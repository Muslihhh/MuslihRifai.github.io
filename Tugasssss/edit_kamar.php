<html>
<link rel="stylesheet" href="style5.css">
 <?php
    include 'konek.php';
    $id = $_GET['id'];
    $data=mysqli_query($koneksi,"select * from kamar where id_kamar='$id'");
    while($tampil=mysqli_fetch_array($data)){
?>
<div class="input">
    <form method="post" action="edit_aksikamar.php">
    <table>
    <tr>
        <td>Id Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar'];?>"></td>
    </tr>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="text" name="harga_permalam" value="<?php echo $tampil['harga_permalam']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><select name="jenis_kamar" id="jenis">
            <option value="VIP">VIP</option>
            <option value="Murah">Murah</option>
        </select></td>
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