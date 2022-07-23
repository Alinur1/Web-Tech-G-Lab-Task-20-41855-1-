<?php
require_once '../model/model.php';

if(deleteCart($_POST['foodID']))
{
    header('Location: ../showAllFood.php');
}
?>