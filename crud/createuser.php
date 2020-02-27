<?php
    include '../library/koneksi.php';


    if(isset($_POST['daftar'])){
        $user     = $_POST['txtUser'];
        $nama     = $_POST['txtNama'];
        $email    = $_POST['txtEmail'];
        $password   = $_POST['txtSandi'];
        $hp         = $_POST['txtHp'];
        $alamat     = $_POST['txtAlamat'];
        
        $MyQRY = mysqli_query($koneksidb,"INSERT INTO tb_user VALUES('','$user','$nama','$email','$password','$hp','$alamat')");
        
        if($MyQRY){
                echo "<meta http-equiv='refresh' content='0; url=../userbooking.php'>";
        } else{
            echo "Gagal!".mysqli_error($koneksidb);
        }
    }
?>