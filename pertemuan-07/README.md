## Tujuan

Menerapkan pengiriman formulir dengan metode POST, validasi JavaScript dan PHP, pola POST/Redirect/GET, serta menampilkan kembali data dengan aman.
# Tahapan Pengerjaan

1. *Pemeriksaan awal* — memeriksa baseline profil dan formulir serta perubahan lokal yang sudah ada. Form utama diarahkan memakai POST; berkas lama indexGet.php tidak digunakan.
2. *Pemrosesan peladen* — memeriksa kolom wajib, panjang nama dan pesan, format email/tanggal, rentang semester, serta nilai pilihan. Data POST dipindahkan melalui session dan redirect agar refresh tidak mengirim ulang formulir.

3. *Tampilan dan keamanan* — mengisi kembali nilai form setelah redirect, hanya menampilkan ringkasan data bila valid, dan melakukan escaping pada semua nilai yang ditampilkan. Ikon navigasi diperbaiki agar tidak tampil sebagai teks rusak.
4. *Pengujian* — hasil tercatat di bagian berikut.

## Cara Menjalankan

Nyalakan Apache melalui Laragon, lalu buka:
http://localhost/pwd/2627o/ti1a/2611500010-PWD-TI1A-2627O/pertemuan-07/

