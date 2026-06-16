<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 1 Kep.Selayar</title>
    <link rel="icon" type="img/x-icon" href="img/logo.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="kontak bg-dark text-white py-2 d-none d-lg-block">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center small">
                <div>
                    <span class="me-4"><i class="fa fa-phone"></i> 081315429416</span>
                    <span><i class="fa fa-envelope"></i> smpn01benteng@gmail.com</span>
                </div>
                <div class="mt-1 mt-md-0">
                    <span><i class="fa fa-map-marker"></i> Jl. Ki Hajar Dewantara No. 12, Kelurahan Benteng</span>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6 d-none d-lg-block">
                    <div class="logo">
                        <img src="img/logo2.png" alt="logo sekolah" class="img-fluid" style="max-height: 70px;">
                    </div>
                </div>
                <div class="cari col-12 col-lg-4 ms-auto">
                    <form class="d-flex gap-1 col-sm-12">
                        <input class="form-control" type="search" placeholder="Cari.." aria-label="Search">
                        <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg mx-lg-5">
            <div class="container">
                <a class="navbar-brand d-block d-lg-none" href="index.html"><img src="img/logo2.png" alt="logo sekolah" class="img-fluid" style="max-height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item mx-lg-2">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="sejarah.html">Sejarah</a></li>
                                    <li><a class="dropdown-item" href="visimisi.html">Visi Misi</a></li>
                                    <li><a class="dropdown-item" href="struktur.html">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Akademik
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item active" href="guru.php">Data Guru</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kesiswaan
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="pramuka.html">Pramuka</a></li>
                                    <li><a class="dropdown-item" href="pmr.html">PMR</a></li>
                                    <li><a class="dropdown-item" href="drumband.html">Drumband</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Galeri
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="kegiatan.html">Foto & Video Kegiatan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Informasi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="berita.html">Berita</a></li>
                                    <li><a class="dropdown-item" href="ppdb.html">PPDB</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-lg-2">
                                <a class="nav-link" href="kontak.html">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container my-5">
        <div class="text-center">
            <h2>Tenaga Pendidik & Tenaga Kependidikan</h2>
            <p>SMPN 1 Kepulauan Selayar</p>
        </div>
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $data = [
                    ["19671130 199002 2 003", "ARNI ATY, S. Pd", "Kepala Sekolah"],
                    ["19700416 199702 2 007", "Hj. ANDI HERLINA ZAINAL, S. Pd", "Guru"],
                    ["19760427 200012 2 005", "ANDI MISRAWATI, S. Pd, MM", "Guru"],
                    ["19780717 200312 2 010", "SYANDRABAU, S.Pd.", "Guru"],
                    ["19690928 199203 1 012", "MUHAMMAD NUR, S. Pd", "Guru"],
                    ["19680515 200312 1 007", "IBRAHIM, SS", "Guru"],
                    ["19680204 199203 2 014", "Dra. TUTI ASTIAWATI. U", "Guru"],
                    ["19710311 199702 2 005", "BAU INTANG, S. Pd", "Guru"],
                    ["19710311 199702 2 005", "Hj. IRMAWATI. S. Pd", "Guru"],
                    ["19720924 200212 1 003", "SAIFUDDIN, SS", "Guru"],
                    ["19690330 200604 2 007", "ANDI HASNAH, S.Pd.", "Guru"],
                    ["19820527 200903 2 003", "HARYANTI, S. Pd.MM", "Guru"],
                    ["19810428 201001 1 015", "MUHAMMAD APRIYADI, S.Pd.I", "Guru"],
                    ["19780401 200701 2 026", "ERLIYANTI, S.Pd", "Guru"],
                    ["19721007 200604 2 026", "NUR AIDA SARI, SS", "Guru"],
                    ["19800628 200604 2 030", "NUR MALA, S. Pd", "Guru"],
                    ["19701001 200604 2 011", "ROSMINI, S. Pd", "Guru"],
                    ["19780422 200504 2 027", "RATNA PURNAMASARI, S. Pd", "Guru"],
                    ["19750604 200604 2 036", "RAHMIYANTI, S. Ag", "Guru"],
                    ["19700401 200803 1 002", "AHMAD YANI, S.Pd.", "Guru"],
                    ["19780609 201001 1 016", "MUHAMMAD NUR MUNAWIR, SE", "Guru"],
                    ["19820223 201001 2 026", "PATMAWATI, S.Si., S.Pd", "Guru"],
                    ["19830305 201001 2 027", "ROSNAYANTI, S. Kom.MM", "Guru"],
                    ["19830512 201001 2 034", "SRIYANTI, S.Pd.I.Gr", "Guru"],
                    ["19810910 200701 2 020", "ROSMAYANI, S. Pd", "Guru"],
                    ["19780811 200903 1 007", "ANDI JUFRI, S. Pd", "Guru"],
                    ["19720812 200502 2 007", "LISDAWATI, S. Pd", "Guru"],
                    ["19720430 200604 2 013", "HADAYANA MANNAWI, S. Pd.Gr", "Guru"],
                    ["19680106 200701 2 019", "Dra. NUR HAEDAH", "Guru"],
                    ["19670716 200701 1 035", "MAPPASIMBA, S.Pd.I", "Guru"],
                    ["19841129 201403 1 002", "SULFAN ASHARI, S.Pd", "Guru"],
                    ["19910310 201903 1 013", "KAHAR KARIM, S. Pd.Gr", "Guru"],
                    ["19681023 200701 1 018", "BAHARUDDIN, S. Pd", "Guru"],
                    ["19961119 202012 2 002", "REZKI AMALIAH, S. Pd", "Guru"],
                    ["19890915 202221 1 010", "MUHAMMAD NUR TAQWA, S.Pd.Gr", "Guru"],
                    ["19850715 202221 2 068", "SYAMSIDAR, S.Pd.Gr", "Guru"],
                    ["19860416 202221 1 022", "MUHAMMAD DAHLAN, S.Pd", "Guru"],
                    ["19720117 202321 2 001", "SITI NURBAYA, S.Ag", "Guru"],
                    ["19960525 202321 2 014", "FIRYAL AFIFAH AHMAD, S.Pd", "Guru"],
                    ["19930714 202321 2 015", "ERNAWATI, S.Pd.Gr", "Guru"],
                    ["19790504 202321 2 004", "RAHMAWATI, S.Pd", "Guru"],
                    ["19890614 202321 2 023", "ROSMIDA, S.Pd", "Guru"],
                    ["19920616 202321 2 015", "SALMAWATI, S.Pd", "Guru"],
                    ["19930124 202321 2 014", "AMRIANI, S.Pd", "Guru"],
                    ["19901019 202321 2 013", "SITI SURYANI, S.Pd", "Guru"],
                    ["19980407 202421 2 012", "ANDI NUR ADHA, S.Pd", "Guru"],
                    ["19900410 202421 2 007", "NUHRAWATI, S.Pd", "Guru"],
                    ["19970920 202421 2 010", "ANDI SELFIANA ASTUTI, S.Pd", "Guru"],
                    ["19951231 202421 2 016", "JUMRIAH, S.Pd", "Guru"],
                    ["19940924 202421 2 010", "NUR IKA RAHMAYANI, S.Psi.", "Guru"],
                    ["19980326 202421 2 010", "ANNISA AHMAR, S.Pd", "Guru"],
                    ["19980828 202421 2 009", "ERLITA SARI TASLIM, S.Pd", "Guru"],
                    ["19680507 199203 2 015", "SITI FATIMAH", "Guru"],
                    ["19691122 198901 2 002", "NIHRAWATI", "Guru"],
                    ["19720816 199403 2 010", "RATNA DEWI, S.Pd", "Guru"],
                    ["19780415 201407 2 003", "IRWANA", "Guru"],
                    ["19720425 201407 1 001", "SAHARUDDIN", "Guru"],
                    ["19701217 202521 2 011", "ST. DARMAWATI, S.Pd.I", "Guru"],
                    ["19840404 202521 2 176", "ISRIANTI, S.Pd.", "Guru"],
                    ["19851202 202521 2 091", "HIKMAWATI, S.Pd.", "Guru"],
                    ["19870918 202521 1 087", "IRFANDI JAMAL, S.Pd.", "Guru"],
                    ["19940425 202521 2 082", "NITA ALVIONITA, S.Pd.", "Guru"],
                    ["19950303 202521 2 129", "ANDI FITRI ANDRIANI, S.Pd.", "Guru"],
                    ["19960503 202521 2 085", "ANDI NUR SANTI, S.Pd.", "Guru"],
                    ["19960504 202521 2 131", "SRI WAHYUNI, S.Pd.", "Guru"],
                    ["19960708 202521 2 146", "REZKI INDRIYANI MAHMUD, S.Pd.", "Guru"],
                    ["19950402 202521 1 143", "AMRUN HASID ALI, S.Pd.", "Guru"],
                    ["19970605 202521 2 133", "EKA ARDINA PRATIWI, S.Pd.", "Guru"],
                    ["19971127 202521 2 103", "NURUL SULASTRI, S.Pd.", "Guru"],
                    ["19980816 202521 2 125", "MERINAWATI, S.Pd.", "Guru"],
                    ["-", "SITTI AMALIAH", "Guru Tidak Tetap"],
                    ["-", "AHMAD RIVAI, S.Psi.", "Guru Tidak Tetap"],
                    ["-", "ANDI MAGFIRAHWATI, S.Pd.", "Guru Tidak Tetap"],
                    ["-", "ROSALINDA, S.Pd.", "Guru Tidak Tetap"],
                    ["19710603 202521 2 021", "NUR BAETI", "Guru"],
                    ["19770123 202521 2 019", "ANDI ASMA, A.Ma", "Guru"],
                    ["19920802 202521 2 125", "MAGFIRAH NUR", "Guru"],
                    ["20001109 202521 2 035", "ANDI RATU", "Guru"],
                    ["20010410 202521 1 033", "AL FADLI FAISAL, S.Pd.", "Guru"],
                    ["-", "SYAMSUL RIZAL, S.Kom", "Guru Tidak Tetap"],
                    ["-", "JOHARNI", "Guru Tidak Tetap"],
                    ["-", "AKBAR", "Guru Tidak Tetap"]
                ];

                $no = 1;
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<th>{$no}</th>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <div class="container pt-5 pb-5 text-white">
            <div class="row">
                <div class="col-md-4">
                    <h5>SMPN 1 Kepulauan Selayar</h5>
                    <p>Jl. Ki. Hajar Dewantara No.12, Kelurahan Benteng</p>
                    <p>Telp: 081315429416</p>
                    <p>Email: smpn01benteng@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Menu Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-white">Home</a></li>
                        <li><a href="berita.html" class="text-white">Berita</a></li>
                        <li><a href="kontak.html" class="text-white">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Ikuti Kami</h5>
                    <a href="https://facebook.com/groups/2217261238557207/" target="_blank" class="me-2 text-white"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="https://www.instagram.com/smpn1selayar?igsh=eGw2ZzBlMWxrbHlx" target="_blank" class="me-2 text-white"><i class="fa fa-instagram fa-lg"></i></a>
                    <a href="https://youtube.com/@uptsmpnbentengno1kep.selayar?si=ttOUQ9rxPq6WIy_A" target="_blank" class="text-white"><i class="fa fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p class="mb-0">C 2026 SMPN 1 Kepulauan Selayar. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>

</html>