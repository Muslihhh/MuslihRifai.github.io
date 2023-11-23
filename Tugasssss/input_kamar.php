<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<div class="input">
    <form method="post" action="input_aksikamar.php">
    <table>
    <tr>
        <td>Id Kamar</td>
        <td><input type="number" name="id_kamar"></td>
    </tr>
    <tr>
        <td>Harga PerMalam</td>
        <td><input type="text" name="harga_permalam"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><select name="jenis_kamar" id="jenis">
            <option value="VIP">VIP</option>
            <option value="Hemat">Hemat</option>
        </select></td>
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