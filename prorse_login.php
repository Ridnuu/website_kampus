<?php
session_start();

// Data login yang valid
$valid_username = 'admin';
$valid_password = 'admin1';

// Ambil data dari form login
$username = isset($_POST['user_id']) ? $_POST['user_id'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validasi login
if ($username === $valid_username && $password === $valid_password) {
    // Login berhasil, arahkan ke index.php
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit;
} else {
    // Login gagal, simpan pesan error ke session
    $_SESSION['loginError'] = 'ID atau Password salah!';
    header('Location: login.php');
    exit;
}
?>
