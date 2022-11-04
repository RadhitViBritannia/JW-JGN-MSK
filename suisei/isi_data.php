<?php

if (isset($_POST['simpan'])){
    $nik_akun=$POST=['nik'];
    $tanggal=$_POST['tanggal'];
    $waktu=$_POST['waktu'];
    $lokasi=$_POST['lokasi'];
    $suhu_tubuh=$_POST['suhu_tubuh'];

    $koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
    $query = $koneksi->query("SELECT * FROM `tbakun` WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");
    $data = $query->fetch();

    $alert="<div class='alert alert-succes mb-4'>Anda berhasil menambah data catatan perjalanan</div>";
    echo "<meta http-equiv='refresh', 'content='2; url=page=isi_data'>";
}

?>
<div class="card shadow">      
<div class="card-header bg-primary text-white">
        FORM ISI DATA CATATAN PERJALANAN
</div class="card-body py-4">
<div class="row justify-content-center">
<div class="col-lg-10 mt-3 mb-4">
    <?php echo @$alert;?>
        <form action="prosesisidata.php" method="POST">
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