<?php
require "config/database.php";

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "Koneksi Ke Database Berhasil!";
} else {
    echo "Gagal Koneksi Ke Database!";
}