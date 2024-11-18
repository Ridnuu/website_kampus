-- Membuat database jika belum ada
CREATE DATABASE IF NOT EXISTS uassig2;

-- Gunakan database
USE uassig2;

-- Membuat tabel kampus jika belum ada
CREATE TABLE IF NOT EXISTS kampus (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Primary Key Auto Increment
    nama_universitas VARCHAR(255) NOT NULL, -- Nama Universitas (Wajib diisi)
    akreditasi CHAR(1) NOT NULL CHECK (akreditasi IN ('A', 'B', 'C')), -- Akreditasi harus salah satu dari A, B, C
    alamat TEXT NOT NULL, -- Alamat (Wajib diisi)
    tahun_berdiri YEAR NOT NULL CHECK (tahun_berdiri >= 1900 AND tahun_berdiri <= YEAR(CURDATE())), -- Tahun Berdiri valid
    jenis_kampus ENUM('Negeri', 'Swasta') NOT NULL, -- Jenis Kampus hanya Negeri atau Swasta
    website VARCHAR(255) DEFAULT NULL -- URL Website, opsional
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Menambahkan data ke tabel kampus
INSERT INTO kampus (nama_universitas, akreditasi, alamat, tahun_berdiri, jenis_kampus, website) 
VALUES
('Universitas Pekanbaru', 'A', 'Jl. Soekarno Hatta No.10, Pekanbaru', 1980, 'Negeri', 'http://www.univpekanbaru.ac.id'),
('Institut Teknologi Riau', 'B', 'Jl. Arifin Ahmad No.25, Pekanbaru', 1995, 'Swasta', 'http://www.it-riau.ac.id'),
('Politeknik Negeri Pekanbaru', 'A', 'Jl. Diponegoro No.5, Pekanbaru', 1988, 'Negeri', 'http://www.politeknikpekanbaru.ac.id'),
('Universitas Muhammadiyah Riau', 'B', 'Jl. Kaharuddin Nasution No.11, Pekanbaru', 2000, 'Swasta', 'http://www.umri.ac.id'),
('Sekolah Tinggi Ilmu Ekonomi Pekanbaru', 'C', 'Jl. Sudirman No.20, Pekanbaru', 2010, 'Swasta', NULL);

-- Menampilkan semua data untuk memastikan berhasil dimasukkan
SELECT * FROM kampus;
