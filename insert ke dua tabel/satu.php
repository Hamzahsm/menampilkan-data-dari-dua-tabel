<?php

$conn = mysqli_connect('localhost', 'root', '', 'ssve');

if(isset($_POST['submit'])){

	global $conn;
	$judul = $_POST['judul'];
	$detail = $_POST['detail'];
	$harga = $_POST['harga'];


	$sql1 = "INSERT INTO artikel1 VALUES('','$judul','$detail')";
	$sql2 = "INSERT INTO artikel2 VALUES('','$judul','$harga')";
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
 
	header('location:satu.php');
	


}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Upload ke dua tabel db</title>
</head>
<body>
<form action="" method="POST">
	<label>Judul</label>
	<input type="text" name="judul" >

	<label>Detail</label>
	<input type="text" name="detail">

	<label>Harga</label>
	<input type="number" name="harga">

	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>