<?php
    require '../DBConnection.php';
    $conn = new DB();
    
    $queryForChart = 
    "CREATE TABLE #temp(col1 int,col2 text,col3 text,col4 text,col5 int,col6 int,col7 text,col8 text,col9 text);
    Insert into #temp(col1,col2,col3,col4,col5,col6,col7,col8,col9) EXEC Tabel5b_IntegrasiKegiatanPenelitianPkM;
    SELECT * FROM
    (SELECT COUNT(*)AS 'MATERI PEMBELAJARAN COUNT' FROM #temp WHERE col9 LIKE '%Materi Pembelajaran%')t CROSS JOIN 
    (SELECT COUNT(*)AS 'TOPIK PENELITIAN COUNT' FROM #temp WHERE col9 LIKE '%Topik Penelitian%')a cross join
    (SELECT COUNT(*)AS 'STUDI KASUS COUNT' FROM #temp WHERE col9 LIKE '%Studi Kasus%')b;"; 
  

    $chartResult = $conn->executeStoredProcedure($queryForChart,[]);
    $divider=0;
    foreach($chartResult[0] as $key =>$value){
        $divider += $value;
    }
    $datadummy = array(
        array("label"=>"Materi Pembelajaran","y"=> ($chartResult[0][0]/$divider) * 100),
        array("label"=>"Topik Penelitian","y"=> ($chartResult[0][1]/$divider) * 100),
        array("label"=>"Studi Kasus","y"=> ($chartResult[0][2]/$divider) * 100)
    );   
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pendidikan</title>

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
                    <a href="../home/ks_tridharma(pendidikan).php" class="w3-bar-item" style="color: white">Kerjasama Tridharma(Pendidikan)</a><br>
                    <a href="../home/ks_tridharma(penelitian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Penelitian)</a><br>
                    <a href="../home/ks_tridharma(Pengabdian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pengabdian kepada Masyarakat)</a>
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
                    <a href="pendidikan.php" class='w3-bar-item' style="color:white">Integrasi Kegiatan Penelitian dalam Pembelajaran</a>
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
        <h2>Integrasi Kegiatan Penelitian dalam Pembelajaran</h2>
        <br>
        <script>
        window.onload = function(){
            var chart = new CanvasJS.Chart("chartContainer",{
                animationEnabled: true,
                title:{
                    text:"Pie chart Integrasi Kegiatan Penelitian Dalam Pembelajaran"
                },
                subtitles: [{
                    text: "Bentuk Integrasi"
                }],
                data: [{
                    type:"pie",
                    yValueFormatString: "#,##0.00\"%\"",
                    indexLabel : "{label} ({y})",
                    dataPoints: <?php echo json_encode($datadummy,JSON_NUMERIC_CHECK);?>
                }]
            });
            chart.render();
            }
        </script>
        <div id="chartContainer" style="height:370px;width:100%;"></div>
        <table>
            <tr>
                <th>No.</th>
                <th>Judul Penelitian/PkM</th>
                <th>Nama Dosen</th>
                <th>Mata Kuliah</th>
                <th>Bentuk Integrasi</th>
            </tr>
            <?php
                
                $result = $conn->executeStoredProcedure("EXEC Tabel5b_IntegrasiKegiatanPenelitianPkM",[]);
                foreach ($result as $key =>$value){
                    echo "<tr>";
                    $key = $key+1;
                    echo "<td>".$key."</td>";
                    if($value[7] == null){
                        echo "<td style='width:40%'>-</td>";
                    }else{
                        echo "<td style='width:40%'>".$value[7]."</td>";
                    }
                    echo "<td>" . $value[3]."</td>";
                    echo "<td>" . $value[6]."</td>";
                    echo "<td>" . $value[8]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <div class="footer">
        <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
    </div>
</body>
<script type="text/javascript" src="../script/script.js"></script>

</html>