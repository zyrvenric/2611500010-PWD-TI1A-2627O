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
