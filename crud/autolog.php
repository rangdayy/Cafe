<?php
session_start();
    include '../library/koneksi.php';

    $txtUser 		= $_GET['txtNama'];
	$txtUser 		= str_replace("'","&acute;",$txtUser);
	
	$txtPassword	= $_GET['txtPassword'];
	$txtPassword	= str_replace("'","&acute;",$txtPassword);
	
		# LOGIN CEK KE TABEL USER LOGIN
		$mySql = "SELECT * FROM tb_user WHERE username='$txtUser' AND password='$txtPassword'";
		$myQry = mysqli_query($koneksidb, $mySql) or die ("Query Salah : ".mysqli_error());
		$myData= mysqli_fetch_array($myQry);
		
		# JIKA LOGIN SUKSES
		if(mysqli_num_rows($myQry) >0) {
            // Menyimpan Kode yang Login
            session_start();
			$_SESSION['SES_LOGIN'] = $myData['id']; 
			// Refresh
			echo "<meta http-equiv='refresh' content='0; url=../userbooking.php'>";
		}
		else {
            echo mysqli_num_rows($myQry);
            
		}
    
?>