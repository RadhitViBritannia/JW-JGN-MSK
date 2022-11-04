<?php
include('koneksi.php');

$nik = $_GET['nik'];

$koneksi = new PDO("mysql:host=localhost;dbname=pedulidiri", 'root', '');
$query = $koneksi->query("DELETE FROM tbisidata WHERE nik='$nik'");

if($query){
    header("location:catatan_perjalanan.php");
}
?>