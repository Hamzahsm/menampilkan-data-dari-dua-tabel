<?php 
// insert ke dalam 3 tabel sekaligus

$conn = mysqli_connect('localhost', 'root', '', 'ssve');

if(isset($_POST['submit'])){
	global $conn;

	$judul = $_POST['judul'];
	$detail = $_POST['detail'];
	$harga = $_POST['harga'];
	$penulis = $_POST['penulis'];

	$sql1 = "INSERT INTO artikel1 VALUES('','$judul','$detail')";
	$sql2 = "INSERT INTO artikel2 VALUES('','$judul','$harga')";
	$sql3 = "INSERT INTO artikel3 VALUES('','$judul', '$penulis')";
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	mysqli_query($conn, $sql3);
 
	header('location:satu.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inser ke dalam 3 tabel sekaligus</title>
</head>
<body>
	<form action="" method="POST">
		<label>Judul</label>
		<input type="text" name="judul">

		<label>Detail</label>
		<input type="text" name="detail">

		<label>Harga</label>
		<input type="number" name="harga">

		<label>Penulis</label>
		<input type="text" name="penulis">

		<button type="submit" name="submit">Submit</button>
		
	</form>
</body>
</html>