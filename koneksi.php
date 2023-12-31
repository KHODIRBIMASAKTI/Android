<?php
// Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database_name = "UPB";

$koneksi = mysqli_connect($server,$username,$password,$database_name);

// Periksa koneksi
if (!$koneksi) {
    die ("koneksi berhasil");
} 
?>
