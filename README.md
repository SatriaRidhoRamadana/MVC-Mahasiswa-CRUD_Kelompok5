# MVC-Mahasiswa-CRUD_Kelompok5

Program CRUD sederhana untuk data Mahasiswa menggunakan PHP dengan menerapkan Model View Controller (MVC).

## NAMA KELOMPOK 5

1. **SATRIA RIDHO RAMADANA** - 2301020077 (Developer A - Backend)
2. **M. FEBRIAN** - 2301020114 (Developer B - Frontend)
3. **ZHANNY YUZAIRY H.Y.** - 2301020121
4. **AKBAR RAHMAT ARIFIN** - 2301020055
5. **SAPAR HIDAYAT S.** - 2201020003

## Pembagian Tugas

### Developer A (Backend & Core Logic)
- Database dan Models
- Controllers dan Routing
- Business Logic
- API dan Data Processing

**File yang dikerjakan:**
```
config/
├── database.php
models/
├── mahasiswa.php
controllers/
├── mahasiswaController.php
index.php
test_koneksi.php
database_schema.sql
```

### Developer B (Frontend & UI/UX)
- Views dan Templates
- Styling dan Design
- User Interface
- User Experience

**File yang dikerjakan:**
```
views/
├── layout.php
└── mahasiswa/
    ├── index.php
    ├── create.php
    └── edit.php
assets/
└── css/
    └── style.css
```

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/SatriaRidhoRamadana/MVC-Mahasiswa-CRUD_Kelompok5.git
```

2. Letakkan di folder htdocs XAMPP:
```
C:\xampp\htdocs\MVC-Mahasiswa-CRUD_Kelompok5\
```

3. Buat database `CRUD_kampus` di phpMyAdmin

4. Import database schema:
```sql
-- Jalankan script di database_schema.sql
```

5. Akses aplikasi:
```
http://localhost/MVC-Mahasiswa-CRUD_Kelompok5/
```

## Struktur Proyek
```
MVC-Mahasiswa-CRUD_Kelompok5/
├── config/
│   └── database.php
├── models/
│   └── mahasiswa.php
├── controllers/
│   └── mahasiswaController.php
├── views/
│   ├── layout.php
│   └── mahasiswa/
│       ├── index.php
│       ├── create.php
│       └── edit.php
├── assets/
│   └── css/
│       └── style.css
├── index.php
├── test_koneksi.php
├── database_schema.sql
└── README.md
```

## Kontribusi
1. Fork repository
2. Buat branch fitur (`git checkout -b feature/nama-fitur`)
3. Commit perubahan (`git commit -m 'Add: deskripsi'`)
4. Push ke branch (`git push origin feature/nama-fitur`)
5. Buat Pull Request

## Status Proyek
- ✅ Backend (Developer A) - READY
- ⏳ Frontend (Developer B) - IN PROGRESS
