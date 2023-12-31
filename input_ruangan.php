<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_ruangan = $_POST['nama_ruangan'];

    $query = "INSERT INTO ruangan (nama_ruangan) VALUES ('$nama_ruangan')";
    $conn->query($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Ruangan</title>
</head>
<body>
    <h2>Input Data Ruangan</h2>
    <form action="" method="post">
        <label>Nama Ruangan:</label>
        <input type="text" name="nama_ruangan" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
