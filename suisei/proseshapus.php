<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(!empty($id)){
        $sql="DELETE FROM tbisidata WHERE tanggal='$id'";
          
        if($mysqli->query($sql) === false) { // Jika gagal meng-hapus data tampilkan pesan dibawah 'Perintah SQL Salah'
          trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
        } else { // Jika berhasil alihkan ke halaman catatan_perjalanan.php
          header('location:catatan_perjalanan.php');
        }
    }
}