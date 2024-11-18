<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Universitas</title>
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
        <h2 class="title">Tambah Data Universitas</h2>
        <form method="post" action="proses_simpan.php">
            <div class="form-container">
                <div class="form-group">
                    <label for="nama_universitas">Nama Universitas</label>
                    <input type="text" id="nama_universitas" name="nama_universitas" placeholder="Nama Universitas" required>
                </div>
                <div class="form-group">
                    <label for="akreditasi">Akreditasi</label>
                    <select id="akreditasi" name="akreditasi" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat Universitas" required>
                </div>
                <div class="form-group">
                    <label for="tahun_berdiri">Tahun Berdiri</label>
                    <input type="date" id="tahun_berdiri" name="tahun_berdiri" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kampus">Jenis Kampus</label>
                    <select id="jenis_kampus" name="jenis_kampus" required>
                        <option value="Negeri">Negeri</option>
                        <option value="Swasta">Swasta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" placeholder="Website Universitas" required>
                </div>
                <div class="form-group submit-btn">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> KELOMPOK SEKIAN | UAS SIG2</p>
    </footer>
</body>

</html>
