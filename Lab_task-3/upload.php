<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <fieldset>
        <legend>Profile Picture</legend>
        <form action="upload_complete.php" method="post" enctype="multipart/form-data">
        Select image to upload:<br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Upload Image" name="submit"><br><br>
        <label>***File must be jpeg, jpg or png and size must be not more than 4MB.</label>
        </form>
    </fieldset>
</body>
</html>