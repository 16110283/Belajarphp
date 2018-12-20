<?php
//mengaktifkan session
session_start();


//menghubungkan ke database
require_once ("config.php");

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
 
 //menyeleksi data admin dan password yang dipost
$sql  = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

//menghitung jumlah data yang ditemukan
$cek= mysqli_num_rows($sql);

if ($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:menu_admin.php");
}else{
	header("location:login_admin.php?pesan=gagal");
}
?> 