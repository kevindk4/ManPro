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
                        <a href="../home/ks_tridharma(pendidikan).php" class="w3-bar-item" style="color: white">Kerjasama Tridharma(Pendidikan)</a><br>
                        <a href="../home/ks_tridharma(penelitian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Penelitian)</a><br>
                        <a href="../home/ks_tridharma(Pengabdian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pengabdian kepada Masyarakat)</a>
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
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc6()">Pengabdian Kepada Masyarakat <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc6'>
                        <a href="../abdimas/pkm_dtps_mahasiswa.php" class='w3-bar-item' style="color:white">PkM DTPS yang Melibatkan Mahasiswa</a>
                    </div>

                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc7()">Luaran dan Capaian Tridharma <i class="fa fa-caret-down"></i></a>
                    <div class='w3-hide w3-blue w3-card' id='demoAcc7'>
                        <a href="luaran_penelitian&pkm_mahasiswa.php" class='w3-bar-item' style="color:white">Publikasi Ilmiah Mahasiswa</a><br>
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
        <div>
        <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>A. Capaian Pembelajaran</h2>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th colspan="3">Indeks Prestasi Kumulatif (IPK)</th>
                    <!-- <th rowspan="2"> Jumlah</th> -->

                </tr>
                <tr>
                    <td>Min</td>
                    <td>Rata-Rata</td>
                    <td>Maks</td>
                </tr>
                <?php
                // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>B. Prestasi Mahasiswa</h2>
            </div>

            <div class="w3-panel w3-gray ">
                <h5>Prestasi Akademik</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Kegiatan</th>
                    <th rowspan="2">Tahun Perolehan</th>  
                    <th colspan="3">Tingkat</th>
                    <th rowspan="2"> Prestasi Yang Dicapai</th>

                </tr>
                <tr>
                    <td>Lokal/Wilayah</td>
                    <td>Nasional</td>
                    <td>Internasional</td>
                </tr>
                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>
        

        <div class="w3-container">

            <div class="w3-panel w3-gray ">
                <h5>Prestasi Non Akademik</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Kegiatan</th>
                    <th rowspan="2">Tahun Perolehan</th>  
                    <th colspan="3">Tingkat</th>
                    <th rowspan="2"> Prestasi Yang Dicapai</th>

                </tr>
                <tr>
                    <td>Lokal/Wilayah</td>
                    <td>Nasional</td>
                    <td>Internasional</td>
                </tr>
                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>C. Efektivitas dan Produktivitas Pendidikan</h2>
            </div>

            <div class="w3-panel">
                <h5>Diisi oleh pengusul dari Program Studi pada Program Sarjana/Sarjana Terapan :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">Tahun Masuk</th>
                    <th rowspan="2">Jumlah Mahasiswa Diterima</th>
                    <th colspan="7">Jumlah Mahasiswa yang Lulus pada</th>
                    <th rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
                    <th rowspan="2">Rata-rata Masa Studi</th>

                </tr>
                <tr>
                    <td>Akhir TS-6</td>
                    <td>Akhir TS-5</td>
                    <td>Akhir TS-4</td>
                    <td>Akhir TS-3</td>
                    <td>Akhir TS-2</td>
                    <td>Akhir TS-1</td>
                    <td>Akhir TS</td>
                </tr>
                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>D. Daya Saing Lulusan</h2>
            </div>

            <div class="w3-panel">
                <h5>Tabel 8.d.1) Waktu Tunggu Lulusan :</h5>
            </div>

            <div class="w3-panel">
                <h5>Diisi oleh pengusul dari Program Studi pada Program Sarjana :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>  
                    <th colspan="3">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan</th>
                </tr>
                <tr>
                    <td>WT < 6 bulan</td>
                    <td>6 ≤ WT ≤ 18 bulan</td>
                    <td>WT > 18 bulan</td>
                </tr>

                <?php
                 //connection
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">

            <div class="w3-panel">
                <h5>Tabel 8.d.2) Kesesuaian Bidang Kerja Lulusan :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>  
                    <th colspan="3">Jumlah Lulusan Terlacak dengan Tingkat Kesesuaian Bidang Kerja</th>
                </tr>
                <tr>
                    <td>Rendah</td>
                    <td>Sedang</td>
                    <td>Tinggi</td>
                </tr>

                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>


        <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>E. Kinerja Lulusan</h2>
            </div>

            <div class="w3-panel">
                <h5>Tabel 8.e.1) Tempat Kerja Lulusan :</h5>
            </div>

            <div class="w3-panel">
                <h5>Diisi oleh pengusul dari Program Studi pada Program Sarjana :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">Jumlah Lulusan</th>
                    <th rowspan="2">Jumlah Lulusan yang Terlacak</th>  
                    <th colspan="3">Jumlah Lulusan Terlacak yang Bekerja berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
                </tr>
                <tr>
                    <td>Lokal/ Wilayah/ Berwirausaha tidak Berizin</td>
                    <td>Nasional/ Berwirausaha Berizin</td>
                    <td>Multinasiona/ Internasional</td>
                </tr>

                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

         <div class="w3-container">

            <div class="w3-panel">
                <h5>Tabel 8.e.2) Kepuasan Pengguna :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jenis Kemampuan</th>
                    <th colspan="4">Tingkat Kepuasan Pengguna (%)</th>
                    <th rowspan="2">Rencana Tindak Lanjut oleh UPPS/PS</th>  
                </tr>
                <tr>
                    <td>Sangat Baik</td>
                    <td>Baik</td>
                    <td>Cukup</td>
                    <td>Kurang</td>
                </tr>

                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

         <div class="w3-container">

            <div class="w3-panel w3-flat-peter-river w3-large">
                <h2>F. Luaran Penelitian dan PkM Mahasiswa</h2>
            </div>

            <div class="w3-panel">
                <h5>Tabel 8.f.1) Publikasi Ilmiah mahasiswa :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Media Publikasi</th>
                    <th colspan="3">Jumlah Judul</th>
                    <th rowspan="2">Jumlah</th>  
                </tr>
                <tr>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                </tr>

                <?php
                 //connection
                 // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">
        
            <div class="w3-panel">
                <h5>Tabel 8.f.1) Pagelaran/pameran/presentasi/publikasi Ilmiah mahasiswa :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Jenis</th>
                    <th colspan="3">Jumlah Judul</th>
                    <th rowspan="2">Jumlah</th>  
                </tr>
                <tr>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                </tr>

                <?php
                //connection
                // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">
        
            <div class="w3-panel">
                <h5>Tabel 8.f.2) Karya ilmiah mahasiswa yang disitasi :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Mahasiswa</th>
                    <th rowspan="2">Judul Artikel yang Disitasi (Jurnal/Buku, Volume, Tahun, Nomor, Halaman)</th>  
                    <th rowspan="2">Jumlah Sitasi</th>
                </tr>

                <?php
                //connection
                // $conn = mysqli_connect("localhost", "root", "luaran");
                //     // Check connection
                //     if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                //     } 
                //     $sql = "SELECT * FROM pegawai INNER JOIN  role on role.idRole = pegawai.idRole";
                //     $result = $conn->query($sql);
                //     if ($result->num_rows > 0) {
                //     // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //                 echo "<td>".$row['idPegawai']."</td>";
                //                 echo "<td>".$row['nama']."</td>";
                //                 echo "<td>".$row['username']."</td>";
                //                 echo "<td>".$row['namaRole']."</td>";
                //                 echo "</tr>";
                // }
                // echo "</table>";
                // } else { echo "0 results"; }
                // $conn->close();
                ?>
                </table>
                <br>
            <div>     
        </div>

        <div class="w3-container">
        
            <div class="w3-panel">
                <h5>Tabel 8.f.3) Produk/jasa yang dihasilkan mahasiswa yang diadopsi oleh industri/masyarakat :</h5>
            </div>

            <table class="w3-white">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Mahasiswa</th>
                    <th rowspan="2">Nama Produk/Jasa</th>  
                    <th rowspan="2">Deskripsi Produk/Jasa</th>
                    <th rowspan="2">Bukti</th>
                </tr>

                <?php
                //connection
                
                ?>
                </table>
                <br>
            <div>     
        </div>


        <div class="footer">
            <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
        </div>
    </body>
    <script type="text/javascript" src="../script/script.js"></script>
</html>