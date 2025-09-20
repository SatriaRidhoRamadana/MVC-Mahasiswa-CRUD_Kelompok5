<?php
class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public $id;
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        // Ambil data dalam bentuk associative array
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (nama, nim, jurusan) VALUES (:nama, :nim, :jurusan)";
        $stmt = $this->conn->prepare($query);

        // Membersihkan data (opsional tapi bagus untuk keamanan)
        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->nim = htmlspecialchars(strip_tags($this->nim));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":jurusan", $this->jurusan);

        return $stmt->execute();
    }

    public function getById() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nama = :nama, nim = :nim, jurusan = :jurusan WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Membersihkan data
        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->nim = htmlspecialchars(strip_tags($this->nim));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}
