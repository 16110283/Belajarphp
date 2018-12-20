<?php
//Koneksi Database
include 'config.php';

//cek apakah tombol klik sudah di tekan atau belum
if (isset($_POST['daftar'])){


//Mengirim data dari form dan memasukkannya ke dalam tabel
$namad = $_POST['namad'];
$namab = $_POST['namab'];
$hp = $_POST['hp'];
$Email = $_POST['Email'];
$pass = $_POST['pass'];

//perintah query input data dari database
$sql = "INSERT INTO penjual (Nama_Depan, Nama_Belakang, No_HP, E_Mail, Password) VALUE ('$namad','$namab','$hp','$Email','$pass')";
$query = mysqli_query($db, $sql);

//apakah query berhasil disimpan atau tidak?
if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: penjual_baru.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('location: daftar_admin.php?status=gagal');
    }
	} else{
	die("Akses dilarang!");
}
?>