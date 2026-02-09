<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "database_pengaduan_naila";
    public $conn;

    public function __construct() {
    
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }
}
$db_obj = new Database();
$koneksi = $db_obj->conn; 
?>