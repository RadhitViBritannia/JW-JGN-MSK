<?php
include "koneksi.php";
$nik=$_REQUEST['nik'];
$nama_lengkap=$_REQUEST['nama_lengkap'];

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("INSERT INTO `tbakun` VALUES ('$nik','$nama_lengkap')");
$data = $query->fetch();

    header("Location:login.php");
?>