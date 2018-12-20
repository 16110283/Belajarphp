<?php

include("config.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['daftar'])){

	//ambil data dari formulir
	$namad = $_POST['namad'];
	$namab = $_POST['namab'];
	$hp = $_POST['hp'];
	$Email = $_POST['Email'];
	$pass = $_POST['pass'];

	//buat query update
	 $sql = "UPDATE penjual SET 'Nama_Depan=$namad', 'Nama_Belakang=$namab', 'No_HP=$hp', 'E_Mail=$Email', 'Password=$pass' WHERE id_penjual=$id"
	$query = mysqli_query($db, $sql);


	 //apakah query update berhasil?
	 if ($query){
	 	//kalau berhasil alihkan ke halaman list-siswa.php
	 	header('Location: penjual_baru.php');
	 } else {
	 	//Kalau gagal tampilan pesan seperti berikut
	 	die("Gagal menyimpan perubahan . . .");
	 }
   } else {
   	die("Akses dilarang . . .");
   }

   ?>