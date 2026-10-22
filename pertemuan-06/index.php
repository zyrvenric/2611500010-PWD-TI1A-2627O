<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$catatanTambahan = "Catatan praktik PHP";
$ipk = 0.00;
$semester = 1;
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}
$programStudi = "TI";
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");
// Bagian 4: Percabangan switch-case-default
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan manajemen data";
        break;
    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
    default:
        $fokusProgramStudi = "Belum ditentukan";
}
$statusAktif = true;
$namaMahasiswa = "Ricky Hanserico";
$mataKuliah = "Pemrograman Web Dasar";
$tahunAkademik = "2026/2027";

define("PROFIL_GITHUB", "zyrvenric");
$programStudi = "TI";
$statusAktif = true;
?>
    <header>
        <h1>Profil Mahasiswa</h1>
        <nav>
            <button
            id="navToggle"
            aria-label="Buka navigasi"
            aria-controls="navMenu"
            aria-expanded="false"
            >
            &#9776;
            </button>
        </div>

        <nav>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

     <main>
            <section id="home">
            <h2>Selamat Datang</h2>
                <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari mata kuliah
<strong><?php print $mataKuliah; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>
            <img src="img/foto-profil.jpg" alt="Foto Profil" width="200">
        </section>

        <section id="about">
            <h2>Tentang Saya</h2>
            <article>
                <h3>Profil Singkat</h3>
                <p>IPK: <?php echo number_format($ipk, 2, ',', '.'); ?></p>
                <p>Catatan tambahan: <?php echo $catatanTambahan === null ? "Belum ada" : $catatanTambahan; ?></p>
                <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
                <p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
                <p>Program Studi: <?php echo $namaProdi . " (" . $programStudi . ")"; ?></p>
                <p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
                <p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p>

                <p>Saya mahasiswa Program Studi Teknik Informatika.</p>

                <h3>Target Belajar (Perulangan for)</h3>
                <h3>Semester (Perulangan while)</h3>
<ol>
<?php
$nomorSemester = 1;
while ($nomorSemester <= 3) {
    echo "<li>Semester " . $nomorSemester . "</li>";
    $nomorSemester++;
}
?>
</ol>
<ol>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Target belajar ke-" . $i . ": ";
    switch ($i) {
        case 1:
            echo "Memahami sintaks dasar PHP.";
            break;
        case 2:
            echo "Menggunakan variabel dan konstanta.";
            break;
        case 3:
            echo "Menerapkan operator dan percabangan.";
            break;
        case 4:
            echo "Menggunakan perulangan for dan while.";
            break;
        default:
            echo "Belum dipetakan";
            break;
    }
    echo "</li>";
}
?>
</ol>
            </article>
        </section>

        <section id="contact">
            <h2>Kontak</h2>
        <p>
    Kunjungi
    <a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
        </p>

            <form id="contactForm" action="index.php" method="get">
                <div class="form-group">
                    <label  for="nama">Nama Lengkap</label><br>
                    <input 
                            class="input-form"
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama Anda"
                            minlength="3"
                            maxlength="50"
                            required>
                </div>

                <div class="form-group">
                    <label  for="email">Email</label><br>
                    <input 
                            class="input-form"
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan@email Anda"
                            required>
                </div>

                <div class="form-group">
                    <label  for="semester">semester</label><br>
                    <input 
                            class="input-form"
                            type="number"
                            id="semester"
                            name="semester"
                            min="1"
                            max="8"
                            required>
                </div>

                <div class="form-group">
                    <label  for="tanggal">tanggal kunjungan</label><br>
                    <input 
                            class="input-form"
                            type="date"
                            id="tanggal"
                            name="tanggal"
                            required>
                </div>

                <div class="form-group">
                    <p>jenis pesan</p>
                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required>
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="radio" id="saran" name="jenis_pesan" value="saran" required>
                    <label for="saran">saran</label>
                </div>

                <div class="form-group">
                    <p>Topik yang Diminati</p>
                    <input type="checkbox" id="minat-html" name="minat" value="HTML">
                    <label for="minat-html">HTML</label>
                    <input type="checkbox" id="minat-css" name="minat" value="CSS">
                    <label for="minat-css">CSS</label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label><br>
                    <select class="input-form" id="prodi" name="prodi" required>
                        <option value="">-- Pilih Program Studi --</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknik Informatika</option>
                    </select>
                </div>
            <div class="form-group">
                <label for="pesan">Pesan</label><br>
                <textarea class="input-form"
                            id="pesan"
                            name="pesan"
                            maxlength="300"
                            placeholder="Tulis pesan Anda"
                            required></textarea>

            </div>
            <p id="formFeedback" aria-live="polite"></p>
            <button type="submit">Kirim</button>
            <button type="reset">Batal</button>
        </form>
    </section>
    </main>

    <footer>
          <p>&copy; <?php echo date("Y"); ?> Ricky Hanserico-[2611500010]</p>
    </footer>
    <script src="script.js"></script> 
</body>
</html>