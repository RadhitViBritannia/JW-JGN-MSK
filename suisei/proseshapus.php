<?php
include('koneksi.php');

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=pedulidiri", 'root', '');
$query = $koneksi->query("DELETE FROM tbisidata WHERE id='$id'");

if($query){
    header("location:index.php?page=catatan_perjalanan");
}
?>