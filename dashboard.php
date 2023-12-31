<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <ul>
        <li><a href="input_ruangan.php">Input Data Ruangan</a></li>
        <li><a href="input_matakuliah.php">Input Data Matakuliah</a></li>
        <li><a href="lihat_penjadwalan.php">Lihat Penjadwalan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
