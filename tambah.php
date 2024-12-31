<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekod</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #2c2c2c;
            color: white;
            padding: 15px;
            text-align: left;
        }

        .header a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #4CAF50;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 10px;
        }

        .header a:hover {
            background-color: #45a049;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .form-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 300px;
        }

        .form-card h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            color: #333;
        }

        .form-card label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-card input,
        .form-card select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-card .button-group {
            display: flex;
            justify-content: space-between;
        }

        .form-card button {
            padding: 10px;
            width: 48%;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-card button:hover {
            background-color: #45a049;
        }

        .form-card .btn-clear {
            background-color: #e74c3c;
        }

        .form-card .btn-clear:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="index.php">Back</a>
    </div>

    <div class="container">
        <div class="form-card">
            <h2>ADD MAKLUMAT</h2>
            <form method="POST" action="simpan.php">
                <label for="nama_pekerja">Nama Pekerja</label>
                <input type="text" id="nama_pekerja" name="nama_pekerja" required>

                <label for="no_kp">No KP</label>
                <input type="text" id="no_kp" name="no_kp" required>

                <label for="jantina">Jantina</label>
                <select id="jantina" name="jantina" required>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label for="no_hp">No HP</label>
                <input type="text" id="no_hp" name="no_hp" required>

                <div class="button-group">
                    <button type="submit">Tambah Rekod</button>
                    <button type="reset" class="btn-clear">Clear</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
