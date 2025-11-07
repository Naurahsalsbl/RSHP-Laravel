<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSHP Universitas Airlangga</title>
    <style>
        body {font-family: Arial, sans-serif; margin: 0;padding: 0; background-color:darkgrey; }
        header {background-color:darkslateblue; color: black; padding: 20px; text-align: center;}
        nav {margin-top: 10px;}
        nav a {color: white; text-decoration: none; margin: 0 10px; font-weight: bold;}
        nav a:hover {text-decoration: underline;}
        section {background-color: white; margin: 20px; padding: 20px; border-radius: 8px;}
        h1 {color:#e6f0ff;}
        h2, h3 {color:black;}
        table {width: 100%; border-collapse: collapse; margin-top: 10px;}
        table, th, td {border: 1px solid #ccc;}
        th, td {padding: 8px; text-align: left;}
        th {background-color: #e6f0ff;}
        footer {background-color:darkslateblue; color: white; text-align: center; padding: 10px; margin-top: 20px;}
        img {display: block; margin: 10px auto; max-width: 100%; border-radius: 8px;}
        p {font-size: medium;}
    </style>
</head>
<body>
    <header>
        <h1>Rumah Sakit Hewan Pendidikan (RSHP) - Universitas Airlangga </h1>
            <nav>
                <a href="#home">Home</a>
                <a href="#struktur">Struktur Organisasi</a>
                <a href="#layanan">Layanan Umum</a>
                <a href="#visi">Visi, Misi, dan Tujuan</a>
                <a href="{{ route('login') }}">Login</a>
            </nav>
    </header>
    <section id="home">
        <h2>Selamat Datang di RSHP Universitas Airlangga</h2>
        <p>Rumah Sakit Hewan dibentuk di Fakultas Kedokteran Hewan Universitas Airlangga secara resmi berdiri pada tanggal 1 Januari 1972 berdasarkan SK Menteri Pendidikan dan Kebudayaan Republik Indonesia . Saat itu masih berupa klinik hewan yang menjadi bagian dari Departemen Klinik Veteriner, dimana klinik hewan ini juga menjadi wahana belajar mahasiswa Fakultas Kedokteran Hewan baik program S1 Kedokteran Hewan maupun Program Profesi Dokter Hewan atau lebih dikenal sebagai program Ko-Asistensi.</p>
        <img src="rshp.jpeg">
    </section>

    <section id="struktur">
        <h2>Struktur Organisasi</h2>
            <p>Struktur RSHP terdiri dari Direktur, Wakil Direktur 1, dan Wakil Direktur 2</p>
            <ol>
                <li>Direktur</li>
                <li>Wakil Direktur 1</li>
                <li>Wakil Direktur 2</li>
            </ol>
        <ul>
            <li>Instalasi Rawat Jalan & IGD</li>
            <li>Instalasi Rawat Inap & ICU</li>
            <li>Laboratorium Diagnostik</li>
            <li>Farmasi Veteriner</li>
            <li>Administrasi & Keuangan</li>
            </li>
        </ul>
        </section>
    <section id="layanan">
        <h2>Layanan Umum</h2>
            <p>Rumah Sakit Hewan Pendidikan Universitas Airlangga melakukan layanan-layanan, baik atas kehendak klien atau rujukan dokter hewan praktisi sebagai berikut:</p>
        <h3>Poliklinik</h3>
            <p>Poliklinik adalah layanan rawat jalan dimana pelayanan kesehatan hewan dilakukan tanpa pasien menginap. Poliklinik melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan lainnya seperti permintaan surat keterangan sehat. Tindakan observasi dan diagnosis, juga bisa diteguhkan dengan berbagai macam pemeriksaan yang bisa kami lakukan, misalnya pemeriksaan sitologi, dermatologi, hematologi, atau pemeriksaan radiologi, ultrasonografi, bahkan pemeriksaan elektrokardiografi. Bilamana diperlukan pemeriksaan-pemeriksaan lain yang diperlukan seperti pemeriksaan kultur bakteri, atau pemeriksaan jaringan/histopatologi, dan lain-lain kami bekerja sama dengan Fakultas Kedokteran Hewan Universitas Airlangga untuk membantu melakukan pemeriksaan-pemeriksaan tersebut. Selain itu kami mempunyai rapid test untuk pemeriksaan cepat, untuk meneguhkan diagnosa penyakit-penyakit berbahaya pada kucing seperti panleukopenia, calicivirus, rhinotracheitis, FIP, dan pada anjing seperti parvovirus, canine distemper.</p>
        <p>Layanan kesehatan hewan di poliklinik yang kami lakukan antara lain:</p>
        <ul>
            <li>Rawat Jalan</li>
            <li>Vaksinasi</li>
            <li>Akupuntur</li>
            <li>Kemoterapi</li>
            <li>Fisioterapi</li>
            <li>Mandi terapi</li>
        </ul>
        <h3>Rawat Inap</h3>
            <p>Rawat inap dilakukan pada pasien-pasien yang berat atau parah dan membutuhkan perawatan intensif. Pasien akan diobservasi dan mendapat perawatan intensif dibawah pengawasan dokter dan paramedis yang handal. Sebelum rawat inap, klien wajib mengisi inform konsen yang artinya klien telah diberi penjelasan yang detail tentang kondisi penyakit pasien dan menyetujui rencana terapi yang akan dijalankan sepengetahuan klien. Klien juga diberitahu biaya yang dibebankan untuk semua layanan. RSHP menerima pembayaran tunai maupun kartu debit bank.</p>
        <h3>Bedah</h3>
        <ol>
            <li>Tindakan Bedah Minor</li>
                <ul>
                    <li>Jahit luka</li>
                    <li>Kastrasi</li>
                    <li>Othematoma</li>
                    <li>Scalling - root planning </li>
                    <li>Ekstraksi gigi</li>
                </ul>
        </ol>
        <ol>
            <li>Tindakan Bedah Mayor</li>
                <ul>
                    <li>Gastrotomi; Entrotomi; Enterektomi; Salivary mucocele</li>
                    <li>Ovariohisterektomi; Sectio caesar; Piometra</li>
                    <li>Sistotomi; Urethrostomi</li>
                    <li>Fraktur tulang </li>
                    <li>Hernia diafragmatika</li>
                    <li>Hernia perinealis</li>
                    <li>Hernia inguinalis</li>
                    <li>Eksisi tumor</li>
                </ul>
        </ol>
        <h3>Pemeriksaan</h3>
            <ul>
                <li>Pemeriksaan Sitologi</li>
                <li>Pemeriksaan Dermatologi</li>
                <li>Pemeriksaan Hematologi</li>
                <li>Pemeriksaan Radiografi </li>
                <li>Pemeriksaan Ultrasonografi</li>
            </ul>
        <p>Selain layanan medis, Rumah Sakit Hewan Pendidikan Universitas Airlangga juga melayani grooming pada hewan kesayangan.</p>
    </section>
    <section id="visi">
        <h2>Visi, Misi, dan Tujuan</h2>
            <p>Rumah Sakit Hewan Pendidikan (RSHP) Universitas Airlangga dalam melaksanakan tugas dan fungsinya, mempunyai visi dan misi</p>
        <h3>Visi</h3>
            <p>Menjadi Rumah Sakit Hewan Pendidikan terkemuka di tingkat nasional dan internasional dalam pemberian pelayanan paripurna, pendidikan, dan penelitian di bidang kesehatan hewan, yang unggul dan mandiri serta bermartabat berdasarkan moral, agama, etika dengan tetap berorientasi pada kesejahteraan masyarakat.</p>
        <h3>Misi</h3>
        <ol>
            <li>Menyelenggarakan fungsi pelayanan terintegrasi, bermutu dan mengutamakan keselamatan dan kesehatan pasien (klien).</li>
            <li>Menyelenggarakan pendidikan dan pelatihan terintegrasi bidang kedokteran hewan dan kesehatan lainnya untuk menghasilkan lulusan atau tenaga kesehatan yang kompeten di bidangnya.</li>
            <li>Melakukan penelitian terintegrasi berbasis pada keunggulan bidang kedokteran hewan dan kesehatan lainnya yang berorientasi pada produk inovasi.</li>
            <li>Menjadi pusat rujukan pelayanan kedokteran hewan dan kesehatan lain yang unggul.</li>
            <li>Mengembangkan manajemen rumah sakit hewan yang produktif, efisien, bermutu, dan berbasis kinerja.</li>
        </ol>
        <h3>Tujuan</h3>
            <p>Menjadi Rumah Sakit Hewan yang adaptif, kreatif dan proaktif terhadap tuntutan perkembangan ilmu pengetahuan dan teknologi di bidang pengobatan kesehatan hewan</p>
    </section>
        <footer>Copyright 2024 Universitas Airlangga. All Rights Reserved</footer>
</body>
</html>