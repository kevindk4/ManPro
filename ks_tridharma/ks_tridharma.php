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
                <a href="../ks_tridharma/ks_tridharma.php">Tata Pamong, Tata Kelola dan Kerja Sama</a>

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
    <div>

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
            $internasional = 0;
            $nasional = 0;
            $lokal = 0;
            $conn = new DB();
            $result = $conn->executeStoredProcedure("SELECT * FROM Kerjasama", []);

            foreach ($result as $key => $value) {
                $null = false;
                $interval = null;
                if ($value[5] == null || $value[6] == null) {
                    $null = true;
                } else {
                    $interval = date_diff($value[6], $value[5]);
                }

                echo "<tr>";
                $key = $key + 1;
                echo "<td>" . $key . "</td>";
                echo "<td>" . $value[1] . "</td>";
                if ($value[2] == "Internasional") {
                    $internasional = $internasional + 1;
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td> - </td>";
                    echo "<td> - </td>";
                } else if ($value[2] == "Nasional") {
                    $nasional = $nasional + 1;
                    echo "<td> - </td>";
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td> - </td>";
                } else {
                    $lokal = $lokal + 1;
                    echo "<td> - </td>";
                    echo "<td> - </td>";
                    echo "<td>" . $value[2] . "</td>";
                }
                echo "<td>" . $value[3] . "</td>";
                echo "<td>" . $value[4] . "</td>";
                if ($interval != null) {
                    echo "<td> " . $interval->days . " hari </td>";
                } else {
                    echo "<td> Tidak ada informasi </td>";
                }
                echo "<td>" . $value[7] . "</td>";
                echo "</tr>";
            }

            $dataPoints = array(
                array("label" => "Internasional", "y" => $internasional),
                array("label" => "Nasional", "y" => $nasional),
                array("label" => "Lokal", "y" => $lokal)
            );
            ?>
        </table>
    </div>

    <br>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <div class="footer">
        <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
    </div>
</body>
<script type="text/javascript" src="../script/script.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Kerjasama Tridharma"
            },
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
    }
</script>

</html>