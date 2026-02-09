<!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        form { max-width: 400px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        select, textarea, button { width: 100%; padding: 10px; margin-top: 5px; }
        button { background: #333; color: #fff; border: none; margin-top: 20px; cursor: pointer; }
        .back { display: inline-block; margin-top: 10px; color: #666; text-decoration: none; font-size: 13px; }
    </style>
</head>
<body>

    <h2>Kirim Aspirasi Baru</h2>
    <form action="" method="POST">
        <label>Pilih Kategori</label>
        <select name="id_kategori">
            <option value="1">Sarana Prasarana</option>
            <option value="2">Kebersihan</option>
        </select>

        <label>Status</label>
        <select name="status">
            <option value="menunggu">Menunggu</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
        </select>

        <label>Apa yang ingin dilaporkan?</label>
        <textarea name="feedback" rows="5" required></textarea>

        <button type="submit" name="simpan">Kirim Sekarang</button>
        <a href="data_pengaduan.php" class="back">← Kembali</a>
    </form>

<?php
include "Aspirasi.php";
$db = new Aspirasi();
if(isset($_POST['simpan'])){
    if($db->tambahAspirasi($_POST['id_kategori'], $_POST['status'], $_POST['feedback'])){
        echo "<script>alert('Terkirim!'); window.location='data_pengaduan.php';</script>";
    }
}
?>
</body>
</html>