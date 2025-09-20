<?php ob_start(); ?>
<div class="container">
    <div class="header-actions">
        <h1><i class="fas fa-edit"></i> Edit Data Mahasiswa</h1>
    </div>
    <form action="index.php?action=edit" method="POST" class="form-container">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="<?= htmlspecialchars($data['nim']) ?>" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
include "views/layout.php";
?>
