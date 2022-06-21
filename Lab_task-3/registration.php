<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php 
    $message="";
    $error="";
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Registration succesful</p>";
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
    }
    ?>

<form method="post" >  
    <?php   
        if(isset($error))  
            {  
                echo $error;  
            }  
    ?>  
    <br /> 
    <fieldset>
        <legend>Registration</legend> 
        <label>Name</label><br>  
        <input type="text" name="name" class="form-control" /><br />  
        <label>E-mail</label><br>
        <input type="text" name = "email" class="form-control" /><br />
        <label>User Name</label><br>
        <input type="text" name = "un" class="form-control" /><br />
        <label>Password</label><br>
        <input type="password" name = "pass" class="form-control" /><br />
        <label>Confirm Password</label><br>
        <input type="password" name = "Cpass" class="form-control" /><br />

        
        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>                     
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <legend>Date of Birth:</legend>
        <input type="date" name="dob"> <br><br>
        
        <input type="submit" name="submit" value="Submit">
        <?php  
        if(isset($message))  
            {  
            echo $message;  
            echo "<br><br>";
            echo "<a href='Login.php'>LOGIN</a>";
            }  
        ?>
    </fieldset>  
    </form> 
</body>
</html>