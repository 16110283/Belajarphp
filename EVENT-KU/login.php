<!DOCTYPE html>
<?php  
require_once ("config.php"); 
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>EVENT-KU</title>
    <link rel="stylesheet" href="css/Login.css"> 
    <link href="css/style.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="img/logo.png">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body background="img/login.jpg">



  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>


    <div id="login">
      <div class="body">

          <h2><a href="index.html" style="text-decoration:none">EVENT-KU</a></h2> 

          <form class="form" action="cek_login.php" method="post">
            <input class="user" type="text" name="username" placeholder="Enter Email"><br>
            <input class="user" type="password" name="password" placeholder="Enter Password"><br>
            
            <button class="log-in" type="submit" name="login"><a href="pemilik.php" style="text-decoration: none;"> LOGIN </a></button>
          </form>

          <p><a href="daftar.php">Sign Up</a>
          	<p> <a href="login_admin.php">Login as Admin</a>
      </div>
    </div>


  
  </body>
</html>