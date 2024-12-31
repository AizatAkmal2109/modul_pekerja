<?php
// Sambung ke pangkalan data
include 'config.php';

// Semak jika ID telah dihantar melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan ID adalah nombor yang sah
    if (is_numeric($id)) {
        // Padam rekod berdasarkan ID
        $sql = "DELETE FROM modul_pekerja WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "Rekod berjaya dipadam!";
            header("Location: senarai.php"); // Arahkan semula ke senarai pekerja
            exit;
        } else {
            echo "Ralat: " . mysqli_error($conn);
        }
    } else {
        echo "ID tidak sah.";
    }
} else {
    echo "ID tidak disediakan.";
}
?>
