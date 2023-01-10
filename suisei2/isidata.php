<title>Isi Data</title>
<html>
    <body>
        <div class="kotak_isi">
            <form action="prosesisidata.php" method="POST">
        <td>
        <table align="center">
        <tr>
            <td>Nis</td>
            <td><input type="number" name="nis" required ></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <td></td>
        <td align="right"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
    <?php
$koneksi = new PDO('mysql:host=localhost;dbname=siswa','root','');
$query = $koneksi->query("SELECT * FROM tbdatasiswa");
?>
<html>
    <body>

<tr>
    <tr>
        <tr>

        </tr>
    </tr>
</tr>
<?php

?>

</table>

<td>
    <table  align="center" border="1" width="30%" height="20%">
        <h2 align="center" >Data Table</h2>
        <th>NIS</th>
        <th>NAME</th>
        <th>CLASS</th>
        <th>AKSI</th>

</tr>
    <?php while($data = $query->fetch()): ?>
    <tr>
        <td><?= $data['nis']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['kelas']?></td>
        <td><a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Simpan</a>
        <a href="proseshapus.php?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
</tr>
    <?php endwhile; ?>
    </html>
    </body>

    </table>
</form>
</td>
</table>
</body>
</html>
