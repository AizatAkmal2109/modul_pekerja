<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $no_hp = $_POST['no_hp'];

    // Masukkan data ke dalam table `modul_pekerja`
    $sql = "INSERT INTO modul_pekerja (nama_pekerja, no_kp, jantina, no_hp) 
            VALUES ('$nama_pekerja', '$no_kp', '$jantina', '$no_hp')";

    if (mysqli_query($conn, $sql)) {
        header("Location: senarai.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
