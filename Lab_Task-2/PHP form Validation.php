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
        $name=$email=$dob=$gender=$degree=$blood="";
        $nameErr=$emailErr=$dobErr=$genderErr=$degreeErr=$bloodErr="";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["name"]))
            {
                $nameErr = "Name is required";
            }
            else
            {
                $name = $_POST["name"];
                if(!preg_match("/^[a-zA-Z- ]*$/",$name))
                {
                    $nameErr = "Only letters, periods and dash can be used.";
                }

                if(!str_word_count($name) < 2)
                {
                    $nameErr = "At least 2 words are required.";
                }             
            }


            if(empty($_POST["email"]))
            {
                $emailErr = "Email is required";
            }
            else
            {
                $email = $_POST["email"];

                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $emailErr = "Please enter a valid email.";
                }
            }

            if(empty($_POST["dob"]))
            {
                $dobErr = "Date of Birth is required";
            }
            else
            {
                $dob = $_POST["dob"];
            }

            if(empty($_POST["gender"]))
            {
                $genderErr = "Gender should be selected.";
            }
            else
            {
                $gender = $_POST["gender"];
            }

            if(empty($_POST["degree"]))
            {
                $degreeErr = "At least one degree must be selected.";
            }
            else
            {
                $degree = $_POST["degree"];
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

    <label>Date of Birth: </label>
    <input type="date" name="dob" value="<?php echo $dob;?>">
    <span class="error">* <?php echo $dobErr;?></span>
    <br><br>

    <label>Select Gender: </label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Other") echo "checked";?> value="Other"> Other
    <span class="error">*<?php echo $genderErr?></span>
    <br><br>

    

    <label>Select a degree: </label>
    <input type="checkbox" name="degree" <?php if(isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC
    <input type="checkbox" name="degree" <?php if(isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">HSC
    <input type="checkbox" name="degree" <?php if(isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
    <input type="checkbox" name="degree" <?php if(isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc
    <span class="error">*<?php echo $degreeErr?></span>
    <br><br>


    <label for="blood_group">Select your Blood Group: </label>
    <select>
        <option name="blood_group" <?php if(isset($blood) && $blood=="A+") echo "checked";?> value="A+">A+</option>
        <option name="blood_group" <?php if(isset($blood) && $blood=="B+") echo "checked";?> value="B+">B+</option>
        <option name="blood_group" <?php if(isset($blood) && $blood=="AB+") echo "checked";?> value="AB+">AB+</option>
        <option name="blood_group" <?php if(isset($blood) && $blood=="O+") echo "checked";?> value="O+">O+</option>
    </select>
    <span class="error">*<?php echo $bloodErr?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your input</h2>";
    echo "<b>Your name: </b>".$name;
    echo "<br>";
    echo "<b>Your email: </b>".$email;
    echo "<br>";
    echo "<b>Your Date of Birth: </b>".$dob;
    echo "<br>";
    echo "<b>Gender: </b>".$gender;
    echo "<br>";
    echo "<b>Degree you have achieved: </b>".$degree;
    echo "<br>";
    echo "<b>Your blood group: </b>".$blood;
    echo "<br>";
    ?>
</body>
</html>
