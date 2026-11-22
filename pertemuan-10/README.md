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
13. Mengisi Struktur Tabel
Pada tahap ini, struktur tabel `tbl_kontak_611500010` dibuat melalui phpMyAdmin dengan sembilan kolom sesuai rancangan pada tahap sebelumnya.

Kolom `id` menggunakan tipe data `INT` sebagai `PRIMARY KEY` dan dilengkapi dengan `AUTO_INCREMENT`. Sementara itu, delapan kolom lainnya dibuat sesuai tipe data dan panjang nilai yang telah ditentukan.

Hasil Pengujian:
struktur tabel `tbl_kontak_611500010` berhasil dibuat. Seluruh sembilan kolom tampil pada halaman Struktur phpMyAdmin dengan tipe data yang sesuai. Kolom `id` juga berhasil ditetapkan sebagai `PRIMARY KEY` dan `AUTO_INCREMENT`.
14. Mengenal Perintah DDL CREATE DATABASE dan CREATE TABLE
pada tahap ini, dipelajari perintah SQL yang termasuk dalam kelompok DDL (Data Definition Language) untuk membuat dan memilih basis data serta membuat tabel.

Perintah `CREATE DATABASE` digunakan untuk membuat basis data, `USE` digunakan untuk memilih basis data, sedangkan `CREATE TABLE` digunakan untuk membuat tabel beserta atributnya.

Hasil Pemeriksaan:
Perintah SQL telah dipelajari dan dibandingkan dengan hasil pembuatan basis data `db_pwd_611500010` serta tabel `tbl_kontak_611500010` melalui phpMyAdmin. Nama basis data, nama tabel, dan sembilan atribut telah sesuai dengan struktur yang dibuat pada tahap E.2 sampai E.4.
15. Memeriksa Struktur Tabel dan Memperbaiki Ketidaksesuaian
Pada tahap ini, dilakukan pemeriksaan struktur tabel `tbl_kontak_611500010` melalui tab Structure pada phpMyAdmin.

Pemeriksaan meliputi jumlah atribut, nama kolom, tipe data, panjang karakter, serta penggunaan PRIMARY KEY dan AUTO_INCREMENT.

Hasil Pengujian:
Berdasarkan hasil pemeriksaan, tabel `tbl_kontak_611500010` memiliki sembilan atribut dengan tipe data dan panjang nilai yang sesuai rancangan. Kolom `id` juga telah menggunakan PRIMARY KEY dan AUTO_INCREMENT. Tidak ditemukan ketidaksesuaian pada struktur tabel.
16. F.1. Memasukkan Data Menggunakan Fasilitas Insert
Pada tahap ini, data kontak dimasukkan ke dalam tabel `tbl_kontak_611500010` menggunakan fasilitas Tambahkan (Insert) pada phpMyAdmin.

Data yang dimasukkan meliputi nama, email, semester, tanggal, jenis pesan, minat, program studi, dan pesan. Kolom `id` dibiarkan kosong karena menggunakan AUTO_INCREMENT.

Hasil Pengujian:
Data berhasil ditambahkan ke dalam tabel. phpMyAdmin menampilkan pesan bahwa satu baris berhasil ditambahkan dengan nomor baris baru 1.