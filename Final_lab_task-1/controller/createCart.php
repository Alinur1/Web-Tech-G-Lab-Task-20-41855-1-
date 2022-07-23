<?php
require_once'../model/model.php';

if(isset($_POST['createCart']))
{
    $data['foodID'] = $_POST['foodID'];
    $data['foodName'] = $_POST['foodName'];
    $data['price'] = $_POST['price'];
    $data['amount'] = $_POST['amount'];

    if(addCart($data))
    {
        echo "Successfully added!";
    }
}
else
{
    echo "You are now allowed to access this page";
}
?>