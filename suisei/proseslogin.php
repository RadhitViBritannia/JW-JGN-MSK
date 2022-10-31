<?php
session_start();
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

$koneksi = new PDO('mysql:host=localhost;dbname=pedulidiri;','root','');
$query = $koneksi->query("SELECT * FROM `tbakun` WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");
$data = $query->fetch();
if ($query){
    $_SESSION["nik"] = $_REQUEST['nik'];
    $_SESSION["nama_lengkap"] = $_REQUEST['nama_lengkap'];
    header("Location:index.php?page=home");
    
if(mysqli_connect($query)){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}

// jika di tekan tombol pengguna baru
if (isset($_POST['pengguna_baru'])) {

}
// jika di tekan tombol masuk
elseif(isset($_POST['masuk'])) {
    echo"masuk";

}else{
    header("Location:login.php?msg={$msg}");
}
}
?>