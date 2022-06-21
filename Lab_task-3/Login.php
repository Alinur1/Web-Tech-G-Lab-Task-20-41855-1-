<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>

    <?php
   $nameErr = $passErr = "";
   $name = $pass = $remem = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["name"])) {
       $nameErr = "User Name is required";
     } else {
       $name = $_POST["name"];
       // Name validation
       if (!preg_match("/^[a-zA-Z0-9- '_]*$/",$name)) {
         $nameErr = "Only  alpha numeric characters, period, dash or
         underscore allowed";
       }
       else if (strlen($_POST["name"]) <= '1') {
           $nameErr = "Your username Must Contain At Least 2 Characters!";
       }
     }
     
     if(empty($_POST["pass"])) {
       $passErr = "Password is required";
     } else {
       $pass = $_POST["pass"];
       // Password validation
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
   }
    ?>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
<fieldset>
    <legend>LOGIN</legend>
  User Name: <br><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Password: <br><input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <input type="checkbox" name="remember" value="remember">Remember me
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  <br><br>
  <a href='forget.php'>Forget password?</a>
  <br>
  <a href='registration.php'>New Usre? Create account</a>
  <br>
</fieldset>
</form>

    
</body>
</html>