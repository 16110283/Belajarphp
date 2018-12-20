<?php
//mengaktifkan session
session_start();


//menghubungkan ke database
require_once ("config.php");

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
 
//perintah query input data dari database
$sql = "SELECT * FROM penjual WHERE E_Mail='$username' AND Password='$password'";
$query = mysqli_query($db, $sql);

if ($cek > 0){
	$_SESSION['E-Mail'] = $username;
	$_SESSION['status'] = "login";
	header("location:pemilik.php");
}else{
	header("location:login.php?pesan=gagal");
}
?> 