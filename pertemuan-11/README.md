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