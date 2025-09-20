<?php
ob_start();
?>
<div class="container">
    <div class="header-actions">
        <h1><i class="fas fa-graduation-cap"></i> Data Mahasiswa</h1>
        <a href="index.php?action=tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Mahasiswa</a>
    </div>
    
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php $no = 1; foreach ($data as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['nim']) ?></td>
                        <td><?= htmlspecialchars($row['jurusan']) ?></td>
                        <td class="action-buttons">
                            <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                            <a href="index.php?action=delete&id=<?= $row['id'] ?>" 
                               class="btn btn-delete" 
                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="no-data">Belum ada data mahasiswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();
include "views/layout.php";
