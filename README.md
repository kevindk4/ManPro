# ManPro

## Set Up Connection
1. cek versi php dan cek windowsnya berapa bit <br>
![image](https://user-images.githubusercontent.com/44316758/67177368-7876c780-f3f8-11e9-8ba9-141191b2e2a6.png) <br>
Cara Mengecheck -> buat file php baru, simpan di xampp -> htdocs. Berisi 
<code>'<?php echo phpinfo();?>'</code> <br>
2. buka file SQLSRV_Readme <br>
![image](https://user-images.githubusercontent.com/44316758/67177420-9fcd9480-f3f8-11e9-9105-81cedee45c47.png) <br>
3. pilih driver file dan pilih yang thread safe <br>
![image](https://user-images.githubusercontent.com/44316758/67177438-ba077280-f3f8-11e9-96d0-ad2f4ca3460f.png) <br>
4. copy file yang dipilih ke folder xampp/php/ext <br>
![image](https://user-images.githubusercontent.com/44316758/67177481-ef13c500-f3f8-11e9-91ac-f7cbcc9bde95.png) <br>
5. buka file php.ini <br>
![image](https://user-images.githubusercontent.com/44316758/67177507-094da300-f3f9-11e9-859a-343c9d0c562c.png) <br>
6. tambahkan `extension=<nama_file>` (tanpa ;) di bagian Dynamic Extensions bagian Notes for Windows environments
![image](https://user-images.githubusercontent.com/44316758/67177541-25e9db00-f3f9-11e9-9d2a-b267db8a6c7f.png)
