<?php
// Konfigurasi koneksi ke basis data MySQL.
$host = "localhost";
$user = "root";
$password = "";
$database = "db_pwd_611500010";

// Membuat koneksi PHP dengan MySQL menggunakan MySQLi.
mysqli_report(MYSQLI_REPORT_OFF);
// Menghubungkan PHP dengan basis data MySQL.
$koneksi = mysqli_connect($host, $user, $password, $database);