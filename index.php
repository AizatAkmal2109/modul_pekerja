<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #2c2c2c;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .nav-bar {
            background-color: #4CAF50;
            padding: 10px 0;
            text-align: center;
        }

        .nav-bar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            font-weight: bold;
        }

        .nav-bar a:hover {
            text-decoration: underline;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .content a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            font-weight: bold;
        }

        .content a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sistem Maklumat Pekerja</h1>
    </div>

    <div class="nav-bar">
        <a href="tambah.php">Tambah Rekod</a>
        <a href="senarai.php">senarai Pekerja</a>
    </div>

    <div class="content">
        <a href="tambah.php">+ Tambah Rekod Pekerja</a>
    </div>
</body>
</html>
