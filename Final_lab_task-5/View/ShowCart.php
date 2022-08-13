<?php
    //include '../Controller/DeleteFoodCheck.php';
    require_once '../Model/model.php';
$AllFoodMenu = showOrder();
?>

<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<style>
    body {
        color:#blue;
    }
    hr {
        position: relative;
        top: 20px;
        border: none;
        height: 5px;
        background: black;
        margin-bottom: 50px;
    }
</style>
<body>
    <div class="container" style="width: 500px;">
    <table style="font-size:25px;">
    <br><br><br><br><br><br><br><br>
	    <thead>
            <tr>
                <th style="border: solid 5px;">Cart ID</th>
                <th style="border: solid 5px; padding-left: 20px; padding-right: 20px;">Food ID</th>
                <th style="border: solid 5px; padding-left: 20px; padding-right: 20px;">Name</th>
                <th style="border: solid 5px; padding-left: 20px; padding-right: 20px;">Category</th>
                <th style="border: solid 5px; padding-left: 20px; padding-right: 20px;">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($AllFoodMenu as $i => $food): ?>
                <tr>
                    <td style="border: solid 5px;"><?php echo $food['cartID'] ?></td>
                    <td style="border: solid 5px; padding-left: 20px;"><?php echo $food['ID'] ?></td>
                    <td style="border: solid 5px; padding-left: 20px;"><?php echo $food['name'] ?></td>
                    <td style="border: solid 5px; padding-left: 20px;"><?php echo $food['cat'] ?></td>
                    <td style="border: solid 5px; padding-left: 20px;"><?php echo $food['price'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>