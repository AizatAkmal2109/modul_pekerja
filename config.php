<?php
$host = "localhost"; // Hos pelayan MySQL
$user = "root";      // Nama pengguna MySQL
$password = "";      // Kata laluan MySQL (kosong jika default di XAMPP)
$database = "modul_pekerja"; // Nama database anda

// Sambung ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Semak jika sambungan berjaya
if (!$conn) {
    die("Sambungan gagal: " . mysqli_connect_error());
}
?>
