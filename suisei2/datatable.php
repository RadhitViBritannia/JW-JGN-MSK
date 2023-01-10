<?php

$db = new PDO('mysql:host=localhost;dbname=siswa;','root','');
$query = $db->query("SELECT * FROM tbdatasiswa");

?>
<div class="card shadow">  
<div class="card-header bg-primary text-white">
    FORM DATA SISWA
</div>
<div class="card-body py-4 px-4">
<div class="table-responsive">
<table id="http://datatables.net/license_bsd" class="table table-bordered">

    <input type="submit" value="Urutkan">
    <form align="right">
        <input type="text" name="search"> <button type="submit">Cari</button>
    </form>
    
<?php
    if(isset($_GET['search'])){
        $cari =$_GET['search'];
        $query = $koneksi->query("SELECT * FROM tbisidata WHERE lokasi LIKE '$cari'");
    }
?>

    <thead>
        <th>NIS</th>
        <th>NAME</th>
        <th>CLASS</th>
    </thead>
<tbody>
<?php while($data = $query->fetch()): ?>
    <tr>
        <td><?= $data['nis'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['kelas'] ?></td>>
        <td>
        <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Update</a>
        <a href="proseshapus.php?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
<?php endwhile ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </tbody>
    </table>
<div class="form-inline btn-c">
</div>
</div>
</div>
</div>