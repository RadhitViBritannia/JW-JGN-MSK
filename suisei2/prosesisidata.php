<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$koneksi = new PDO('mysql:host=localhost;dbname=siswa','root','');
$query = $koneksi->query("INSERT INTO tbdatasiswa VALUES ('$id','$nis','$nama','$kelas')");
$data = $query->fetch();

header("location:isidata.php");

}
?>