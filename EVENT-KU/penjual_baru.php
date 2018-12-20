<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Event-Ku</title>
    <link rel="stylesheet" href="css/Login.css"> 
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
	<body background="img/login.jpg">

    <div id="register">
      <div class="body">

          <h2><a href="index.html" style="text-decoration:none">Event-Ku</a></h2> 

          <form class="form" action="" method="">
          </div></div>

          <nav>
		<a href="daftar_admin.php">[+] Tambah Data Baru</a>
	</nav>

	<br>
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>No. HP</th>
			<th>E-Mail</th>	
			<th>Password</th>	
		</tr>

		<?php
		$sql = "SELECT * FROM penjual";
		$query = mysqli_query($db, $sql);

		while ($data = mysqli_fetch_array($query)) {
			?>
			<tr>
			<td><?php echo $data['id_penjual'];?></td>
			<td><?php echo $data['Nama_Depan']; ?></td>
			<td><?php echo $data['Nama_Belakang']; ?></td>
			<td><?php echo $data['No_HP']; ?></td>
			<td><?php echo $data['E_Mail']; ?></td>
			<td><?php echo $data['Password']; ?></td>
			<td>
				<a class="edit" href="editadmin.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapusadmin.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php }
		?>
	</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>



</body>
</html>