<?php
if(!isset($_SESSION['nik'])){
    }
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

<div class="alert shadow alert-primary">     
    
    Selamat Datang <?php echo $nama_lengkap = @$_SESSION['nama_lengkap'];?> di aplikasi peduli diri

</div>