<?php
session_start();
include "library/koneksi.php";
# MEMBACA TOMBOL KOGIN DARI FILE login.php
if(isset($_POST['btnLogin'])){
	# Baca variabel form
	$txtUser 		= $_POST['txtNama'];
	$txtUser 		= str_replace("'","&acute;",$txtUser);
	
	$txtPassword	= $_POST['txtPassword'];
	$txtPassword	= str_replace("'","&acute;",$txtPassword);
	
		# LOGIN CEK KE TABEL USER LOGIN
		$mySql = "SELECT * FROM tb_user WHERE username='$txtUser' AND password='$txtPassword'";
		$myQry = mysqli_query($koneksidb, $mySql) or die ("Query Salah : ".mysqli_error());
		$myData= mysqli_fetch_array($myQry);
		
		# JIKA LOGIN SUKSES
		if(mysqli_num_rows($myQry) >=1) {
			// Menyimpan Kode yang Login
			$_SESSION['SES_LOGIN'] = $myData['id']; 
			// Refresh
			echo "<meta http-equiv='refresh' content='0; url=userbooking.php'>";
		}
		else {
			header("location:login.php?pesan=gagal");
		}
    }
     // End POST
?>
 
