<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rpl";

$db = mysqli_connect($server, $user, $password, $nama_database);

//mysqli_connect(mysql improvement berfungsi koneksi antara php dan mysql)

if(!$db){
	die("Gagal terhubung dengan database: ".mysqli_connect_error());
}

?>