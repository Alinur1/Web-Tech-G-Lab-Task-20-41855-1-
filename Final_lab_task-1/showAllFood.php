<?php
require_once 'controller/foodInfo.php';

$foods = fetchAllFood();

include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Food Menu</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Food ID</th>
			<th>Food Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($foods as $i => $food): ?>
			<tr>
				<td><?php echo $food['foodID'] ?></a></td>
				<td><?php echo $food['foodName'] ?></td>
				<td><?php echo $food['price']?></td>
				<td><a href="editCart.php?foodID=<?php echo $food['foodID'] ?>">Edit</a>&nbsp<a href="controller/deleteCart.php?id=<?php echo $food['foodID'] ?>" onclick="return confirm('Are you sure want to delete this cart?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</body>
</html>