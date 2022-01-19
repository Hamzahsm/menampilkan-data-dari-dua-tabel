<?php 

require './function.php';

$datas = query("SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country;")

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
			<th>Jumlah</th>
			<th>Nation</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($datas as $data ) :?>
		<tr>
			<td><?= $data['CustomerID']; ?></td>
			<td><?= $data['Country'] ?></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
</body>
</html>