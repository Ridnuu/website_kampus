<?php
// Sertakan file koneksi
include 'koneksi.php';

// Periksa apakah parameter id tersedia di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan id
    $query = "DELETE FROM kampus WHERE id = $id";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama
        echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php'; // Ganti dengan halaman utama Anda
        </script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "<script>
            alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');
        </script>";
    }
} else {
    // Jika tidak ada parameter id, kembali ke halaman utama
    echo "<script>
        alert('ID tidak ditemukan');
        window.location.href = 'index.php'; // Ganti dengan halaman utama Anda
    </script>";
}
?>
