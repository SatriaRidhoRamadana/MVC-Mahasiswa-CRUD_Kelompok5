-- Database Schema untuk CRUD Mahasiswa
-- Developer A - Backend

CREATE DATABASE IF NOT EXISTS CRUD_kampus;
USE CRUD_kampus;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Sample data untuk testing
INSERT INTO mahasiswa (nama, nim, jurusan) VALUES
('John Doe', '1234567890', 'Teknik Informatika'),
('Jane Smith', '0987654321', 'Sistem Informasi'),
('Bob Johnson', '1122334455', 'Teknik Komputer');
