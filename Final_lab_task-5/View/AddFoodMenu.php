<?php
include '../Controller/ShowFoodMenu.php';
$food = fetchCart($_GET['id']);
?>

<html>
<head>
    <title></title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head> 
</head>
<body>
    <br>
        <div class="container" style="width:500px;">
            <form action="../Controller/AddFoodMenuCheck.php" name="addFoodForm" method="post">  
                <br><br><br><br>
                <?php   
                if(isset($error))  
                {  
                        echo $error;
                }
                ?>  
                <br> 
                <fieldset>
                        <legend>Food Item</legend> 
                        <label>ID</label>
                        <input type="text" name ="id" id="id" class="form-control" value="<?php echo $food['ID']?>"><p style="color:red"></p>
                        <label>Name</label>  
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $food['name']?>"><p style="color:red"></p>
                        <label>Category</label>
                        <input type="text" name = "cat" id="cat" class="form-control" value="<?php echo $food['cat']?>"><p style="color:red"></p>
                        <label>Price</label>
                        <input type="text" name = "price" id="price" class="form-control" value="<?php echo $food['price']?>"><p style="color:red"></p>
                        
                        <input type="submit" name="submit" value="Submit">
                </fieldset>           
                <?php  
                if(isset($message))  
                {  
                        echo $message;  
                }  
                ?>  
            </form>  
        </div>  
        <br />  
</body>
</html>