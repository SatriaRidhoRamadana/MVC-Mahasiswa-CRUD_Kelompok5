<?php ob_start(); ?>
<div class="container">
    <div class="header-actions">
        <h1><i class="fas fa-plus-circle"></i> Tambah Data Mahasiswa</h1>
    </div>
    <form action="index.php?action=tambah" method="POST" class="form-container">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
include "views/layout.php";
?>
