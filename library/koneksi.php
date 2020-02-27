 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_cafe";

    // Membuat Koneksi
    $koneksidb = mysqli_connect($servername, $username, $password,  $database) or die ("Koneksi MySQL Gagal! ". mysqli_connect_error());

    // Memilih Database
    mysqli_select_db($koneksidb, "db_cafe") or die ("Database $database tidak ditemukan!");
?> 