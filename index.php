<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aspirasi Sekolah</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2f5; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
            width: 350px;
        }
        h2 { color: #2c3e50; margin-bottom: 20px; }
        .btn {
            display: block;
            padding: 12px;
            margin: 10px 0;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-siswa {
            background-color: #2ecc71; 
            color: white;
        }
        .btn-admin {
            background-color: #34495e; 
            color: white;
        }
        .btn:hover { opacity: 0.8; transform: scale(1.02); }
    </style>
</head>
<body>

    <div class="card">
        <h2>Layanan Pengaduan Sarana</h2>
        <p style="color: #7f8c8d;">Silakan pilih menu untuk melanjutkan</p>
        
        <a href="tambah_pengaduan.php" class="btn btn-siswa">Buat Pengaduan Baru</a>
        <a href="data_pengaduan.php" class="btn btn-admin">Halaman Admin</a>
    </div>

</body>
</html>