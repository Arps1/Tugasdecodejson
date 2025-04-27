<?php

// Membuat array mahasiswa FTIK
$mahasiswa = array(
    array("nama" => "Andi", "nim" => "IF001", "prodi" => "Teknik Informatika", "angkatan" => 2022),
    array("nama" => "Budi", "nim" => "IF002", "prodi" => "Sistem Informasi", "angkatan" => 2023),
    array("nama" => "Citra", "nim" => "IF003", "prodi" => "Ilmu Komunikasi", "angkatan" => 2022),
    array("nama" => "Dewi", "nim" => "IF004", "prodi" => "Teknik Informatika", "angkatan" => 2024)
);

// Loop tiap elemen dan encode satu per satu lalu tampilkan dengan <br>
foreach ($mahasiswa as $mhs) {
    echo json_encode($mhs, JSON_PRETTY_PRINT);
    echo "<br><br>"; // Jeda 2 baris
}

?>
