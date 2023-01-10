<?php
session_start();

$id = $_GET['id'];
$db = new PDO('mysql:host=localhost;dbname=siswa','root','');
$query = $db->query("SELECT * FROM tbdatasiswa where id='$id'");
$data = $query->fetch();

?>

<title>Isi Data</title>
<html>
    <body>
        <div class="kotak_isi">
            <form action="prosesisidata.php" method="POST">
        <td>
        <table align="center">
        <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" required ></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>CLASS</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" name="simpan" value="simpan"></td>
            <td align="right"><a href="isidata.php" class="btn btn-info mb-3">KEMBALI</a></td>
        </tr>
        </table>
</form>
</td>
</table>
</body>
</html>
