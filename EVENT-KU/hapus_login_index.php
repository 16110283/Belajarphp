<?php

include("config.php");

	//ambil id dari query string
	$id = $_GET['id_penjual'];

	// buat query hapus
	$sql = "DELETE FROM penjual WHERE id_penjual=$id";
	$query = mysqli_query($db, $sql);

	//apakah query hapus berhasil?
	if( $query){
		header('Location: index_login.php');
	} else {
		die("gagal menghapus. . .");
	}


?>