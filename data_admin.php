<?php
include "Aspirasi.php";
$db = new Aspirasi();
$dataAdmin = $db->tampilkanAdmin();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { text-align: left; padding: 12px; border-bottom: 2px solid #333; background-color: #f2f2f2; }
        td { padding: 12px; border-bottom: 1px solid #eee; }
        .btn-back { text-decoration: none; color: blue; font-size: 14px; }
    </style>
</head>
<body>

    <h2>Daftar Admin Sistem</h2>
    <a href="data_pengaduan.php" class="btn-back">← Kembali ke Pengaduan</a>

    <table>
        <tr>
            <th>ID Admin</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
        </tr>
        <?php foreach($dataAdmin as $row): ?>
        <tr>
            <td><?php echo $row['id_admin']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['nama_admin']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>