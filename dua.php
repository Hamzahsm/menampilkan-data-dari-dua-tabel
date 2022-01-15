<?php

require './function.php';

$datas = query("SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName FROM ((Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);")

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
			<th>OrderID</th>
			<th>Nama</th>
			<th>Pengirim</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($datas as $data) : ?>
		<tr>
			<td><?= $data['OrderID']; ?></td>
			<td><?= $data['CustomerName']; ?></td>
			<td><?= $data['ShipperName']; ?></td>
		</tr>
	<?php endforeach ;?>
	</tbody>
</table>
</body>
</html>