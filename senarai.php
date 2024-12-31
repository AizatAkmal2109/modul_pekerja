<?php
include 'config.php';

$sql = "SELECT * FROM modul_pekerja";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Senarai Pekerja</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Gaya untuk header */
        header {
            background-color: #bdc3c7; /* Kelabu */
            padding: 20px;
            text-align: left; /* Ubah kepada kiri */
            display: flex;
            justify-content: flex-start; /* Elemen-elemen di kiri */
            align-items: center;
        }

        header h1 {
            margin: 0;
            color: #333;
            font-size: 18px; /* Saiz lebih kecil */
            margin-right: 20px; /* Tambah jarak antara teks dan butang */
        }

        /* Gaya untuk butang Add */
        .btn-add {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-add:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .table-container {
            margin: 20px auto;
            width: 90%; /* Luaskan sedikit container */
            max-width: 900px; /* Maksimum lebar container */
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table td {
            color: #333;
        }

        .btn {
            text-decoration: none;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* Flexbox untuk butang Update dan Delete */
        .button-group {
            display: flex;
            gap: 10px; /* Menambah jarak antara butang */
        }
    </style>
</head>
<body>

<!-- Header dengan teks dan butang Add -->
<header>
    <h1>ANISHOLDING.SDN.BHD.</h1>
    <a href="tambah.php" class="btn-add">Add</a>
</header>

<h2>Senarai Pekerja</h2>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pekerja</th>
                <th>No KP</th>
                <th>Jantina</th>
                <th>No HP</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
        
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama_pekerja']; ?></td>
                <td><?php echo $row['no_kp']; ?></td>
                <td><?php echo $row['jantina']; ?></td>
                <td><?php echo $row['no_hp']; ?></td>
                <td>
                    <!-- Menambahkan div untuk mengatur butang Update dan Delete secara flex -->
                    <div class="button-group">
                        <a href="kemaskini.php?id=<?php echo $row['id']; ?>" class="btn">Update</a>
                        <a href="#" class="btn btn-delete" onclick="confirmDelete('<?php echo $row['id']; ?>')">Delete</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Adakah anda pasti untuk menghapus rekod ini?',
            text: "Rekod ini akan dipadam secara kekal.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'YES DELETE',
            cancelButtonText: 'CANCEL'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'padam.php?id=' + id;
            }
        });
    }
</script>

</body>
</html>
