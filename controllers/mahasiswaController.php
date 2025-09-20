<?php
require_once "models/mahasiswa.php";

class MahasiswaController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $mahasiswa = new Mahasiswa($this->db);
        $data = $mahasiswa->getAll();
        include "views/mahasiswa/index.php";
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mahasiswa = new Mahasiswa($this->db);
            $mahasiswa->nama = $_POST['nama'];
            $mahasiswa->nim = $_POST['nim'];
            $mahasiswa->jurusan = $_POST['jurusan'];
            $mahasiswa->create();
            header("Location: index.php");
            exit();
        }
        include "views/mahasiswa/create.php";
    }

    public function edit() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mahasiswa = new Mahasiswa($this->db);
            $mahasiswa->id = $_POST['id'];
            $mahasiswa->nama = $_POST['nama'];
            $mahasiswa->nim = $_POST['nim'];
            $mahasiswa->jurusan = $_POST['jurusan'];
            $mahasiswa->update();
            header("Location: index.php");
            exit();
        } else {
            $mahasiswa = new Mahasiswa($this->db);
            $mahasiswa->id = $_GET['id'];
            $data = $mahasiswa->getById();
            include "views/mahasiswa/edit.php";
        }
    }

    public function delete() {
        $mahasiswa = new Mahasiswa($this->db);
        $mahasiswa->id = $_GET['id'];
        $mahasiswa->delete();
        header("Location: index.php");
        exit();
    }
}