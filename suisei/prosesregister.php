<?php
session_start();
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("INSERT * INTO `tbakun` WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");

if($query){
    header("Location:login.php");
}