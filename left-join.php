<?php 

require './function.php' ;

$datas = query("SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
ORDER BY Customers.CustomerName;");

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
			<th>Name</th>
			<th>ID</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($datas as $data) : ?>
		<tr>
			<td><?= $data['CustomerName']; ?></td>
			<td><?= $data['OrderID']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>