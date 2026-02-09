<?php
include_once 'koneksi.php';

class Aspirasi extends Database {
    
    
    public function tampilkanSemua() {
        $sql = "SELECT aspirasi.*, kategori.ket_kategori 
                FROM aspirasi 
                JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori 
                ORDER BY aspirasi.id_aspirasi DESC";
        $result = $this->conn->query($sql);
        return $result;
    }

    
    public function tambahAspirasi($id_kategori, $status, $feedback) {
        $sql = "INSERT INTO aspirasi (id_kategori, status, feedback) 
                VALUES ('$id_kategori', '$status', '$feedback')";
        return $this->conn->query($sql);
    }

    
    public function hapusAspirasi($id) {
        $sql = "DELETE FROM aspirasi WHERE id_aspirasi = '$id'";
        return $this->conn->query($sql);
    }

    
    public function updateStatus($id, $status) {
        $sql = "UPDATE aspirasi SET status = '$status' WHERE id_aspirasi = '$id'";
        return $this->conn->query($sql);
    }
}
?>