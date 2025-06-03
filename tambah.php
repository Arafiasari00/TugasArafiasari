<?php
include "koneksi.php";

$nama = $_POST['nama_mahasiswa'];
$jurusan = $_POST['program_study'];
$semester = $_POST['semester_mahasiswa'];

$query = "INSERT INTO data_mahasiswa (nama_Mahasiswa, Jurusan, Semester) 
          VALUES ('$nama', '$jurusan', '$semester')";

if (mysqli_query($connection, $query)) {
    echo "Data berhasil ditambahkan.<br>";
    echo "<a href='index.php'>Kembali ke halaman utama</a>";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($connection);
}
?>
