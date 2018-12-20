<?
include("config.php");

//Kalau tidak ada id di query string

if(!isset($_GET['id'])){
  header('Location: penjual_baru.php');
}

//ambil id dari query string
$id = $_GET['id_penjual'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM penjual WHERE id_penjual=$id";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
  die("data tidak ditemukan. . .");
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gerobak Sayur</title>
    <link rel="stylesheet" href="css/Login.css"> 
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body background="img/login.jpg">

    <div id="register">
      <div class="body">

          <h2><a href="index.html" style="text-decoration:none">Gerobak Sayur</a></h2> 

          <form class="form" action="aksidaftaradmin.php" method="POST">
            
            <input type="hidden" name="id" value="<?php echo $penjual['id_penjual'] ?>" />

            <input class="user" type="text" name="namad" value="<?php echo $penjual['Nama_Depan'] ?>" placeholder="Nama Depan"><br>
            <input class="user" type="text" name="namab" value="<?php echo $penjual['Nama_Belakang'] ?>" placeholder="Nama Belakang"><br>
            <input class="user" type="text" name="hp" value="<?php echo $penjual['no_hp'] ?>" placeholder="No. Handphone"><br>
            <input class="user" type="Email" name="Email" value="<?php echo $penjual['e_mail'] ?>" placeholder="Enter Email"><br>
            <input class="user" type="password" name="pass" value="<?php echo $penjual['pass'] ?>" placeholder="Enter password"><br>

            

            <button class="log-in" type="submit" name="daftar"><a href="penjual_baru.php" style="text-decoration: none;">DAFTAR </a></button>
          </form>

        </div>
      </div>
    


  
  </body>
</html>