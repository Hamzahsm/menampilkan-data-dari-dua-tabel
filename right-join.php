<?php 

require './function.php';

$datas = query("SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
FROM Orders
RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
ORDER BY Orders.OrderID;")

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
			<th>Order ID</th>
			<th>Last Name</th>
			<th>Firs Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($datas as $data) : ?>
		<tr>
			<td><?= $data['OrderID']; ?></td>
			<td><?= $data['LastName']; ?></td>
			<td><?= $data['FirstName']; ?></td>
		</tr>
	<?php endforeach;?>
	</tbody>

</table>
</body>
</html>