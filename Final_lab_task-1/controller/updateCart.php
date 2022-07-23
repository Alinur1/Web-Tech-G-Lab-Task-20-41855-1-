<?php
require_once '../model/model.php';

if(isset($_POST['updateCart']))
{
    $data['foodID'] = $_POST['foodID'];
    $data['foodName'] = $_POST['foodName'];
    $data['price'] = $_POST['price'];
    $data['amount'] = $_POST['amount'];

    if(updateCart($_POST['foodID'], $data))
    {
        echo 'Successfully updated!!';
        header('Location: ../showCart.php?foodID=' .$_POST["foodID"]);
    }
    else
    {
        echo "You are not allowed to access this page.";
    }
}
?>