1. B1 menyalin seluruh berkas dan direktori pertemuan -10 ke direktori pertemuan -11
2. B2 Menyiapkan Struktur Direktori dan Lingkungan Pengembangan
Struktur direktori pertemuan-11 disiapkan dengan menggunakan berkas dari pertemuan-10 sebagai baseline. Lingkungan pengembangan dijalankan menggunakan Laragon.
3. B3 memastikan basis data db_pwd_nim dan tabel tbl_kontak_nim tersedia, memeriksa sembilan atribut tabel, yaitu id , nama, email , semester , tanggal , jenis_pesan , minat , prodi , dan pesan. dan data
kontak dapat ditampilkan melalui tab Browse.
4. D1 Membuat Berkas koneksi.php.
5. D2 Menentukan Parameter Koneksi
Menentukan empat parameter koneksi pada berkas `koneksi.php`, yaitu:

- Host: `localhost`
- Username: `root`
- Password: kosong
- Database: `db_pwd_611500010`

Nama database disesuaikan dengan database yang telah dibuat pada pertemuan-10.
6. D3 Menggunakan mysqli_report(MYSQLI_REPORT_OFF)
Menambahkan fungsi `mysqli_report(MYSQLI_REPORT_OFF);` pada berkas `koneksi.php` setelah deklarasi parameter koneksi.

Pengaturan ini menonaktifkan pelaporan kesalahan otomatis MySQLi sehingga kegagalan koneksi dapat diperiksa secara eksplisit menggunakan percabangan `if`.
7. D4 Membuat Koneksi Menggunakan mysqli_connect()
Menambahkan fungsi `mysqli_connect()` pada berkas `koneksi.php` untuk menghubungkan PHP dengan basis data MySQL.

Koneksi menggunakan parameter host, username, password, dan nama database yang telah ditentukan sebelumnya.

Menambahkan percabangan `if` untuk memeriksa keberhasilan koneksi. Jika koneksi gagal, fungsi `die()` akan menghentikan proses PHP dan menampilkan pesan:

`Koneksi ke basis data gagal.`
8. D5 Memeriksa dan Menguji Keberhasilan Koneksi
Melakukan pengujian koneksi PHP ke MySQL menggunakan berkas sementara `uji_koneksi.php`.

Pengujian dilakukan melalui browser dan berhasil menampilkan pesan:

`Koneksi ke basis data berhasil.`

Setelah pengujian selesai, berkas sementara `uji_koneksi.php` dihapus agar tidak menjadi bagian dari artefak akhir P11.
9. D6 Menguji Penanganan Kegagalan Koneksi
Melakukan pengujian penanganan kegagalan koneksi dengan mengubah sementara nama database menjadi `db_tidak_tersedia`.

Saat diuji melalui browser, aplikasi menampilkan pesan `Koneksi ke basis data gagal.`.

Setelah pengujian, nama database dikembalikan menjadi `db_pwd_611500010`. Pengujian ulang menunjukkan bahwa pesan kegagalan tidak lagi muncul.
10. D7 Mendokumentasikan Hasil dan Perkembangan Tahap Koneksi
Pada tahap ini dilakukan pemeriksaan akhir terhadap proses pembuatan dan pengujian koneksi PHP dengan MySQL menggunakan MySQLi.

Hasil pemeriksaan:
File koneksi.php telah dibuat dan berisi konfigurasi koneksi database.
Parameter host, username, password, dan database telah diperiksa.
Penggunaan mysqli_report(MYSQLI_REPORT_OFF) telah diterapkan.
Koneksi database menggunakan fungsi mysqli_connect().
Pengujian koneksi berhasil telah dilakukan.
Pengujian kegagalan koneksi telah dilakukan.
Nama database telah dikembalikan ke nama yang benar.
File sementara uji_koneksi.php telah dihapus.
11. E1 Memuat Berkas koneksi.php Menggunakan require_once()
- Memastikan berkas `koneksi.php` tersedia dalam direktori yang sama dengan `index.php`.
- Menyiapkan perintah `require_once("koneksi.php");` untuk memuat berkas koneksi.
- Perintah tersebut digunakan agar variabel `$koneksi` dapat digunakan oleh `index.php`.

Hasil pemeriksaan: Berkas `koneksi.php` tersedia dalam direktori yang sama dengan `index.php`.
12. E2 Mengintegrasikan Koneksi pada index.php
- Menambahkan pemanggilan `require_once("koneksi.php");` pada bagian awal berkas `index.php`.
- Pemanggilan `fungsi.php` tetap dipertahankan.
- `koneksi.php` digunakan untuk membuat koneksi PHP dengan MySQL.
- Variabel `$koneksi` tersedia untuk digunakan pada proses pengelolaan data basis data.

