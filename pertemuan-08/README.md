## Pengembangan Formulir Rencana Kegiatan Mahasiswa

### 1. Menambahkan Menu Navigasi
Menambahkan menu **Rencana Kegiatan** pada navbar yang mengarah ke bagian `#rencana-kegiatan`.

### 2. Membuat Formulir Rencana Kegiatan
Menambahkan section **Rencana Kegiatan Mahasiswa** sebelum section Kontak.

Formulir memiliki lima kolom:
- Nama Kegiatan
- Kategori Kegiatan
- Tanggal Pelaksanaan
- Lokasi Kegiatan
- Deskripsi Kegiatan

Formulir menggunakan metode POST dan memiliki tombol Kirim dan Batal.

### 3. Menambahkan Pemrosesan Formulir dengan PHP
Menambahkan pemrosesan data formulir menggunakan PHP dengan metode POST.

Data yang diterima dibersihkan menggunakan `trim()` dan disimpan ke dalam session.

Pemrosesan formulir Rencana Kegiatan dibedakan dari formulir Kontak menggunakan `isset($_POST["submit_rencana"])`.

### 4. Menambahkan Validasi Sisi Server
Menambahkan validasi PHP untuk setiap kolom:
- Nama kegiatan harus 3 sampai 100 karakter.
- Kategori harus sesuai dengan pilihan yang tersedia.
- Tanggal pelaksanaan harus memiliki format tanggal yang valid.
- Lokasi harus 3 sampai 150 karakter.
- Deskripsi wajib diisi dan maksimal 500 karakter.

Pesan kesalahan disimpan dalam session dan ditampilkan kembali pada halaman.

### 5. Menerapkan Redirect Setelah POST
Menerapkan pola Post/Redirect/Get (PRG) menggunakan `header("Location: index.php#rencana-kegiatan")` dan `exit` untuk menghindari pengiriman ulang formulir saat halaman dimuat kembali.

### 6. Menampilkan Hasil Formulir
Data yang berhasil dikirim disimpan dalam `$_SESSION["rencana"]` dan ditampilkan kembali di bawah formulir.

Output menggunakan `htmlspecialchars()` untuk mengamankan data sebelum ditampilkan ke halaman HTML.

### 7. Pengujian yang Telah Dilakukan

| No. | Pengujian | Hasil |
|---|---|---|
| 1 | Membuka menu Rencana Kegiatan | Berhasil |
| 2 | Mengirim formulir dengan data lengkap | Berhasil |
| 3 | Mengirim nama kegiatan kosong untuk menguji validasi PHP | Berhasil |
| 4 | Mengirim nama kegiatan kurang dari 3 karakter untuk menguji validasi PHP | Berhasil |
| 5 | Menampilkan kembali data Rencana Kegiatan | Berhasil |

### 8. Kesimpulan
Fitur Formulir Rencana Kegiatan Mahasiswa berhasil ditambahkan. Formulir dapat menerima data, melakukan validasi menggunakan PHP, menyimpan data ke session, dan menampilkan kembali hasil pengiriman.
