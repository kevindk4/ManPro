<!DOCTYPE html>
<html>
    <head>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link rel="stylesheet" href="../style/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Home</title>

    </head>
    <body>
        <div class="heading w3-flat-peter-river">
            <div class="w3-cell w3-cell-middle w3-padding">
                <div id="mySidenav" class="sidenav" >
                    <div id="head_slide_navbar">
                        <img src="../image/logo_if.png" height="50%" width="50%">
                    </div>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="../home/home.php">Home</a>
                    <a href="../home/visi_misi.php">Visi dan Misi</a>
                    <a href="../ks_tridharma/ks_tridharma.php">Tata Pamong, Tata Kelola dan Kerja Sama</a>

                    <a  href="#" class="w3-block w3-left-align" onclick="myAccFuncc()">
                        Mahasiswa <i class="fa fa-caret-down"></i>
                    </a>
                    <div id="demoAccc" class="w3-hide w3-blue w3-card">
                        <a href="../mahasiswa/kualitas_input_mahasiswa.php" class="w3-bar-item" style="color: white">Kualitas Input Mahasiswa</a><br>
                        <a href="../mahasiswa/mahasiswa_asing.php" class="w3-bar-item" style="color: white">Mahasiswa Asing</a>
                    </div>                                            
                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc2()">Sumber Daya Manusia <i class="fa fa-caret-down"></i></a>
                    <div class="w3-hide w3-blue w3-card" id="demoAcc2">
                        <a href="../sdm/profil_dosen.php" class='w3-bar-item' style="color:white;">Profil Dosen</a><br>
                        <a href="../sdm/dosen_pembimbing_utama.php" class='w3-bar-item' style='color:white'>Dosen Pembimbing Utama Tugas Akhir</a><br>
                        <a href="../sdm/ewmp_dosen.php" class='w3-bar-item' style="color:white;">EWMP Dosen Tetap Perguruan Tinggi</a><br>
                        <a href="../sdm/dosen_tidak_tetap.php" class='w3-bar-item' style="color:white;">Dosen Tidak Tetap</a><br>
                        <a href="../sdm/rekognisi_dtps.php" class='w3-bar-item' style="color:white;">Rekognisi DTPS</a><br>
                        <a href="../sdm/penelitian_dtps.php" class='w3-bar-item' style="color:white;">Penelitian DTPS</a><br>
                        <a href="../sdm/pkm_dtps.php" class='w3-bar-item' style="color:white;">PkM DTPS</a><br>
                        <a href="../sdm/ki_dtps.php" class='w3-bar-item' style="color:white;">Karya Ilmiah DTPS</a><br>
                        <a href="../sdm/pkm_lainnya.php" class='w3-bar-item' style="color:white;">Luaran Penelitian / PkM Lainnya</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc3()">Keuangan, Sarana, dan Prasarana <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc3'>
                        <a href="../sarpras/penggunaan_dana.php" class='w3-bar-item' style="color:white">Pengunaan Dana</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc4()">Pendidikan <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc4'>
                        <a href="../pendidikan/pendidikan.php" class='w3-bar-item' style="color:white">Integrasi Kegiatan Penelitian dalam Pembelajaran</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc5()">Penelitian <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc5'>
                        <a href="../penelitian/penelitian_mahasiswa.php" class='w3-bar-item' style="color:white">Penelitian yang Melibatkan Mahasiswa</a>
                        <a href="../penelitian/penelitian_tesis_disertasi.php" class='w3-bar-item' style="color:white">Penelitian yang Menjadi Rujukan Tema Tesis/Disertasi</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc6()">Pengabdian Kepada Masyarakat <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc6'>
                        <a href="../abdimas/pkm_dtps_mahasiswa.php" class='w3-bar-item' style="color:white">PkM DTPS yang Melibatkan Mahasiswa</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc7()">Luaran dan Capaian Tridharma <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc7'>
                        <a href="../luaran-capaian/luaran_penelitian&pkm_mahasiswa.php" class='w3-bar-item' style="color:white">Publikasi Ilmiah Mahasiswa</a><br>
                        <a href="../luaran-capaian/luaran_penelitian_pkm_lainnya.php" class='w3-bar-item' style="color:white">Luaran Penelitian PKM Lainnya Mahasiswa</a>
                    </div>

                    <a href="../about/about.php">About US</a>

                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>
            <div class="w3-cell w3-cell-middle w3-padding">
                <img src="../image/Logo-UNPAR.png" height="100px" width="100px">
            </div>
            <div class="w3-cell w3-cell-middle w3-padding">
                <img src="../image/logo_if.png" height="100px" width="400px">
            </div>
            <div class="w3-cell w3-cell-middle w3-padding">
                <p>Program Studi Informatika</p>
                <p>Universitas Katolik Parahyangan</p>
            </div>
        </div>
        <div><!--insert here--></div>


        <!-- slide show -->

            <div class="carousel-container">
                        <div class="images slides">
                            <div class="numbertext">
                                <span class="w3-color-white w3-large w3-flat-silver w3-padding">1/3 - Computational Thinking Workshop</span>
                            </div>
                            <img src="../image/img1.jpg" style="width:100%">
                        </div>
                        <div class="images slides">
                            <div class="numbertext">
                                <span class="w3-color-white w3-large w3-flat-silver w3-padding">2/3 - CHIPS 2018</span>
                            </div>
                            <img src="../image/img2.jpg" style="width:100%">
                        </div>
                        <div class="images slides">
                            <div class="numbertext">
                                <span class="w3-color-white w3-large w3-flat-silver w3-padding">3/3 - Penggunaan IDE Terbaik</span>
                            </div>
                            <img src="../image/img3.jpeg" style="width:100%">
                        </div>
            </div>
            <br>
            <div style="text-align:center;">
                 <h1>Tim Besar II</h1> 
            </div>
            <h3>Ketua (PM): Kevin Draven</h3>
            <br>

            <table class="tg">
            <tr>
                <th class="tg-uyni" rowspan="2">No.</th>
                <th class="tg-uyni" rowspan="2">Modul</th>
                <th class="tg-uyni" rowspan="2">Jumlah Tim</th>
                <th class="tg-uyni" colspan="2">Tim</th>
                <th class="tg-uyni" rowspan="2">Ketua Tim</th>
                <th class="tg-uyni" rowspan="2">Ketua</th>
            </tr>

            <tr>
                <th class="tg-uyni" >Nama</th>
                <th class="tg-uyni" >NPM</th>
            </tr>

            <tr>
                <td class="tg-9wq8" rowspan="4">1.</td>
                <td class="tg-9wq8" rowspan="4">Halaman utama/home(Termasuk menu-menu),<br>
                Visi-Misi,<br>
                Tata Pamong, Tata Kelola, dan Kerjasama,<br>
                Mahasiswa</td>
                <td class="tg-9wq8" rowspan="4">1</td>
                <td class="tg-9wq8">Kelvin Adrian</td>
                <td class="tg-9wq8">2017730043</td>
                <td class="tg-9wq8" rowspan="4">Kelvin Adrian</td>
                <td class="tg-9wq8" rowspan="4">Kelvin Adrian</td>
            </tr>


            <tr>
                <td class="tg-9wq8">William Oktavianus</td>
                <td class="tg-9wq8">2017730010</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Yosef Panji Pangestu</td>
                <td class="tg-9wq8">2017730074</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Dio Antares</td>
                <td class="tg-9wq8">2017730003</td>
            </tr>

            <tr>
                <td class="tg-9wq8" rowspan="7">2.</td>
                <td class="tg-9wq8" rowspan="7">Sumber Daya Manusia, <br>
                 Keuangan, Sarana Dan Prasarana’ Penelitian, <br>
                 Pengabdian Kepada Masyarakat</td>
                <td class="tg-9wq8" rowspan="3">1</td>
                <td class="tg-9wq8">David</td>
                <td class="tg-9wq8">2017730015</td>
                <td class="tg-9wq8" rowspan="3">David</td>
                <td class="tg-9wq8" rowspan="7">Wang</td>
            </tr>


            <tr>
                <td class="tg-9wq8">Wang</td>
                <td class="tg-9wq8">2017730025</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Nicholas</td>
                <td class="tg-9wq8">2017730018</td>
            </tr>

            <tr>
                <td class="tg-9wq8" rowspan="4">1</td>
                <td class="tg-9wq8">Kelvin Dravin</td>
                <td class="tg-9wq8">2017730022</td>
                <td class="tg-9wq8" rowspan="4">Henrico Leodra</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Kelvin Draven</td>
                <td class="tg-9wq8">2017730023</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Jodi Tanato</td>
                <td class="tg-9wq8">2017730037</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Henrico Leodra</td>
                <td class="tg-9wq8">2017730038</td>
            </tr>

            <tr>
                <td class="tg-9wq8" rowspan="4">3.</td>
                <td class="tg-9wq8" rowspan="4">Pendidikan</td>
                <td class="tg-9wq8" rowspan="4">1</td>
                <td class="tg-9wq8">Stephen Hadi</td>
                <td class="tg-9wq8">2017730016</td>
                <td class="tg-9wq8" rowspan="4">Stephen Hadi</td>
                <td class="tg-9wq8" rowspan="4">Stephen Hadi</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Edwin Pranajaya</td>
                <td class="tg-9wq8">2017730027</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Cristopher William</td>
                <td class="tg-9wq8">2017730034</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Joseph Cliff</td>
                <td class="tg-9wq8">2017730046</td>
            </tr>


            <tr>
                <td class="tg-9wq8" rowspan="8">4.</td>
                <td class="tg-9wq8" rowspan="8">Luaran Dan Capaian Tridharma</td>
                <td class="tg-9wq8" rowspan="4">1</td>
                <td class="tg-9wq8">Vinson Tandra</td>
                <td class="tg-9wq8">2016730042</td>
                <td class="tg-9wq8" rowspan="4">Muhamad Rizky</td>
                <td class="tg-9wq8" rowspan="8">Reynaldi Rahadian</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Giovanni Anggasta</td>
                <td class="tg-9wq8">2016730049</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Laras Octa</td>
                <td class="tg-9wq8">2016730052</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Muhamad Rizky</td>
                <td class="tg-9wq8">2016730085</td>
            </tr>

            <tr>
                <td class="tg-9wq8" rowspan="4">1</td>
                <td class="tg-9wq8">Thomas Christian</td>
                <td class="tg-9wq8">2016730027</td>
                <td class="tg-9wq8" rowspan="4">Reynaldi Rahadian</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Reynaldi Rahadian</td>
                <td class="tg-9wq8">2016730028</td>
            </tr>

            <tr>
                <td class="tg-9wq8">Naufal Muhammad</td>
                <td class="tg-9wq8">2016730033</td>
            </tr>
            
            <tr>
                <td class="tg-9wq8">Muharodan Sidik</td>
                <td class="tg-9wq8">2016730089</td>
            </tr>

            </table>
            <br><br>

            <div class="footer">
                <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
            </div>
    </body>
    <script type="text/javascript" src="../script/script.js"></script>
</html>