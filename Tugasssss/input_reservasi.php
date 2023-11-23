<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<div class="input">
    <form method="post" action="input_aksireservasi.php">
    <table>
    <tr>
        <td>Id Reservasi</td>
        <td><input type="number" name="idres"></td>
    </tr>
    <tr>
        <td>Id Tamu</td>
        <td><input type="number" name="idtam"></td>
    </tr>
    <tr>
        <td>Id Kamar</td>
        <td><input type="number" name="idkam"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><select name="jenis_kamar" id="jenis">
            <option value="VIP">VIP</option>
            <option value="Hemat">Hemat</option>
        </select></td>
    </tr>
    <tr>
        <td>Id Pegawai</td>
        <td><input type="number" name="idpe"></td>
    </tr>
    <tr>
        <td>Tanggal Checkin</td>
        <td><input type="date" name="cekin"></td>
    </tr>
    <tr>
        <td>Tanggal Checkout</td>
        <td><input type="date" name="cekot"></td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td><input type="number" name="harga"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan"></td>
    </tr>
    </table>
    </form>
</div>
</body>
</html>