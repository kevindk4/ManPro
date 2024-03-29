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
        <title>Luaran dan Capaian</title>

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
                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc()">
                        Tata Pamong, Tata Kelola dan Kerja Sama <i class="fa fa-caret-down"></i>
                    </a>
                    <div id="demoAcc" class="w3-hide w3-blue w3-card">
                        <a href="../ks_tridharma/ks_tridharma(pendidikan).php" class="w3-bar-item" style="color: white">Kerjasama Tridharma(Pendidikan)</a><br>
                        <a href="../ks_tridharma/ks_tridharma(penelitian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Penelitian)</a><br>
                        <a href="../ks_tridharma/ks_tridharma(Pengabdian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pengabdian kepada Masyarakat)</a>
                    </div>

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
                        <a href="luaran_penelitian&pkm_mahasiswa.php" class='w3-bar-item' style="color:white">Publikasi Ilmiah Mahasiswa</a><br>
                        <a href="capaian_pembelajaran.php" class='w3-bar-item' style="color:white">Capaian Pembelajaran</a>
                        <a href="prestasi_akademik_nonakademik.php" class='w3-bar-item' style="color:white">Prestasi Akademik dan Non-Akademik</a>
                        <a href="luaran_penelitian_pkm_lainnya.php" class='w3-bar-item' style="color:white">Luaran Penelitian PKM Lainnya Mahasiswa</a>
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
        <h1> Tempat Kerja Lulusan </h1>
        <table>
            <tr>
            <th>Tahun</th>
                <th>Level</th>
                <th>Jumlah Lulusan</th>
            </tr>
            <?php
              $servername = "10.100.70.70\akreditasi2020";
              $username = "guestManPro";
              $password = "Testing123";
              $dbname = "akreditasi2020";
              $dbConInfo= array("Database"=>$dbname,"UID"=>$username,"PWD"=>$password);
            $conn = sqlsrv_connect( $servername, $dbConInfo );
            if( $conn === false ) {
                die( print_r( sqlsrv_errors(), true));
            }
            
            $sql = "SELECT TOP (1000) [ts]
            ,[level]
            ,[count]
        FROM [Akreditasi2020].[dbo].[v_8e1]";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                echo "<tr>";
                echo "<td>".$row['ts']."</td>";
                echo "<td>".$row['level']."</td>";
                echo "<td>".$row['count']."</td>";
                echo "</tr>";
            }
            
            sqlsrv_free_stmt( $stmt);
            

            ?>
            </table>
    </div>


        <div id="table">
        <h1>Kepuasan Pengguna </h1>
        <table>
            <tr>
            <th>Jenis Kemampuan</th>
            <th>Baik</th>
            <th>Cukup</th>
            <th>Kurang</th>
            <th>Sangat Baik</th>
            </tr>

            <?php
              $servername = "10.100.70.70\akreditasi2020";
              $username = "guestManPro";
              $password = "Testing123";
              $dbname = "Akreditasi2020";
              $dbConInfo= array("Database"=>$dbname,"UID"=>$username,"PWD"=>$password);
                $conn = sqlsrv_connect( $servername, $dbConInfo );
                if( $conn === false ) {
                    die( print_r( sqlsrv_errors(), true));
                }
                
                //etika

                $sql1 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_etika]";
                $stmt = sqlsrv_query( $conn, $sql1 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }
                echo "<tr>Etika</tr>";
                echo "<tr>";

                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                               
                    echo "<td>".$row['count']."</td>"; 
                }
                echo "</tr>";
                
            //Keahlian pada bidang ilmu

                $sql2 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_bidang]";
                $stmt = sqlsrv_query( $conn, $sql2 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                echo "<tr>Keahlian pada bidang ilmu</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>"; 

                }
                echo "</tr>";
                

                //Kemampuan berbahasa asing 

                $sql3 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_bahasa]";
                $stmt = sqlsrv_query( $conn, $sql3 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                echo "<tr>Kemampuan berbahasa asing</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>";  
                    
                }
                echo "</tr>";

                //Penggunaan teknologi informasi

                $sql4 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_teknologi]";
                $stmt = sqlsrv_query( $conn, $sql4 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                echo "<tr>Penggunaan teknologi informasi</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>";
                    
                }
                echo "</tr>";

                //Kemampuan berkomunikas

                $sql5 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_komunikasi]";
                $stmt = sqlsrv_query( $conn, $sql5 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }
                
                echo "<tr>Kemampuan berkomunikasi</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>";
                    
                }
                echo "</tr>";

                //Kerjasama tim 

                $sql6 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_teamwork]";
                $stmt = sqlsrv_query( $conn, $sql6 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                echo "<tr>Kerjasama tim</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>";
                    
                }
                echo "</tr>";

                //Pengembangan diri 

                $sql7 = "SELECT TOP (1000) [count]
            
            FROM [Akreditasi2020].[dbo].[v_8e2_improve]";
                $stmt = sqlsrv_query( $conn, $sql7 );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                echo "<tr>Pengembangan diri</tr>";
                echo "<tr>";
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                
                    echo "<td>".$row['count']."</td>";
                    
                }
                echo "</tr>";

                sqlsrv_free_stmt( $stmt);
                


            ?>
            </table>
    </div>

    
        <div class="footer">
            <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
        </div>
    </body>
    <script type="text/javascript" src="../script/script.js"></script>
</html>