Hasil pemeriksaan: Berkas `index.php` telah memuat `fungsi.php` dan `koneksi.php` menggunakan `require_once()`.
13. E3 Memeriksa Ketersediaan Koneksi pada Halaman Utama
- Memastikan `index.php` memuat `koneksi.php` menggunakan `require_once()`.
- Memastikan pemeriksaan koneksi `$koneksi` tetap berada di dalam `koneksi.php`.
- Jika koneksi gagal, perintah `die()` akan menghentikan proses PHP dan menampilkan pesan kegagalan.
- Jika koneksi berhasil, proses pada `index.php` dapat dilanjutkan dan variabel `$koneksi` tersedia untuk digunakan.

Hasil pemeriksaan: Pemanggilan berkas koneksi dan pemeriksaan kegagalan koneksi telah diperiksa.
14. E4 Menguji Integrasi PHP dengan MySQL
- Memastikan layanan Apache dan MySQL berjalan melalui Laragon.
- Mengakses halaman utama melalui peramban menggunakan alamat lokal proyek P11.
- Memeriksa tampilan halaman utama aplikasi.
- Memastikan pesan "Koneksi ke basis data gagal." tidak muncul.

Hasil pengujian: Halaman utama aplikasi berhasil ditampilkan tanpa pesan kegagalan koneksi PHP dengan MySQL.
15. E5 Mendokumentasikan Hasil dan Perkembangan Tahap Integrasi
- Memeriksa kembali pemanggilan `koneksi.php` pada `index.php`.
- Memastikan konfigurasi koneksi pada `koneksi.php` tetap menggunakan basis data yang benar.
- Mendokumentasikan alur pemuatan berkas koneksi menggunakan `require_once()`.
- Mencatat hasil pengujian integrasi PHP dengan MySQL.
- Memastikan perubahan dokumentasi telah disimpan dan dikirim ke repositori GitHub.

Hasil pemeriksaan: Integrasi koneksi PHP dengan MySQL berhasil. Halaman utama dapat ditampilkan tanpa pesan kegagalan koneksi.
16. F1  Mengenal Perintah SQL SELECT
- SELECT digunakan untuk mengambil data.
- * berarti seluruh kolom.
- FROM menentukan tabel sumber data.
- Contoh modul: SELECT * FROM tbl_kontak_nim;
17. F2 Menentukan Kueri SELECT pada Tabel Kontak
Menambahkan kueri SQL SELECT pada berkas `index.php` untuk mengambil seluruh data kontak dari tabel `tbl_kontak_611500010` pada database `db_pwd_611500010`.

```php
// P11: Mengambil data kontak dari basis data menggunakan operasi READ.
$sql = "SELECT * FROM tbl_kontak_611500010";
```
18. F3 Menjalankan Kueri Menggunakan mysqli_query()
Menambahkan fungsi `mysqli_query()` pada berkas `index.php` untuk menjalankan kueri SELECT menggunakan koneksi database dari variabel `$koneksi`.

```php
$hasil = mysqli_query($koneksi, $sql);
```

Variabel `$hasil` digunakan untuk menampung hasil eksekusi kueri SELECT.
19. F4 Memeriksa dan Menguji Keberhasilan Kueri SELECT
Menambahkan pemeriksaan keberhasilan kueri SELECT pada berkas `index.php` menggunakan kondisi `if (!$hasil)`.

```php
// P11: Memeriksa keberhasilan kueri SELECT.
if (!$hasil) {
    die("Kueri SELECT gagal dijalankan.");
}
```

Pengujian dilakukan dengan mengubah sementara nama tabel menjadi `tbl_tabel_tidak_tersedia`. Hasil pengujian menampilkan pesan `Kueri SELECT gagal dijalankan.` Setelah pengujian, nama tabel dikembalikan menjadi `tbl_kontak_611500010`.
20. F5 Mengambil Hasil Kueri Menggunakan mysqli_fetch_assoc()
Menambahkan fungsi `mysqli_fetch_assoc()` pada berkas `index.php` untuk mengambil data hasil kueri SELECT dalam bentuk larik asosiatif.

```php
// P11: Mengambil hasil kueri sebagai larik asosiatif.
$dataKontak = [];

while ($baris = mysqli_fetch_assoc($hasil)) {
    $dataKontak[] = $baris;
}
```
Variabel `$dataKontak` digunakan untuk menampung seluruh baris data kontak. Setiap baris disimpan sebagai larik asosiatif berdasarkan nama kolom tabel.