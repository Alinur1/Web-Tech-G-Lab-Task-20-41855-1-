<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <?php 
    $pass=$newpass=$retypepass="";
    $passErr=$newpassErr=$retypepassErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["pass"])) {
            $passErr = "Password is required";
          } 
        else {
            $pass = $_POST["pass"];
            if (!preg_match("@[a-zA-Z0-9]@",$pass)) {
              $passErr = " must contain at least eight characters";
            }
            else if (!preg_match("@[^\w]@",$pass)) {
                $passErr = " must contain at least one special character";
            }
            else if (strlen($_POST["pass"]) <= '8') {
                $passErr = "Your Password Must Contain At Least 8 Characters!";
            }
        }

        if(empty($_POST["newpass"]))
        {
            $newpassErr = "New password is required.";
        }
        else
        {
            $newpass = $_POST["newpass"];
            if($newpass == $pass)
            {
                $newpassErr = "New password cannot be same as old password";
            }
        }

        if(empty($_POST["retypepass"]))
        {
            $retypepassErr = "Re type your password";
        }
        else
        {
            $retypepass = $_POST["retypepass"];
            if($retypepass == $newpass)
            {
                $retypepass = "New password doesnt match. try again";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend>Change Password</legend>
        <label>Current Password</label><br>
        <input type="password" name="password" value="<?php echo $pass;?>">
        <span class="error">* <?php echo $passErr;?></span><br>
        <hr>

        <label>New Password</label><br>
        <input type="password" name="newpassword" value="<?php echo $newpass;?>">
        <span class="error">* <?php echo $newpassErr;?></span><br>
        <hr>
        
        <label>Retype Password</label><br>
        <input type="password" name="retypepassword" value="<?php echo $retypepass;?>">
        <span class="error">* <?php echo $retypepassErr;?></span><br>
        <hr>
        <input type="submit" name="submit" value="Submit"><br>
    </fieldset>
</body>
</html>