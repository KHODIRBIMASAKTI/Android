<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_dosen = $_POST['nama_dosen'];
    $matakuliah = $_POST['matakuliah'];
    $waktu_jadwal = $_POST['waktu_jadwal'];

    $query = "INSERT INTO matakuliah_dosen (nama_dosen, matakuliah, waktu_jadwal) VALUES ('$nama_dosen', '$matakuliah', '$waktu_jadwal')";
    $conn->query($query);

    header("Location: form_penjadwalan.php");
}
?>
