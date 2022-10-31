<?php

$id=$_GET['id'];

$d = new PDO('mysql:host=localhost;dbname=pedulidiri','root',''); 
$query = $d->query("DELETE FROM `tbisidata` WHERE `id`='$id' ");

if($query){
    header('location:catatan_perjalanan.php');}