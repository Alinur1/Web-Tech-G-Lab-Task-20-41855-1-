<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
</head>
<body>
    <?php
    include "nav.php";
    ?>

    <form action="controller/createFoodcart.php" method="POST">
        <label for="foodID">Food ID:</label><br>
        <input type="text" id="foodID" name="foodID"><br>
        <label for="foodName">Food Name: </label><br>
        <input type="text" id="foodName" name="foodName"><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount"><br>
        <input type="submit" name="createFoodCart" value="Create cart"><br>
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>