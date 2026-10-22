# pertemuan-06
## B.3 Perubahan index.html menjadi index.php

- Nama berkas utama diubah menjadi index.php.
- Struktur halaman P5 dipertahankan.
- Atribut action formulir disesuaikan menjadi index.php.
- Hasil pengujian: [isi setelah pengujian].


## C.3 Komentar, echo, dan print

- Komentar satu baris menggunakan `//`.
- Komentar beberapa baris menggunakan `/* ... */`.
- `echo` digunakan untuk menghasilkan keluaran.
- `print` digunakan untuk menghasilkan keluaran.
- Hasil pengujian: [isi sesuai hasil aktual].

### C.4 Perbedaan HTML Statis dan PHP Dinamis

- HTML statis: ...
- PHP dinamis: ...
- Hasil pengujian pada browser: ...
- Hasil pemeriksaan Page Source (Ctrl+U): ...

Bagian D.4 — Penggunaan Variabel dan Konstanta

Perubahan

Menggunakan variabel $namaMahasiswa untuk menampilkan nama mahasiswa.

Menggunakan variabel $mataKuliah untuk menampilkan nama mata kuliah.

Menggunakan variabel $tahunAkademik untuk menampilkan tahun akademik.

Menggunakan konstanta PROFIL_GITHUB untuk membentuk tautan profil GitHub.

Pengujian

Menjalankan halaman index.php melalui localhost.

Memeriksa tampilan nama mahasiswa, mata kuliah, dan tahun akademik.

Memeriksa tautan profil GitHub agar mengarah ke akun yang sesuai.

Hasil pengujian: Isi setelah pengujian selesai dengan hasil aktual.

Git

Perubahan disimpan menggunakan Git dan dikirim ke repositori GitHub setelah kode dan dokumentasi diperiksa.

E. Operator PHP

Perubahan

Menambahkan variabel $semester dengan nilai 2.

Menggunakan operator aritmetika untuk menghitung sisa semester dari batas 8 semester.

Menggunakan operator logika untuk memeriksa apakah semester berada dalam rentang 1 sampai 8.

Menggunakan operator ternary untuk menentukan status pemeriksaan semester.

Pengujian

Membuka halaman index.php melalui localhost.

Memastikan sisa semester menampilkan 6.

Memastikan semester 2 menampilkan status Sesuai rentang.

Mengubah semester sementara menjadi 9 untuk menguji status Perlu diperiksa, lalu mengembalikannya menjadi 2.

Hasil pengujian: Isi sesuai hasil pengujian yang benar-benar dilakukan.


## F.2 — Operator Ternary

- Menentukan nama program studi berdasarkan kode prodi.
- Menampilkan status mahasiswa berdasarkan nilai boolean

## F.3 — Percabangan switch-case-default

### Perubahan
- Menambahkan percabangan `switch-case-default` untuk menentukan fokus program studi.
- Program studi `SI` menampilkan fokus Sistem informasi dan proses bisnis.
- Program studi `TI` menampilkan fokus Komputasi dan pengembangan perangkat lunak.
- Nilai selain `SI` dan `TI` menampilkan Belum ditentukan.

### Pengujian
- Menguji `$programStudi = "SI"` melalui localhost.
- Menguji `$programStudi = "TI"` melalui localhost.
- Menguji `$programStudi = "MI"` melalui localhost.
- Mengembalikan nilai akhir menjadi `$programStudi = "TI"`.

## G.1 — Perulangan for untuk Target Belajar

### Perubahan
- Mengganti daftar target belajar statis dengan perulangan `for`.
- Menggunakan `switch` untuk menentukan teks setiap target.
- Menampilkan lima target belajar.

### Pengujian
- Membuka halaman melalui localhost.
- Memastikan lima target belajar tampil sesuai modul.

## G.2 — Perulangan while untuk Nomor Semester

### Perubahan
- Menambahkan perulangan `while` untuk menampilkan nomor semester.
- Menggunakan `$nomorSemester` sebagai penghitung.
- Menambahkan `$nomorSemester++` agar perulangan berhenti setelah semester 3.

### Pengujian
- Membuka halaman melalui localhost.
- Memastikan Semester 1, Semester 2, dan Semester 3 tampil.

## H.1 — Menampilkan IPK dengan number_format()

### Perubahan
- Menambahkan variabel `$ipk` dengan nilai `3.75`.
- Menggunakan `number_format()` untuk menampilkan IPK dengan dua angka desimal, koma sebagai pemisah desimal, dan titik sebagai pemisah ribuan.

### Pengujian
- Membuka halaman melalui localhost.
- Memastikan IPK tampil sebagai `3,75`.
