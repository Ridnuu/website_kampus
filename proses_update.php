<?php
// Sertakan file koneksi untuk menghubungkan ke database
include 'koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama_universitas = mysqli_real_escape_string($koneksi, $_POST['nama_universitas']);
    $akreditasi = mysqli_real_escape_string($koneksi, $_POST['akreditasi']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $tahun_berdiri = mysqli_real_escape_string($koneksi, $_POST['tahun_berdiri']);
    $jenis_kampus = mysqli_real_escape_string($koneksi, $_POST['jenis_kampus']);
    $website = mysqli_real_escape_string($koneksi, $_POST['website']);

    // Validasi input
    if (empty($nama_universitas) || empty($akreditasi) || empty($alamat) || empty($tahun_berdiri) || empty($jenis_kampus)) {
        echo "<script>
            alert('Semua field wajib diisi!');
            window.location.href = 'form_edit.php?id=$id'; // Arahkan ke halaman form edit
        </script>";
        exit;
    }

    // Query untuk memperbarui data di tabel
    $query = "UPDATE kampus 
              SET nama_universitas = '$nama_universitas',
                  akreditasi = '$akreditasi',
                  alamat = '$alamat',
                  tahun_berdiri = '$tahun_berdiri',
                  jenis_kampus = '$jenis_kampus',
                  website = '$website'
              WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, arahkan kembali ke halaman utama (index.php)
        echo "<script>
            alert('Data berhasil diperbarui');
            window.location.href = 'index.php'; // Halaman utama dengan data yang diperbarui
        </script>";
    } else {
        echo "<script>
            alert('Gagal memperbarui data: " . mysqli_error($koneksi) . "');
            window.location.href = 'form_edit.php?id=$id'; // Arahkan kembali ke halaman form edit jika gagal
        </script>";
    }
} else {
    // Jika akses langsung tanpa submit form
    echo "<script>
        alert('Akses ditolak!');
        window.location.href = 'index.php'; // Halaman utama jika akses langsung
    </script>";
}
?>
