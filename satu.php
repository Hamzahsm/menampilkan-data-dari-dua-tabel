<?php 
require './function.php';

$datas = query("SELECT Orders.OrderID, Customers.CustomerName FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;");

// query dari dua tabel yang berbeda dan di ambil 1 kolom per tabel 


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($datas as $data) :?>
		<tr>
			<td>1</td>
			<td><?= $data['OrderID']; ?></td>
			<td><?= $data['CustomerName']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>