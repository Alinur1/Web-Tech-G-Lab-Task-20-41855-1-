<?php
require_once 'controller/foodInfo.php';
$food = fetchFood($_POST['foodID']);
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See the Food</title>
</head>
<body>
<table>
	<tr>
        <th>Food ID</th>
		<th>Food name</th>
		<th>Price</th>
	</tr>
	<tr>
		<td><?php echo $food['foodID'] ?></a></td>
        <td><?php echo $food['foodName']?></td>
		<td><?php echo $food['price'] ?></td>
	</tr>

</table>
</body>
</html>