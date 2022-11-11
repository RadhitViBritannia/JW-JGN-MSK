<?php
include "koneksi.php";

    $id=$_GET['id'];
    $tanggal=$_POST['tanggal'];
    $waktu=$_POST['waktu'];
    $lokasi=$_POST['lokasi'];
    $suhu_tubuh=$_POST['suhu_tubuh'];

    $db = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
    $query = $koneksi->query("UPDATE tbisidata SET tanggal='$tanggal', waktu='$waktu', lokasi='$lokasi', suhu_tubuh='$suhu_tubuh' WHERE id='$id'");
    $data = $query->fetch();

    header("Location:index.php?page=catatan_perjalanan");