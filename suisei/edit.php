<?php
session_start();

    $id=$_GET['id'];
    $db = new PDO("mysql:host=localhost;dbname=pedulidiri",'root','');
    $query = $db->query("SELECT * FROM tbisidata WHERE id='$id'");
    $data = $query->fetch();
    
?>
<div class="card shadow">      
<div class="card-header bg-primary text-white">
        FORM ISI DATA CATATAN PERJALANAN
</div class="card-body py-4">
<div class="row justify-content-center">
<div class="col-lg-10 mt-3 mb-4">
    <?php echo @$alert;?>
        <form action="prosesedit.php?id=<?= $id ?>" method="POST">
            <label for="">Tanggal</label>
            <input type="date" name="tanggal" class="form-control mt-3 mb-4" required>
            <label for="">Waktu</label>
            <input type="time" name="waktu" class="form-control mt-3 mb-4" required>
            <label for="">Lokasi yang dikunjungi</label>
            <input type="text" name="lokasi" class="form-control mt-3 mb-4" required>
            <label for="">Suhu tubuh</label>
            <input type="number" name="suhu_tubuh" class="form-control mt-3 mb-4" required>
<div class="form-inline">
            <button name="simpan" class="btn btn-primary">Simpan</button>
            <button name="reset" type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>