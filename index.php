<?php include 'koneksi.php'; // Mengimpor koneksi.php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <!-- Header Baru -->
    <header class="main-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <img src="logo.png" alt="UAS SIG 2" />
            </div>
            <!-- Menu Navigasi -->
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="#peta">Peta</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#kontak">Kontak</a></li> <!-- Mengarahkan ke bagian kontak -->
                </ul>
            </nav>
        </div>
    </header>

    <div id="wrapper">
        <!-- Bagian Tabel Data Universitas -->
        <h2 style="text-align:center; color:#0A2942;">Data Universitas Yang Ada di Pekanbaru</h2>
        <table>
            <tr>
                <th>NO</th>
                <th>Nama Universitas</th>
                <th>Akreditasi</th>
                <th>Alamat</th>
                <th>Tahun Berdiri</th>
                <th>Jenis Kampus</th>
                <th>Website</th>
                <th>Aksi</th> <!-- Tambahkan kolom untuk tombol aksi -->
            </tr>

            <?php
            // Mengambil data dari tabel kampus
            $query = "SELECT * FROM kampus";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['nama_universitas'] . "</td>";
                    echo "<td>" . $row['akreditasi'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['tahun_berdiri'] . "</td>";
                    echo "<td>" . $row['jenis_kampus'] . "</td>";
                    echo "<td><a href='" . $row['website'] . "' target='_blank'>" . $row['website'] . "</a></td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn-edit'>Edit</a>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn-hapus'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
            }
            ?>
        </table>

        <!-- Tombol Tambah Data -->
        <div style="text-align:right; margin-top:20px;">
            <a href="tambah_data.php" class="btn-tambah">Tambah Data</a>
        </div>
    </div>

    <!-- Bagian About -->
    <div id="about" style="padding: 50px; background-color: #ffc8571a; border-radius: 8px; margin: 30px auto; max-width: 800px;">
        <h2 style="text-align: center; color: #0A2942;">Tentang Universitas dan Tujuan Website</h2>
        <p style="text-align: justify; line-height: 1.8;">
            Website ini dibuat dengan tujuan memberikan informasi lengkap mengenai universitas-universitas yang ada di Pekanbaru. 
            Pengguna dapat mengetahui berbagai detail seperti nama universitas, akreditasi, alamat, tahun berdiri, jenis kampus, hingga website resmi. 
            Selain itu, website ini juga menyediakan fitur untuk menambah, mengedit, dan menghapus data universitas, sehingga mempermudah pengelolaan data.
        </p>
        <p style="text-align: justify; line-height: 1.8;">
            Kami berharap website ini dapat menjadi referensi yang bermanfaat bagi calon mahasiswa, peneliti, maupun pihak lain yang memerlukan informasi terkait 
            universitas di Pekanbaru. Dengan tampilan yang sederhana dan mudah digunakan, pengguna dapat menjelajahi data dengan efisien dan mendapatkan wawasan lebih luas.
        </p>
    </div>

    <!-- Bagian Kontak -->
    <div id="kontak" style="padding: 50px; background-color: #f3f3f3; border-radius: 8px; margin: 30px auto; max-width: 800px;">
        <h2 style="text-align: center; color: #0A2942;">Kontak Kami</h2>
        <p style="text-align: justify; line-height: 1.8;">
            Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang informasi yang disajikan di website ini, silakan hubungi kami melalui:
        </p>
        <ul style="list-style: none; padding: 0; margin-top: 20px;">
            <li><b>Email:</b> info@universitaspekanbaru.com</li>
            <li><b>Telepon:</b> +62 812 3456 7890</li>
            <li><b>Alamat:</b> Jalan Sudirman No. 123, Pekanbaru, Riau</li>
        </ul>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> KELOMPOK SEKIAN | UAS SIG2</p>
    </footer>
</body>
</html>
