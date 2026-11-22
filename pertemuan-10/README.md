1. menyalin artefak pertemuan - 09 ke pertemuan - 10 sebagai baseline. 
2. menyiapkan layanan Apache dan MySQL dapat berjalan dan aplikasi P10 dapat diakses melalui localhost.
3. menyiapkan phpMyAdmin dan phpMyAdmin dapat dibuka dan menampilkan antarmuka pengelolaan basis data MySQL.
4. Formulir Kontak P9 memiliki delapan data yang dapat dikirimkan, yaitu: setiap elemen formulir memiliki nama dan jenis input yang berbeda. Khusus checkbox minat[] , pengguna dapat memilih lebih dari satu pilihan, yaitu HTML dan CSS .
5. Berdasarkan ketentuan modul P10, nama basis data menggunakan pola `db_pwd_NIM`, sedangkan nama tabel menggunakan pola `tbl_kontak_NIM`.
NIM digunakan sebagai pembeda hasil pekerjaan setiap mahasiswa.
Nama basis data yang akan digunakan: `db_pwd_NIM`
Nama tabel yang akan digunakan: `tbl_kontak_NIM`
6. penulisan nama basis data dan tabel berdasarkan NIM masing-masing.
7. Menentukan Tipe Data Setiap Kolom
Tipe data disesuaikan dengan jenis informasi yang akan disimpan.

| Nama Kolom | Tipe Data |
|---|---|
| `id` | INT |
| `nama` | VARCHAR(50) |
| `email` | VARCHAR(255) |
| `semester` | TINYINT |
| `tanggal` | DATE |
| `jenis_pesan` | VARCHAR(20) |
| `minat` | VARCHAR(50) |
| `prodi` | VARCHAR(2) |
| `pesan` | VARCHAR(300) |

8. Menentukan Primary Key dan Auto Increment

Pada tabel `tbl_kontak_2611500010`, kolom `id` digunakan sebagai Primary Key karena setiap data harus memiliki identitas yang unik.
Kolom `id` menggunakan tipe data `INT` dan fitur `AUTO_INCREMENT` agar nilainya bertambah secara otomatis ketika data baru dimasukkan ke dalam tabel.
Dengan demikian, kolom `id` tidak perlu diisi secara manual saat menambahkan data.
9. Memeriksa Rancangan Struktur Tabel
Berdasarkan hasil perancangan pada D.1 sampai D.3, tabel Kontak P10 memiliki sembilan atribut, yaitu satu atribut `id` sebagai kunci utama dan delapan atribut yang berasal dari formulir Kontak P9.

Struktur lengkap tabel yang akan dibuat adalah sebagai berikut:

| No. | Atribut | Tipe Data | Ketentuan |
|---|---|---|---|
| 1 | `id` | INT | PRIMARY KEY, AUTO_INCREMENT |
| 2 | `nama` | VARCHAR(50) | - |
| 3 | `email` | VARCHAR(255) | - |
| 4 | `semester` | TINYINT | - |
| 5 | `tanggal` | DATE | - |
| 6 | `jenis_pesan` | VARCHAR(20) | - |
| 7 | `minat` | VARCHAR(50) | - |
| 8 | `prodi` | VARCHAR(2) | - |
| 9 | `pesan` | VARCHAR(300) | - |

Hasil Pemeriksaan:

Rancangan tabel memiliki sembilan atribut. Seluruh delapan data dari formulir Kontak P9 telah terwakili, tipe data disesuaikan dengan karakteristik masing-masing atribut, dan hanya kolom `id` yang ditetapkan sebagai PRIMARY KEY dengan AUTO_INCREMENT.
10. Membuka phpMyAdmin
Laragon berhasil dijalankan dengan layanan Apache dan MySQL aktif. Selanjutnya, phpMyAdmin dibuka melalui browser menggunakan alamat `http://localhost/phpmyadmin`.

Hasil Pengujian:
phpMyAdmin berhasil dibuka dan menampilkan antarmuka pengelolaan basis data MySQL. Server terhubung melalui `localhost:3306` dan daftar basis data berhasil ditampilkan.
11. Membuat Basis Data MySQL
Pada tahap ini, basis data dibuat melalui phpMyAdmin dengan menggunakan nama sesuai ketentuan, yaitu db_pwd_2611500010.
Collation menggunakan pilihan bawaan yang tersedia pada phpMyAdmin.
Hasil Pengujian:
Basis data berhasil dibuat dan muncul pada daftar basis data phpMyAdmin.
12. Membuat Basis Data MySQL
Pada tahap ini, basis data dibuat melalui phpMyAdmin dengan nama `db_pwd_611500010`.
Collation yang digunakan adalah `utf8mb4_0900_ai_ci`.

Hasil Pengujian:
basis data `db_pwd_611500010` berhasil dibuat melalui phpMyAdmin dan muncul pada daftar basis data.