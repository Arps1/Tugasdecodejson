<?php

// Variabel JSON mahasiswa fakultas FEB
$mahasiswa_json = '[
    {"nama": "Eka", "nim": "FE001", "prodi": "Akuntansi", "angkatan": 2022},
    {"nama": "Fajar", "nim": "FE002", "prodi": "Manajemen", "angkatan": 2023},
    {"nama": "Gita", "nim": "FE003", "prodi": "Ekonomi", "angkatan": 2022}
]';

// Decode JSON ke PHP object
$mahasiswa_obj = json_decode($mahasiswa_json);

// Decode JSON ke PHP array asosiatif
$mahasiswa_arr = json_decode($mahasiswa_json, true);

// Mengakses nilai dari PHP object
echo "Akses dari PHP Object:<br>";
echo "Nama mahasiswa pertama: " . $mahasiswa_obj[0]->nama . "<br>";
echo "Prodi mahasiswa kedua: " . $mahasiswa_obj[1]->prodi . "<br>";
echo "Angkatan mahasiswa ketiga: " . $mahasiswa_obj[2]->angkatan . "<br><br>";

// Mengakses nilai dari PHP array asosiatif
echo "Akses dari PHP Array:<br>";
echo "Nama mahasiswa pertama: " . $mahasiswa_arr[0]['nama'] . "<br>";
echo "Prodi mahasiswa kedua: " . $mahasiswa_arr[1]['prodi'] . "<br>";
echo "Angkatan mahasiswa ketiga: " . $mahasiswa_arr[2]['angkatan'] . "<br>";

?>
