<?php
session_start();
include "aspirasi.php";
$app = new Aspirasi();


if ($_SESSION['level'] != 'admin') {
    header("location:dashboard.php");
    exit();
}

 
$id = $_GET['id'];

$query = "SELECT * FROM aspirasi WHERE id_aspirasi = '$id'";
$data = $app->conn->query($query)->fetch_assoc();

if (isset($_POST['update'])) {
    $status_baru = $_POST['status'];
    $app->updateStatus($id, $status_baru);
    echo "<script>alert('Status berhasil diperbarui!'); window.location='dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Status Aspirasi</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 20px; }
        .info { background: #f9f9f9; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-size: 14px; border-left: 4px solid #3498db; line-height: 1.6; }
        label { font-weight: bold; color: #34495e; display: block; margin-bottom: 5px; }
        select { width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc; font-size: 16px; }
        .btn-update { width: 100%; background: #3498db; color: white; padding: 12px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; font-size: 16px; transition: 0.3s; }
        .btn-update:hover { background: #2980b9; }
        .back-link { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #7f8c8d; font-size: 14px; }
        .back-link:hover { color: #34495e; }
    </style>
</head>
<body>

<div class="card">
    <h2>Update Status</h2>
    
    <div class="info">
        <strong>Isi Aspirasi:</strong><br>
        <?php echo $data['feedback']; ?>
    </div>

    <form method="POST">
        <label for="status">Pilih Status Baru:</label>
        <select name="status" id="status">
            <option value="Menunggu" <?php if($data['status'] == 'Menunggu') echo 'selected'; ?>>Menunggu</option>
            <option value="Proses" <?php if($data['status'] == 'Proses') echo 'selected'; ?>>Proses</option>
            <option value="Selesai" <?php if($data['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
        </select>
        
        <button type="submit" name="update" class="btn-update">Simpan Perubahan</button>
    </form>

    <a href="dashboard.php" class="back-link">← Kembali ke Dashboard</a>
</div>

</body>
</html>