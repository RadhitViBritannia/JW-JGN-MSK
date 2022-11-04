<?php

    $nik = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $page=@$_GET['page']; 

    $database = new PDO("mysql:host=localhost;dbname=pedulidiri", 'root', '');
    $query = $database->query("INSERT INTO tbisidata VALUES ('$nik','$tanggal','$waktu','$lokasi','$suhu_tubuh')");

    if($query){
        header("Location:index.php?page=catatan_perjalanan");
}