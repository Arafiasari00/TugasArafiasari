<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<?php 
include "koneksi.php";

// Tampilkan semua data jika belum ada pencarian
if (!isset($_POST['keyword'])) {
    $hasil = mysqli_query($connection, "SELECT * FROM data_mahasiswa");

    echo "<h2>Data Mahasiswa</h2>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "Nama Mahasiswa: " . $data['nama_Mahasiswa'] . "<br>";
        echo "Jurusan: " . $data['Jurusan'] . "<br>";
        echo "Semester: " . $data['Semester'] . "<br><br>";
    }
} else {
    // Jika ada keyword pencarian, panggil cari.php
    include "cari.php";
}
?>

<h2>Cari Data Mahasiswa</h2>
<form method="post" action="">
    <label for="keyword">Nama Mahasiswa:</label><br>
    <input type="text" id="keyword" name="keyword" required>
    <input type="submit" value="Cari Data">
    <input type="reset" value="Reset" onclick="window.location='index.php'">
</form>

<h2>Tambah Mahasiswa</h2>
<form action="tambah.php" method="post">
    <label for="nama_Mahasiswa">Nama Mahasiswa:</label><br>
    <input type="text" id="nama_Mahasiswa" name="nama_mahasiswa" required><br>

    <label for="Jurusan">Jurusan:</label><br>
    <input type="text" id="Jurusan" name="program_study" required><br>

    <label for="Semester">Semester:</label><br>
    <input type="text" id="Semester" name="semester_mahasiswa" required><br><br>

    <input type="submit" value="Tambah Data">
    <input type="reset" value="Reset">
</form>

</body>
</html>
