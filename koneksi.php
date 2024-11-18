<?php
// Konfigurasi database
$host = "localhost"; // Host database
$username = "root"; // Username default MySQL di XAMPP
$password = ""; // Password default MySQL di XAMPP (kosong)
$database = "uassig2"; // Nama database yang ingin dihubungkan

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "";
?>
