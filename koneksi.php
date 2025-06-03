<?php
$connection = mysqli_connect("localhost", "root", "", "nama_database_kamu");
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
