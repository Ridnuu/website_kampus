<?php
// Sertakan file koneksi untuk mendapatkan data universitas
include 'koneksi.php';

// Periksa apakah ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil data universitas berdasarkan ID
    $query = "SELECT * FROM kampus WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Universitas</title>
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
                    <li><a href="profil.php">Peta</a></li>
                    <li><a href="data.php">About</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="wrapper">
        <h2 class="title">Edit Data Universitas</h2>
        <form method="post" action="proses_update.php">
            <div class="form-container">
                <!-- Form untuk Edit Data -->
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                
                <div class="form-group">
                    <label for="nama_universitas">Nama Universitas</label>
                    <input type="text" id="nama_universitas" name="nama_universitas" value="<?php echo $row['nama_universitas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="akreditasi">Akreditasi</label>
                    <select id="akreditasi" name="akreditasi" required>
                        <option value="A" <?php echo ($row['akreditasi'] == 'A') ? 'selected' : ''; ?>>A</option>
                        <option value="B" <?php echo ($row['akreditasi'] == 'B') ? 'selected' : ''; ?>>B</option>
                        <option value="C" <?php echo ($row['akreditasi'] == 'C') ? 'selected' : ''; ?>>C</option>
                        <option value="D" <?php echo ($row['akreditasi'] == 'D') ? 'selected' : ''; ?>>D</option>
                        <option value="E" <?php echo ($row['akreditasi'] == 'E') ? 'selected' : ''; ?>>E</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tahun_berdiri">Tahun Berdiri</label>
                    <input type="date" id="tahun_berdiri" name="tahun_berdiri" value="<?php echo $row['tahun_berdiri']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kampus">Jenis Kampus</label>
                    <select id="jenis_kampus" name="jenis_kampus" required>
                        <option value="Negeri" <?php echo ($row['jenis_kampus'] == 'Negeri') ? 'selected' : ''; ?>>Negeri</option>
                        <option value="Swasta" <?php echo ($row['jenis_kampus'] == 'Swasta') ? 'selected' : ''; ?>>Swasta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" value="<?php echo $row['website']; ?>" required>
                </div>
                <div class="form-group submit-btn">
                    <input type="submit" name="submit" value="Perbarui Data">
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> KELOMPOK SEKIAN | UAS SIG2</p>
    </footer>
</body>

</html>
