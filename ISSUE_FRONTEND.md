## Frontend Development - Developer B

### Status: 🚀 READY TO START

### Backend sudah siap untuk integrasi:
- ✅ Database schema: `database_schema.sql`
- ✅ Controller methods: `MahasiswaController.php`
- ✅ Model methods: `Mahasiswa.php`
- ✅ Routing: `index.php`

### Integration Points untuk Developer B:
1. **Form actions** should point to:
   - Tambah: `index.php?action=tambah`
   - Edit: `index.php?action=edit&id=X`
   - Delete: `index.php?action=delete&id=X`

2. **Data structure** for display:
   - Array `$data` from `getAll()` method
   - Fields: `id`, `nama`, `nim`, `jurusan`

3. **Form fields**:
   - Input: `nama`, `nim`, `jurusan`
   - Hidden field for edit: `id`

### Next Steps:
1. Create views in `views/` folder
2. Style with CSS in `assets/css/`
3. Test integration with backend
4. Create Pull Request when ready

### Branch: `feature/frontend-views`
