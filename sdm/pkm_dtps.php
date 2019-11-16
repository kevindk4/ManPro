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
    <title>PkM DTPS</title>
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
                        <a href="profil_dosen.php" class='w3-bar-item' style="color:white;">Profil Dosen</a><br>
                        <a href="dosen_pembimbing_utama.php" class='w3-bar-item' style='color:white'>Dosen Pembimbing Utama Tugas Akhir</a><br>
                        <a href="ewmp_dosen.php" class='w3-bar-item' style="color:white;">EWMP Dosen Tetap Perguruan Tinggi</a><br>
                        <a href="dosen_tidak_tetap.php" class='w3-bar-item' style="color:white;">Dosen Tidak Tetap</a><br>
                        <a href="rekognisi_dtps.php" class='w3-bar-item' style="color:white;">Rekognisi DTPS</a><br>
                        <a href="penelitian_dtps.php" class='w3-bar-item' style="color:white;">Penelitian DTPS</a><br>
                        <a href="pkm_dtps.php" class='w3-bar-item' style="color:white;">PkM DTPS</a><br>
                        <a href="ki_dtps.php" class='w3-bar-item' style="color:white;">Karya Ilmiah DTPS</a><br>
                        <a href="pkm_lainnya.php" class='w3-bar-item' style="color:white;">Luaran Penelitian / PkM Lainnya</a>
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
    <div id="table">
        <h1>Pengabdian kepada Masyarakat DTPS</h1>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sumber Pembiayaan</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
            <!-- Tinggal dilengkapin si filenya -->
            <?php
            require_once '../DBConnection.php';
            $conn = new DB();
            $hasil = $conn->executeStoredProcedure("EXEC Tabel3b3_PKMDTPS", []);
            $i = 1;
            $jumlah1 = 0;
            $jumlah2 = 0;
            $jumlah3 = 0;
            $jumlah4 = 0;
            foreach ($hasil as $row) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                $i = $i + 1;
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td>" . $row[4] . "</td>";
                $jumlah1 += $row[1];
                $jumlah2 += $row[2];
                $jumlah3 += $row[3];
                $jumlah4 += $row[4];
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan="2">Jumlah</td>
                <?php
                echo "<td>" . $jumlah1 . "</td>";
                echo "<td>" . $jumlah2 . "</td>";
                echo "<td>" . $jumlah3 . "</td>";
                echo "<td>" . $jumlah4 . "</td>";
                ?>
            </tr>
        </table>

        <h1>Publikasi Ilmiah DTPS</h1>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Media Publikasi</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jurnal nasional tidak terakreditasi</td>
                <?php
                $jumlah1 = 0;
                $jumlah2 = 0;
                $jumlah3 = 0;
                $jumlah4 = 0;

                $tulisan1 = "Jurnal nasional tidak terakreditasi";
                $hasil2 = $conn->executeStoredProcedure( "EXEC Tabel3b4_PartJurnal", []); 
                    if($hasil2[0][0] == $tulisan1)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[0][$i]."</td>";

                            if($i == 1){
                                $jumlah1+= $hasil2[0][$i];
                            }else if($i == 2){
                                $jumlah2+= $hasil2[0][$i];
                            }else if($i == 3){
                                $jumlah3+= $hasil2[0][$i];
                            }else{
                                $jumlah4+= $hasil2[0][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>2</td>
                <td>Jurnal nasional terakreditasi</td>
                <?php
                $tulisan2 = "Jurnal nasional terakreditasi";
                    if($hasil2[1][0] == $tulisan2)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[1][$i]."</td>";

                            if($i == 1){
                                $jumlah1+= $hasil2[1][$i];
                            }else if($i == 2){
                                $jumlah2+= $hasil2[1][$i];
                            }else if($i == 3){
                                $jumlah3+= $hasil2[1][$i];
                            }else{
                                $jumlah4+= $hasil2[1][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>3</td>
                <td>Jurnal internasional</td>
                <?php
                $tulisan3 = "Jurnal internasional";
                    if($hasil2[2][0] == $tulisan3)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[2][$i]."</td>";

                            if($i == 1){
                                $jumlah1+= $hasil2[2][$i];
                            }else if($i == 2){
                                $jumlah2+= $hasil2[2][$i];
                            }else if($i == 3){
                                $jumlah3+= $hasil2[2][$i];
                            }else{
                                $jumlah4+= $hasil2[2][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>4</td>
                <td>Jurnal internasional bereputasi</td>
                <?php
                $tulisan4 = "Jurnal internasional bereputasi";
                    if($hasil2[3][0] == $tulisan4)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[3][$i]."</td>";

                            if($i == 1){
                                $jumlah1+= $hasil2[3][$i];
                            }else if($i == 2){
                                $jumlah2+= $hasil2[3][$i];
                            }else if($i == 3){
                                $jumlah3+= $hasil2[3][$i];
                            }else{
                                $jumlah4+= $hasil2[3][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>5</td>
                <td>Seminar wilayah/lokal/perguruan tinggi</td>
                <?php
                $tulisan5 = "Seminar wilayah/lokal/perguruan tinggi";
                    if($hasil2[4][0] == $tulisan5)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[4][$i]."</td>";

                            if($i == 1){
                                $jumlah1+= $hasil2[4][$i];
                            }else if($i == 2){
                                $jumlah2+= $hasil2[4][$i];
                            }else if($i == 3){
                                $jumlah3+= $hasil2[4][$i];
                            }else{
                                $jumlah4+= $hasil2[4][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>6</td>
                <td>Seminar nasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>7</td>
                <td>Seminar internasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>8</td>
                <td>Tulisan di media massa wilayah</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>9</td>
                <td>Tulisan di media massa nasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>10</td>
                <td>Tulisan di media massa internasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <!-- Tinggal dilengkapin si filenya -->
            <tr>
                <td colspan="2">Jumlah</td>
                <?php
                    echo "<td>".$jumlah1."</td>";
                    echo "<td>".$jumlah2."</td>";
                    echo "<td>".$jumlah3."</td>";
                    echo "<td>".$jumlah4."</td>";
                ?>
            </tr>
        </table>

        <h1>Pagelaran/pameran/presentasi/publikasi ilmiah DTPS</h1>
        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Media Publikasi</th>
                <th colspan="3">Jumlah Judul</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>TS-2</th>
                <th>TS-1</th>
                <th>TS</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Publikasi di Jurnal nasional tidak terakreditasi</td>
                <?php

                $jumlahts2 = 0;
                $jumlahts1 = 0;
                $jumlahts = 0;
                $jumlahJumlah = 0;

                $tulisan1 = "Jurnal nasional tidak terakreditasi";
                $hasil2 = $conn->executeStoredProcedure( "EXEC Tabel3b4_PartJurnal", []); 
                    if($hasil2[0][0] == $tulisan1)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[0][$i]."</td>";

                            if($i == 1){
                                $jumlahts2+= $hasil2[0][$i];
                            }else if($i == 2){
                                $jumlahts1+= $hasil2[0][$i];
                            }else if($i == 3){
                                $jumlahts+= $hasil2[0][$i];
                            }else{
                                $jumlahJumlah+= $hasil2[0][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>2</td>
                <td>Publikasi di Jurnal nasional terakreditasi</td>
                <?php
                $tulisan2 = "Jurnal nasional terakreditasi";
                    if($hasil2[1][0] == $tulisan2)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[1][$i]."</td>";

                            if($i == 1){
                                $jumlahts2+= $hasil2[1][$i];
                            }else if($i == 2){
                                $jumlahts1+= $hasil2[1][$i];
                            }else if($i == 3){
                                $jumlahts+= $hasil2[1][$i];
                            }else{
                                $jumlahJumlah+= $hasil2[1][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>3</td>
                <td>Publikasi di Jurnal internasional</td>
                <?php
                $tulisan3 = "Jurnal internasional";
                    if($hasil2[2][0] == $tulisan3)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[2][$i]."</td>";

                            if($i == 1){
                                $jumlahts2+= $hasil2[2][$i];
                            }else if($i == 2){
                                $jumlahts1+= $hasil2[2][$i];
                            }else if($i == 3){
                                $jumlahts+= $hasil2[2][$i];
                            }else{
                                $jumlahJumlah+= $hasil2[2][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>4</td>
                <td>Publikasi di Jurnal internasional bereputasi</td>
                <?php
                $tulisan4 = "Jurnal internasional bereputasi";
                    if($hasil2[3][0] == $tulisan4)
                    {
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td>".$hasil2[3][$i]."</td>";

                            if($i == 1){
                                $jumlahts2+= $hasil2[3][$i];
                            }else if($i == 2){
                                $jumlahts1+= $hasil2[3][$i];
                            }else if($i == 3){
                                $jumlahts+= $hasil2[3][$i];
                            }else{
                                $jumlahJumlah+= $hasil2[3][$i];
                            }
                        }
                    }else{
                        for ($i=1; $i <= 4; $i++) { 
                            echo "<td> - </td>";
                        }
                    }
                ?>
            </tr>
            <tr>
                <td>5</td>
                <td>Publikasi di Seminar wilayah/lokal/perguruan tinggi</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>6</td>
                <td>Publikasi di Seminar nasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>7</td>
                <td>Publikasi di Seminar internasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>8</td>
                <td>Pagelaran/pameran/prestasi dalam forum di tingkat wilayah</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>9</td>
                <td>Pagelaran/pameran/prestasi dalam forum di tingkat nasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <tr>
                <td>10</td>
                <td>Pagelaran/pameran/prestasi dalam forum di tingkat internasional</td>
                <?php
                    for ($i=1; $i <= 4; $i++) { 
                        echo "<td> - </td>";
                    }
                ?>
            </tr>
            <!-- Tinggal dilengkapin si filenya -->
            <?php

            ?>
            <tr>
                <td colspan="2">Jumlah</td>
                <?php
                    echo "<td>".$jumlahts2."</td>";
                    echo "<td>".$jumlahts1."</td>";
                    echo "<td>".$jumlahts."</td>";
                    echo "<td>".$jumlahJumlah."</td>";
                ?>
            </tr>
        </table>
    </div><br><br><br><br>
    <div class="footer">
        <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
    </div>
</body>
<script type="text/javascript" src="../script/script.js"></script>

</html>