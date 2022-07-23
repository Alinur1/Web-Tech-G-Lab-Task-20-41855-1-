
<!DOCTYPE html>
<html>
<head>
	<title>Search Food</title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Food ID</th>
			<th>Food Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedFood as $i => $food): ?>
			<tr>
				<td><a href="../showFood.php?id=<?php echo $food['foodID'] ?>"><?php echo $food['foodID'] ?></a></td>
				<td><?php echo $food['foodName'] ?></td>
				<td><a href="../editCart.php?id=<?php echo $food['foodID'] ?>">Edit</a>&nbsp<a href="deleteCart.php?id=<?php echo $food['foodID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>