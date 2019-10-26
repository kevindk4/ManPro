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
                    <a href="home.php">Home</a>
                    <a href="visi_misi.php">Visi dan Misi</a>
                    <a href="#" class="w3-block w3-left-align" onclick="myAccFunc()">
                        Tata Pamong, Tata Kelola dan Kerja Sama <i class="fa fa-caret-down"></i>
                    </a>
                    <div id="demoAcc" class="w3-hide w3-blue w3-card">
                        <a href="ks_tridharma(pendidikan).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pendidikan)</a><br>
                        <a href="ks_tridharma(penelitian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Penelitian)</a><br>
                        <a href="ks_tridharma(Pengabdian).php" class="w3-bar-item" style="color: white;">Kerjasama Tridharma(Pengabdian kepada Masyarakat)</a>
                    </div>

                    <a  href="#" class="w3-block w3-left-align" onclick="myAccFuncc()">
                        Mahasiswa <i class="fa fa-caret-down"></i>
                    </a>
                    <div id="demoAccc" class="w3-hide w3-blue w3-card">
                        <a href="kualitas_input_mahasiswa.php" class="w3-bar-item" style="color: white">Kualitas Input Mahasiswa</a><br>
                        <a href="mahasiswa_asing.php" class="w3-bar-item" style="color: white">Mahasiswa Asing</a><br>
                    </div>                                            
                    <a href="../sdm/sd_mahasiswa.php">Sumber Daya Mahasiswa</a>
                    <a href="../sdm/keuangan_sarana_prasarana.php">Keuangan, Sarana, dan Prasarana</a>
                    <a href="../pendidikan/pendidikan.php">Pendidikan</a>
                    <a href="../sdm/penelitian.php">Penelitian</a>
                    <a href="../sdm/pkm.php">Pengabdian Kepada Masyarakat</a>
                    <a href="../luaran-capaian/luaran_capaian.php">Lurah dan Capaian Tridharma</a>
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
        <div class="w3-container tabs">
            <h2><b>Visi dan Misi</b></h2>
            <br>
            <div>Visi</div>
            <br>
            <div>Menjadi komunitas akademik yang unggul di bidang informatika yang memiliki kemampuan kreatif dan inovatif dan mengembangkan potensi lokal pada tataran internasional demi peningkatan martabat manusia.</div>
            <br>
            <div>Misi</div>
            <br>
            <div>Misi Program Studi Teknik Informatika Unpar adalah secara berkesinambungan dan berdasarkan nilai-nilai moral, etika, dan standar akademik yang tinggi melaksanakan:</div>
            <br> 
            <ol>
                <li>Proses pembelajaran di bidang informatika agar menghasilkan lulusan dengan kompetensi akademik yang tinggi, memiliki kemampuan kreatif dan inovatif, softskill serta etika profesional yang menonjol.</li>
                <li>Penelitian di bidang informatika untuk mendukung proses pembelajaran yang bermutu tinggi serta berkontribusi pada pengembangan ilmu bagi masyarakat nasional dan internasional dengan berupaya menggali potensi lokal.</li>
                <li>Pengabdian kepada masyarakat dengan berkontribusi untuk memajukan masyarakat dalam meningkatkan pengetahuan dan pemanfaatan teknologi informasi.</li>
            </ol>
        </div>
        <div class="footer">
            <p>Copyright <i class="fa fa-copyright"> 2019 by Tim Besar II Manpro</i></p>
        </div>
    </body>
    <script type="text/javascript" src="../script/script.js"></script>
</html>