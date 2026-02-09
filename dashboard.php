<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        .container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .menu { margin-top: 20px; }
        .btn { padding: 10px 20px; background: #2c3e50; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <?php echo $_SESSION['admin']; ?>!</h1>
        <p>Anda berhasil masuk ke sistem pengaduan sekolah.</p>

        <div class="menu">
            <a href="data_pengaduan.php" class="btn">Lihat Pengaduan</a>
            <a href="logout.php" style="color: red; margin-left: 20px;">Keluar (Logout)</a>
        </div>
    </div>
    <a href="data_pengaduan.php" style="padding: 10px; background: blue; color: white; text-decoration: none; border-radius: 5px;">
    Lihat Semua Data Pengaduan
    
</a>
</body>
</html>