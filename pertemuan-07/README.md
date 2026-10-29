## Tujuan

Menerapkan pengiriman formulir dengan metode POST, validasi JavaScript dan PHP, pola POST/Redirect/GET, serta menampilkan kembali data dengan aman.
# Tahapan Pengerjaan

1. *Pemeriksaan awal* — memeriksa baseline profil dan formulir serta perubahan lokal yang sudah ada. Form utama diarahkan memakai POST; berkas lama indexGet.php tidak digunakan.
2. *Pemrosesan peladen* — memeriksa kolom wajib, panjang nama dan pesan, format email/tanggal, rentang semester, serta nilai pilihan. Data POST dipindahkan melalui session dan redirect agar refresh tidak mengirim ulang formulir.