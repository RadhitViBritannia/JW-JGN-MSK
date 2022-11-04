<?php

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("SELECT * FROM tbisidata");

?>
<div class="card shadow">  
<div class="card-header bg-primary text-white">
    FORM DATA CATATAN PERJALANAN
</div>
<div class="card-body py-4 px-4">
<div class="table-responsive">
<table id="http://datatables.net/license_bsd" class="table table-bordered">
    <thead>
        <th>Nik</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Lokasi Terakhir</th>
        <th>Suhu</th>
        <th>Aksi</th>
    </thead>
<tbody>
<?php while($data = $query->fetch()): ?>
    <tr>
        <td><?= $data['nik'] ?></td>
        <td><?= $data['tanggal'] ?></td>
        <td><?= $data['waktu'] ?></td>
        <td><?= $data['lokasi'] ?></td>
        <td><?= $data['suhu_tubuh'] ?></td>
        <td>
        <a href="?proses=hapus&&nik=<?php echo $data['nik'] ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
<?php endwhile ?>
    </tbody>
    </table>
<div class="form-inline btn-c">
</div>
</div>
</div>
</div>