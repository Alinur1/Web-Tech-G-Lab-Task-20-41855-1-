<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Food</title>
</head>
<body>
    <?php
    include "nav.php";
    ?>

    <form method="POST" action="controller/findFood.php">
        <h1>Search Food</h1>
        <input type="text" name="foodName">
        <input type="submit" name="findFood" value="Search">
    </form>
</body>
</html>