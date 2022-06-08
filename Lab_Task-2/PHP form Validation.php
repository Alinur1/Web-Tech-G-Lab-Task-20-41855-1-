<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>
    <?php
        $name=$email=$dob=$Gender=$degree=$blood="";
        $nameErr=$emailErr=$dobErr=$GenderErr=$degreeErr=$bloodErr="";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["name"]))
            {
                $nameErr = "Name is required";
            }
            else
            {
                $name = $_POST["name"];
            }

            if(empty($_POST["email"]))
            {
                $emailErr = "Email is required";
            }
            else
            {
                $email = $_POST["email"];
            }
        }

    ?>

    <form method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
    
    <label>Name: </label>
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    <label>Email: </label>
    <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>