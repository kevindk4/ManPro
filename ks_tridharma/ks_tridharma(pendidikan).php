<?php
require "../DBConnection.php"
?>
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
    <title>KS Tridharma Pengabdian</title>

</head>

<body>
    <div class="heading w3-flat-peter-river">
        <div class="w3-cell w3-cell-middle w3-padding">
            <div id="mySidenav" class="sidenav">
                <div id="head_slide_navbar">
                    <img src="../image/logo_if.png" height="50%" width="50%">
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="../home/home.php">Home</a>
                <a href="../home/visi_misi.php">Visi dan Misi</a>
                <a href="#" class="w3-block w3-left-align" onclick="myAccFunc()">
                    Tata Pamong, Tata Kelola dan Kerja Sama <i class="fa fa-caret-down"></i>
                </a>
                <div id="demoAcc" class="w3-hide w3-blue w3-card">
                    <a href="ks_tridharma(pendidikan).php" class="w3-bar-item" style="color: white">Kerjasama Tridharma(Pendidikan)</a><br>
                    <a href="ks_tridharma(penelitian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Penelitian)</a><br>
                    <a href="ks_tridharma(Pengabdian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pengabdian kepada Masyarakat)</a>
                </div>

                <a href="#" class="w3-block w3-left-align" onclick="myAccFuncc()">
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
    <div>
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }

            .tg td {
                font-family: Arial, sans-serif;
                font-size: 14px;
                padding: 10px 5px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: black;
            }

            .tg th {
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                padding: 10px 5px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: black;
            }

            .tg .tg-cly1 {
                text-align: left;
                vertical-align: middle
            }

            .tg .tg-lboi {
                border-color: inherit;
                text-align: left;
                vertical-align: middle
            }

            .tg .tg-9wq8 {
                border-color: inherit;
                text-align: center;
                vertical-align: middle
            }

            .tg .tg-uyni {
                background-color: #c0c0c0;
                color: #000000;
                border-color: inherit;
                text-align: center;
                vertical-align: middle
            }

            .tg .tg-nrix {
                text-align: center;
                vertical-align: middle
            }

            .tg .tg-0lax {
                text-align: left;
                vertical-align: top
            }
        </style>
        <table class="tg">
            <tr>
                <th class="tg-uyni" rowspan="2">No</th>
                <th class="tg-uyni" rowspan="2">Lembaga<br>Mitra</th>
                <th class="tg-uyni" colspan="3">Tingkat</th>
                <th class="tg-uyni" rowspan="2">Judul Kegiatan Kerjasama</th>
                <th class="tg-uyni" rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                <th class="tg-uyni" rowspan="2">Waktu dan Durasi</th>
                <th class="tg-uyni" rowspan="2">Bukti Kerjasama</th>
            </tr>

            <tr>
                <td class="tg-uyni">Internasional</td>
                <td class="tg-uyni">Nasional</td>
                <td class="tg-uyni">Lokal</td>
            </tr>

            <?php
            $conn = new DB();
            $result = $conn->executeStoredProcedure("SELECT * FROM Kerjasama", []);

            foreach ($result as $key => $value) {
                echo "<tr>";
                $key = $key + 1;
                echo "<td>" . $key . "</td>";
                echo "<td>" . $value[1] . "</td>";
                if ($value[2] == "Internasional") {
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td> - </td>";
                    echo "<td> - </td>";
                } else if ($value[2] == "Nasional") {
                    echo "<td> - </td>";
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td> - </td>";
                } else {
                    echo "<td> - </td>";
                    echo "<td> - </td>";
                    echo "<td>" . $value[2] . "</td>";
                }
                echo "<td>" . $value[3] . "</td>";
                echo "<td>" . $value[4] . "</td>";
                echo "<td>" . $value[5]->format("Y-m-d") . "</td>";
                echo "<td>" . $value[6]->format("Y-m-d") . "</td>";
                echo "<td>" . $value[7] . "</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td class="tg-uyni">1</td>
                <td class="tg-uyni">2</td>
                <td class="tg-uyni">3</td>
                <td class="tg-uyni">4</td>
                <td class="tg-uyni">5</td>
                <td class="tg-uyni">6</td>
                <td class="tg-uyni">7</td>
                <td class="tg-uyni">8</td>
                <td class="tg-uyni">9</td>
            </tr>
            <tr>
                <td class="tg-lboi" colspan="9">Pendidikan</td>
            </tr>
            <tr>
                <td class="tg-9wq8">1</td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
            </tr>
            <tr>
                <td class="tg-9wq8">2</td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
            </tr>
            <tr>
                <td class="tg-9wq8">3</td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
            </tr>
            <tr>
                <td class="tg-9wq8">4</td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
                <td class="tg-9wq8"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-cly1" colspan="9">Penelitian</td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="9">Pengabdian Kepada Masyarakat</td>
            </tr>
            <tr>
                <td class="tg-nrix">1</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">2</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">3</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">4</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
            </tr>
            <tr>
                <td class="tg-nrix">5</td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <td class="tg-nrix"></td>
                <!--dio antares-->
            </tr>
        </table>
    </div>
    <div class="footer">
        <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
    </div>
</body>
<script type="text/javascript" src="../script/script.js"></script>

</html>