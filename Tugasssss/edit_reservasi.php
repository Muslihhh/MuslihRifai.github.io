<html>
<link rel="stylesheet" href="style5.css">
 <?php
    include 'konek.php';
    $id = $_GET['id'];
    $data=mysqli_query($koneksi,"select * from reservasi where id_reservasi='$id'");
    while($tampil=mysqli_fetch_array($data)){
?>
<div class="input">
    <form method="post" action="edit_aksireservasi.php">
    <table>
    <tr>
        <td>Id Reservasi</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi'];?>"></td>
    </tr>
    <tr>
        <td>Id Tamu</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar'];?>"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><select name="jenis_kamar" id="jenis">
            <option value="VIP">VIP</option>
            <option value="Murah">Murah</option>
        </select></td>
    </tr>
    <tr>
        <td>Id Pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai'];?>"></td>
    </tr>
    <tr>
        <td>Tanggal Checkin</td>
        <td><input type="date" name="tanggal_checkin" value="<?php echo $tampil['tanggal_checkin'];?>"></td>
    </tr>
    <tr>
        <td>Id Pegawai</td>
        <td><input type="date" name="tanggal_checkout" value="<?php echo $tampil['tanggal_checkout'];?>"></td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td><input type="number" name="total_harga" value="<?php echo $tampil['total_harga'];?>"></td>
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