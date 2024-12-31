<?php
// Sambung ke pangkalan data
include 'config.php';

// Semak jika ID telah dihantar melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Dapatkan data pekerja berdasarkan ID
    $sql = "SELECT * FROM modul_pekerja WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Jika data wujud
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Pekerja tidak ditemui.";
        exit;
    }
} else {
    echo "ID tidak disediakan.";
    exit;
}

// Semak jika borang dihantar untuk kemaskini
if (isset($_POST['update'])) {
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $no_hp = $_POST['no_hp'];

    // Kemaskini data pekerja
    $sql = "UPDATE modul_pekerja SET nama_pekerja = '$nama_pekerja', no_kp = '$no_kp', jantina = '$jantina', no_hp = '$no_hp' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Kemaskini berjaya!";
        header("Location: senarai.php"); // Arahkan semula ke senarai pekerja
        exit;
    } else {
        echo "Ralat: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KEMASKINI MAKLUMAT <?php echo $row['nama_pekerja']; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Gaya untuk header */
        .header {
            background-color: #2c3e50;
            padding: 20px;
            text-align: left;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .header h1 {
            color: white;
            font-size: 18px;
            margin-right: 20px;
        }

        .header a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 14px;
        }

        .header a:hover {
            background-color: #45a049;
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(68, 67, 67, 0.2);
            border-radius: 8px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-container input[type="text"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<!-- Header dengan butang Back -->



<div class="form-container">
    <h2>UPDATE MAKLUMAT <?php echo $row['nama_pekerja']; ?></h2>
    <form method="POST">
        <label for="no_kp">IC:</label>
        <input type="text" id="no_kp" name="no_kp" value="<?php echo $row['no_kp']; ?>" required>

        <label for="nama_pekerja">NAMA:</label>
        <input type="text" id="nama_pekerja" name="nama_pekerja" value="<?php echo $row['nama_pekerja']; ?>" required>

        <label for="no_hp">HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="<?php echo $row['no_hp']; ?>" required>

        <label for="jantina">JANTINA:</label>
        <select id="jantina" name="jantina" required>
            <option value="Lelaki" <?php echo ($row['jantina'] == 'Lelaki') ? 'selected' : ''; ?>>Lelaki</option>
            <option value="Perempuan" <?php echo ($row['jantina'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
        </select>

        <button type="submit" name="update">Kemaskini</button>
    </form>
</div>

</body>
</html>
