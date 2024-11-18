<?php
// Sertakan file koneksi
include 'koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form
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
            window.location.href = 'form_tambah.php'; // Ganti dengan halaman form Anda
        </script>";
        exit;
    }

    // Query untuk menyimpan data ke tabel
    $query = "INSERT INTO kampus (nama_universitas, akreditasi, alamat, tahun_berdiri, jenis_kampus, website) 
              VALUES ('$nama_universitas', '$akreditasi', '$alamat', '$tahun_berdiri', '$jenis_kampus', '$website')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
            alert('Data berhasil disimpan');
            window.location.href = 'index.php'; // Ganti dengan halaman utama Anda
        </script>";
    } else {
        echo "<script>
            alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');
            window.location.href = 'form_tambah.php'; // Ganti dengan halaman form Anda
        </script>";
    }
} else {
    // Jika akses langsung tanpa submit form
    echo "<script>
        alert('Akses ditolak!');
        window.location.href = 'index.php'; // Ganti dengan halaman utama Anda
    </script>";
}
?>
