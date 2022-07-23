<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cart</title>
</head>
<body>
    <?php
    require_once 'controller/foodInfo.php';
    $food = fetchFood($_POST['foodID']);
    include "nav.php";
    ?>

    <form action="controller/updateCart.php" method="POST">
        <label for="foodID">Food ID:</label><br>
        <input value="<?php echo $food['foodID']?>" type="text" id="foodID" name="foodID"><br>
        <label for="foodName">Food Name:</label><br>
        <input value="<?php echo $food['foodName']?>" type="text" id="foodName" name="foodName"><br>
        <label for="price">Price:</label><br>
        <input value="<?php echo $food['price']?>" type="text" id="price" name="price">
        <label for="amount">Amount</label>
        <input value="<?php echo $food['amount']?>" type="text" id="amount" name="amount">
        <input type="submit" name="editFoodCart" value="Edit cart">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>