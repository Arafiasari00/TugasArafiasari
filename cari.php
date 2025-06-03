<?php
include "koneksi.php";

if (isset($_POST['keyword'])) {
    $keyword = mysqli_real_escape_string($connection, $_POST['keyword']);
    $query = "SELECT * FROM data_mahasiswa WHERE nama_Mahasiswa LIKE '%$keyword%'";
    $hasil = mysqli_query($connection, $query);

    echo "<h2>Hasil Pencarian untuk: '$keyword'</h2>";

    if (mysqli_num_rows($hasil) > 0) {
        while ($data = mysqli_fetch_array($hasil)) {
            echo "Nama Mahasiswa: " . $data['nama_Mahasiswa'] . "<br>";
            echo "Jurusan: " . $data['Jurusan'] . "<br>";
            echo "Semester: " . $data['Semester'] . "<br><br>";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>
