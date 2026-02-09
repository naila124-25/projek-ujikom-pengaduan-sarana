<?php
include "Aspirasi.php";
$db = new Aspirasi();


if(isset($_GET['hapus'])){
    $id_hapus = $_GET['hapus'];
    if($db->hapusAspirasi($id_hapus)){
        echo "<script>alert('Data Berhasil Dihapus!'); window.location='data_pengaduan.php';</script>";
    }
}


if(isset($_GET['status']) && isset($_GET['id'])){
    $id_update = $_GET['id'];
    $status_baru = $_GET['status'];
    if($db->updateStatus($id_update, $status_baru)){
        echo "<script>alert('Status Diperbarui!'); window.location='data_pengaduan.php';</script>";
    }
}

$data = $db->tampilkanSemua();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Aspirasi</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; margin: 40px; }
        .container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #34495e; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #ddd; }
        .status-badge { font-weight: bold; padding: 4px 8px; border-radius: 4px; background: #eee; }
        .btn-action { text-decoration: none; font-size: 12px; font-weight: bold; }
        .btn-kembali { display: inline-block; margin-bottom: 20px; text-decoration: none; color: #666; font-size: 14px; }
    </style>
</head>
<body>

<div class="container">
    <a href="index.php" class="btn-kembali">← Kembali ke Menu Utama</a>
    <h2>Daftar Aspirasi Masuk</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Laporan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data as $row): ?>
        <tr>
            <td><?php echo $row['id_aspirasi']; ?></td>
            <td><?php echo $row['ket_kategori']; ?></td>
            <td><?php echo $row['feedback']; ?></td>
            <td><span class="status-badge"><?php echo $row['status']; ?></span></td>
            <td>
                <a href="?hapus=<?php echo $row['id_aspirasi']; ?>" 
                   style="color: #e74c3c;" class="btn-action" 
                   onclick="return confirm('Yakin ingin menghapus?')">HAPUS</a> 
                | 
                <a href="?id=<?php echo $row['id_aspirasi']; ?>&status=Proses" 
                   style="color: #3498db;" class="btn-action">SET PROSES</a>
                | 
                <a href="?id=<?php echo $row['id_aspirasi']; ?>&status=Selesai" 
                   style="color: #27ae60;" class="btn-action">SET SELESAI</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>